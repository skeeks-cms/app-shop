<?php
/**
 * Конфиг сайтвой части приложения
 *
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010-2014 SkeekS (Sx)
 * @date 15.10.2014
 * @since 1.0.0
 */
$config = [
    'params'           => [],

    'on beforeRequest' => function ($event) {
        \Yii::setAlias('template', '@app/views');
    },

    'components'       => [

        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'skeeks',
        ],
        'user'    => [
            'identityClass' => 'common\models\User',
        ],

        'formatter'    => [

            //'currencyCode' => 'RUB',
            'numberFormatterOptions' => [
                NumberFormatter::MIN_FRACTION_DIGITS => 0,
                NumberFormatter::MAX_FRACTION_DIGITS => 2,
            ],
            'numberFormatterSymbols' => [
                /*NumberFormatter::CURRENCY_SYMBOL => '<span>₽</span>',*/
                NumberFormatter::CURRENCY_SYMBOL => '<span>р.</span>',
            ]
        ],

        /*'seo' => [
            'canUrl' => [
                'scheme' => 'https',
                'host'   => 'sweet-jam.ru',
            ],
        ],*/

        'view' => [
            'on beforeRender' => function () {
                if (\common\themes\app\AppTheme::isInitBeforeRender()) {
                    \common\themes\app\AppTheme::initBeforeRender();
                }
            },

            'theme' => [
                'class'   => \common\themes\app\AppTheme::class,
/*
                'address' => 'Московская область, пос. Андреевка, мкр. Высокое, д. 50',
                'title' => 'Интернет-магазин домашних заготовок.',
                'phone' => '+7 (925) 712-00-60',
                'email' => 'info@sweet-jam.ru',*/
            ],
        ],
    ],
];
return $config;

