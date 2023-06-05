<?php
return [
    "components" => [
        'user'    => [
            'identityClass' => 'common\models\User',
        ],

        'view' => [

            'themes' => [
                'app' => [
                    'class' => \common\themes\app\AppTheme::class,
                ],
            ],

            'defaultThemeId' => 'app',

            'on beforeRender' => function () {
                if (\common\themes\app\AppTheme::isInitBeforeRender()) {
                    \common\themes\app\AppTheme::initBeforeRender();
                }
            },
        ],
    ]
];