<?php

return [
    'client_id'         => [
        'required' => true,
        'env'      => 'FACEBOOK_CLIENT_ID',
        'bind'     => 'services.facebook.client_id',
        'type'     => 'anomaly.field_type.encrypted',
    ],
    'client_secret'     => [
        'required' => true,
        'env'      => 'FACEBOOK_CLIENT_SECRET',
        'bind'     => 'services.facebook.client_secret',
        'type'     => 'anomaly.field_type.encrypted',
    ],
    'scope'             => [
        'bind'   => 'services.facebook.scope',
        'type'   => 'anomaly.field_type.tags',
        'config' => [
            'default_value' => [
                'email',
                'public_profile',
            ],
        ],
    ],
    'application_scope' => [
        'bind'   => 'services.facebook.application_scope',
        'type'   => 'anomaly.field_type.tags',
        'config' => [
            'default_value' => [
                'email',
                'public_profile',
                'publish_actions',
            ],
        ],
    ],
];
