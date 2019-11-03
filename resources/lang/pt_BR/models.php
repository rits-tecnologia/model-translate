<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Custom Models Translations
    |--------------------------------------------------------------------------
    */

    'App\\User' => [
        'name' => 'Usuário',

        'attributes' => [
            'email' => 'E-mail',
            'password' => 'Senha',
            'password_confirmation' => 'Confirmação de senha',
        ],

        'actions' => [
            'label' => 'Usuários',
            'index' => 'Lista de usuários',
            'create' => 'Criar usuário',
            'edit' => 'Editar usuário',
            'delete' => 'Excluir usuário',
            'restore' => 'Restaurar usuário',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Default Model Translations
    |--------------------------------------------------------------------------
    */

    'default' => [
        'attributes' => [
            'name' => 'Nome'
        ],

        'actions' => [
            'label' => 'Recursos',
            'index' => 'Lista de recursos',
            'show' => 'Visualizar recurso',
            'create' => 'Criar recurso',
            'edit' => 'Editar recurso',
            'delete' => 'Remover recurso',
            'restore' => 'Restaurar recurso',
            'save' => 'Salvar alterações',

            'success' => [
                'created' => 'Recurso criado',
                'updated' => 'Recurso atualizado',
                'deleted' => 'Recurso apagado',
                'restored' => 'Recurso restaurado',
            ],

            'failed' => [
                'created' => 'Falha ao criar recurso',
                'updated' => 'Falha ao atualizar recurso',
                'deleted' => 'Falha ao excluir recurso',
                'restored' => 'Falha ao restaurar recurso',
            ],
        ],
    ],
];
