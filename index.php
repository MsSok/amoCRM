<?php

include ("config.php");
include ("functions.php");

$data = [
    '{
        "type": "call_result",
        "lead": {
            "id": 50533092696,
            "name": "ООО Ромашка",
            "comment": "",
            "post": null,
            "city": "Москва",
            "business": "",
            "homepage": null,
            "emails": [],
            "inn": "7736265457",
            "kpp": null,
            "parent_lead_id": null,
            "tags": [],
            "address": null,
            "external_id": null,
            "custom_fields": {
                "FIELD_50000005819": null
            },
            "created_at": "2024-05-24T01:20:22.000+03:00",
            "updated_at": "2024-05-24T02:00:18.000+03:00",
            "deleted_at": null,
            "lead_phones": [],
            "phones": "+79999999999",
            "responsible_id": 120408,
            "search_data": "42516|ООО РОМАШКА|+79999999999|МОСКВА|Г. МОСКВА И МОСКОВСКАЯ ОБЛАСТЬ|7736265457|ВАСИЛЬКОВ ВАСИЛИЙ ВАСИЛЬЕВИЧ|+79999999999|89999999999|МОСКВА|Г. МОСКВА И МОСКОВСКАЯ ОБЛАСТЬ|+7 (999) 999-99-99",
            "last_call_date": null
        },
        "contact": {
            "id": 50533092697,
            "name": "Васильков Василий Васильевич",
            "comment": "",
            "post": "",
            "city": "Москва",
            "business": null,
            "homepage": "",
            "emails": [],
            "inn": null,
            "kpp": null,
            "parent_lead_id": 50533092696,
            "tags": [],
            "address": null,
            "external_id": null,
            "custom_fields": {
                "FIELD_50000004608": [
                    50000000736,
                    50000000737
                ],
                "FIELD_50000004612": 50000000790,
                "FIELD_50000008896": null
            },
            "created_at": "2024-05-24T01:20:22.000+03:00",
            "updated_at": "2024-05-24T02:00:20.955+03:00",
            "deleted_at": null,
            "lead_phones": [
                "+7 (999) 999-99-99"
            ],
            "phones": "+79999999999",
            "responsible_id": 120408,
            "search_data": null,
            "last_call_date": null
        },
        "call": {
            "id": 50787206122,
            "phone": "+79999999999",
            "source": "+79250550694",
            "direction": "out",
            "params": {},
            "lead_id": 50533092697,
            "organization_id": 50533092696,
            "user_id": 120408,
            "connected_at": null,
            "ended_at": "2024-05-24T02:00:18.000+03:00",
            "reason": "",
            "duration": 0,
            "scenario_id": 50000006506,
            "result_id": 50000100458,
            "incoming_phone": null,
            "external_access_id": null,
            "recording_url": null,
            "call_type": "outgoing",
            "region": "г. Москва и Московская область",
            "local_time": "02:00",
            "amocrm_associations": [],
            "amocrm_entity_id": null,
            "amocrm_entity_type": null,
            "call_project_id": null,
            "call_project_title": null,
            "scenario_result_group_id": 50000009871,
            "scenario_result_group_title": "Успешные"
        },
        "call_result": {
            "result_id": 50000100458,
            "result_name": "Лид",
            "comment": "Тест 4"
        }
    }',
    '{
        "type": "call_result",
        "lead": {
            "id": 726962697,
            "name": "Иван Иванович",
            "comment": null,
            "post": null,
            "city": null,
            "business": null,
            "homepage": "",
            "emails": [],
            "inn": null,
            "kpp": null,
            "parent_lead_id": null,
            "tags": [],
            "address": null,
            "external_id": null,
            "custom_fields": {
                "FIELD_4271": "Utm_term",
                "FIELD_4272": "Utm_source",
                "FIELD_4273": "Utm_capmaign",
                "FIELD_4274": "Utm_medium",
                "FIELD_4275": "Utm_content",
                "FIELD_4276": "Gclid"
            },
            "created_at": "2024-05-17T10:51:55.447+03:00",
            "updated_at": "2024-05-23T19:34:02.000+03:00",
            "deleted_at": null,
            "lead_phones": [
                "+7 (999) 999-99-99"
            ],
            "phones": "+79999999999",
            "responsible_id": 176085,
            "search_data": "50652|+79999999999|+79999999999|89999999999|+7 (999) 999-99-99",
            "last_call_date": "2024-05-23T19:34:02.000+03:00"
        },
        "contact": null,
        "call": {
            "id": 954536895,
            "phone": "+79999999999",
            "source": "+79265329935",
            "direction": "out",
            "params": {
                "external_access_id": "c7f0b756-40f6-491b-b994-d4705684c2cd"
            },
            "lead_id": 726962697,
            "organization_id": 726962697,
            "user_id": 173946,
            "connected_at": null,
            "ended_at": "2024-05-23T19:34:03.000+03:00",
            "reason": null,
            "duration": 0,
            "scenario_id": 71896,
            "result_id": 611305,
            "incoming_phone": null,
            "external_access_id": "c7f0b756-40f6-491b-b994-d4705684c2cd",
            "recording_url": null,
            "call_type": "outgoing",
            "region": "г. Москва и Московская область",
            "local_time": "19:34",
            "amocrm_associations": [
                {
                    "amocrm_entity_id": 14401575,
                    "amocrm_entity_type": "lead",
                    "api_endpoint": "https://infowantresultserviceru.amocrm.ru"
                },
                {
                    "amocrm_entity_id": 19169059,
                    "amocrm_entity_type": "contact",
                    "api_endpoint": "https://infowantresultserviceru.amocrm.ru"
                }
            ],
            "amocrm_entity_id": 14401575,
            "amocrm_entity_type": "lead",
            "call_project_id": null,
            "call_project_title": null,
            "scenario_result_group_id": 43338,
            "scenario_result_group_title": "Успешные"
        },
        "call_result": {
            "result_id": 611305,
            "result_name": "Лид",
            "comment": "Тест Тест"
        }
    }',
    '{
        "type": "call_result",
        "lead": {
            "id": 50430648585,
            "name": "Денис Петрович",
            "comment": null,
            "post": "",
            "city": "",
            "business": null,
            "homepage": "",
            "emails": [],
            "inn": null,
            "kpp": null,
            "parent_lead_id": null,
            "tags": [],
            "address": "",
            "external_id": "908167403",
            "custom_fields": {
                "": null,
                "FIELD_50000007592": null,
                "FIELD_50000007593": [
                50000001811
                ],
                "FIELD_50000007594": null,
                "FIELD_50000007635": null,
                "FIELD_50000007636": 50000001826,
                "FIELD_50000007637": null
            },
            "created_at": "2023-12-02T12:17:23.049+03:00",
            "updated_at": "2023-12-21T21:17:54.000+03:00",
            "deleted_at": null,
            "phones": "+79064408676",
            "responsible_id": 182978,
            "search_data": "51421|ДЕНИС ПЕТРОВИЧ|+79064408676|89064408676|+7 (906) 440-86-76",
            "last_call_date": "2023-12-21T21:17:54.000+03:00"
        },
        "contact": null,
        "call": {
            "id": 50629930452,
            "phone": "+79064408676",
            "source": "user_64d22fafdf3ee2cc362b30c9",
            "direction": "out",
            "params": {},
            "lead_id": 50430648585,
            "organization_id": 50430648585,
            "user_id": 179916,
            "connected_at": null,
            "ended_at": "2023-12-21T21:17:54.000+03:00",
            "reason": "487 Request Cancelled",
            "duration": 0,
            "scenario_id": 50000013363,
            "result_id": 50000237106,
            "incoming_phone": null,
            "external_access_id": null,
            "recording_url": null,
            "call_type": "outgoing",
            "region": "Ставропольский край",
            "local_time": "21:17",
            "amocrm_associations": [],
            "amocrm_entity_id": null,
            "amocrm_entity_type": null,
            "call_project_id": null,
            "call_project_title": null,
            "scenario_result_group_id": 50000018310,
            "scenario_result_group_title": "Успешные"
        },
        "call_result": {
            "result_id": 50000237106,
            "result_name": "Лид",
            "comment": "Тест 3"
        }
    }'
];

$structuredData = structureData($data);
$accessToken = getAccessToken();
sendDataToAmoCRM($accessToken, $structuredData);

?>
