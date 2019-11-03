<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Custom Models Translations
    |--------------------------------------------------------------------------
    */

    'App\\User' => [
        'name' => 'User',

        'attributes' => [
            'email' => 'E-mail',
            'password' => 'Password',
            'password_confirmation' => 'Password confirmation',
        ],

        'actions' => [
            'label' => 'Users',
            'index' => 'Users list',
            'create' => 'Create user',
            'edit' => 'Edit user',
            'delete' => 'Delete user',
            'restore' => 'Restore user',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Default Model Translations
    |--------------------------------------------------------------------------
    */

    'default' => [
        'attributes' => [
            'name' => 'Name'
        ],

        'actions' => [
            'label' => 'Resources',
            'index' => 'Resources list',
            'show' => 'Show resource',
            'create' => 'Create resource',
            'edit' => 'Edit resource',
            'delete' => 'Delete resource',
            'restore' => 'Restore resource',
            'save' => 'Save',

            'success' => [
                'created' => 'Resource created',
                'updated' => 'Resource updated',
                'deleted' => 'Resource deleted',
                'restored' => 'Resource restored',
            ],

            'failed' => [
                'created' => 'Failed on create resource',
                'updated' => 'Failed on update resource',
                'deleted' => 'Failed on delete resource',
                'restored' => 'Failed on restore resource',
            ],
        ],
    ],
];
