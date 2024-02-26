<?php

declare(strict_types=1);

return [

    'config-plugin-options' => [
        'source-directory' => 'config',
        "package-types" => ["library", "yii2-extension"],
    ],

    'config-plugin' => [

        'params' => [
            'common/params.php',
        ],
        "web" => [
            "common/main.php"
        ],
        "console" => [
            "common/main.php"
        ],


        'params-web-dev' => [
            '$params',
            '?common/params-dev.php',
            '?web/params.php',
            '?web/params-dev.php',
        ],
        'params-web-prod' => [
            '$params',
            '?common/params-prod.php',
            '?web/params.php',
            '?web/params-prod.php',
        ],

        'params-console-dev' => [
            '$params',
            '?common/params-dev.php',
            '?console/params.php',
            '?console/params-dev.php',
        ],
        'params-console-prod' => [
            '$params',
            '?common/params-prod.php',
            '?console/params.php',
            '?console/params-prod.php',
        ],



        'web-dev' => [
            '$web',
            '?common/main-dev.php',
            'web/main.php',
            '?web/main-dev.php',
        ],
        'web-prod' => [
            '$web',
            '?common/main-prod.php',
            'web/main.php',
            '?web/main-prod.php',
        ],

        'console-dev' => [
            '$console',
            '?common/main-dev.php',
            'console/main.php',
            '?console/main-dev.php',
        ],
        'console-prod' => [
            '$console',
            '?common/main-prod.php',
            'console/main.php',
            '?console/main-prod.php',
        ]
    ],
];