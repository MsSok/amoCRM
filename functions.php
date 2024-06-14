<?php

function structureData($data) {
    $structuredData = [];
    foreach ($data as $entry) {
        $entryData = json_decode($entry, true);
        $structuredEntry = [];

        // Проверяем наличие необходимых полей
        if (isset($entryData['lead']['name'])) {
            $structuredEntry['company_name'] = $entryData['lead']['name']; // название компании
        }

        if (isset($entryData['contact']['name'])) {
            $structuredEntry['name'] = $entryData['contact']['name']; // имя (полное)
        }

        if (isset($entryData['contact']['phones'])) {
            $structuredEntry['phone'] = $entryData['contact']['phones']; // рабочий телефон
        }

        $structuredData[] = $structuredEntry;
    }

    return $structuredData;
}

function saveAccessTokenToFile($filename, $tokenData) {
    $tokenData['created_at'] = time();
    file_put_contents($filename, json_encode($tokenData));
}

function loadAccessTokenFromFile($filename) {
    if (file_exists($filename)) {
        return json_decode(file_get_contents($filename), true);
    }

    return null;
}

function authenticate() {
    GLOBAL $config;

    $url = "https://{$config['subdomain']}.amocrm.ru/oauth2/access_token";

    $data = [
        'client_id' => $config['client_id'],
        'client_secret' => $config['client_secret'],
        'grant_type' => 'authorization_code',
        'code' => $config['auth_code'],
        'redirect_uri' => $config['redirect_uri']
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    $response = curl_exec($ch);
    curl_close($ch);

    $tokenData = json_decode($response, true);
    if (isset($tokenData['access_token'])) {
        saveAccessTokenToFile('access_token.json', $tokenData);
    }

    return $tokenData;
}

function getAccessToken() {
    $tokenData = loadAccessTokenFromFile('access_token.json');

    // Проверка срока действия токена
    if ($tokenData) {
        $expiresIn = $tokenData['expires_in'];
        $createdAt = $tokenData['created_at'];

        // Текущая временная метка
        $currentTime = time();

        if ($currentTime < $createdAt + $expiresIn) {
            return $tokenData['access_token'];
        }
    }

    // Если токен отсутствует или недействителен, выполнить аутентификацию
    $authResponse = authenticate();

    return $authResponse['access_token'];
}

// Функция для отправки данных в AmoCRM
function sendDataToAmoCRM($accessToken, $structuredData) {
    GLOBAL $config;

    $url = "https://{$config['subdomain']}.amocrm.ru/api/v4/leads/complex";

    foreach ($structuredData as $entry) {
        // Создание массива данных для запроса
        $data = [[
            'name' => isset($entry['name']) ? $entry['name'] : '',
        ]];

        $customFields = [];

        // Проверка наличия имени и добавление пользовательских полей
        if (isset($entry['name'])) {
            $entry['short_name'] = explode(' ', $entry['name']);
            if (isset($entry['short_name'][1])) {
                $customFields[] = [
                    'field_id' => 508897,
                    'values' => [
                        ['value' => $entry['short_name'][1]]
                    ]
                ];
            }
        }

        // Проверка наличия названия компании и добавление пользовательских полей
        if (isset($entry['company_name'])) {
            $customFields[] = [
                'field_id' => 508899,
                'values' => [
                    ['value' => $entry['company_name']]
                ]
            ];
        }

        if (!empty($customFields)) {
            $data[0]['custom_fields_values'] = $customFields;
        }

        $contact = [];
        // Проверка наличия телефона и добавление контактной информации
        if (isset($entry['phone'])) {
            $contact = [
                'custom_fields_values' => [
                    [
                        'field_code' => 'PHONE',
                        'values' => [
                            ['value' => $entry['phone'], 'enum_code' => 'WORK']
                        ]
                    ]
                ]
            ];
        }

        if (!empty($contact)) {
            $data[0]['_embedded'] = [
                'contacts' => [$contact]
            ];
        }

        // Инициализация CURL и отправка запроса
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: Bearer ' . $accessToken,
            'Content-Type: application/json'
        ]);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            echo 'Ошибка curl: ' . curl_error($ch);
        }

        curl_close($ch);

        echo $response;
    }
}

?>