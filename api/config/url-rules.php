<?php
/**
 * Created by PhpStorm.
 * User: MASGEEK
 * Date: 7/25/2018
 * Time: 12:05 PM
 */

$url_rules = [
    //'<controller:\w+>/<id:\d+>' => '<controller>/view',
    //'<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
    //'<controller:\w+>/<action:\w+>' => '<controller>/<action>',
    //'<module:\w+>/<controller:\w+>/<id:\d+>' => '<module>/<controller>/view',
    //'<module:\w+>/<controller:\w+>/<action:\w+>/<id:\d+>' => '<module>/<controller>/<action>',
    [
        'class' => 'yii\rest\UrlRule',
        //'pluralize' => false,
        'controller' => [
            'v1/site',
        ],
        'tokens' => [
            '{id}' => '<id:\\w+>',
        ],
        'extraPatterns' => [
            'register' => 'register',
            'authorize' => 'authorize',
            'access-token' => 'access-token',
        ]
    ],
    [
        'class' => 'yii\rest\UrlRule',
        'controller' => [
            'v1/country',
            'v1/employee',
            'v1/user',
        ],
        'tokens' => [
            '{id}' => '<id:\\w+>'
        ]

    ],
    'v1/register' => 'v1/site/register',
    'v1/authorize' => 'v1/site/authorize',
    'v1/access-token' => 'v1/site/access-token',
    'v1/me' => 'v1/site/me',
    'v1/logout' => 'v1/site/logout',
];

return $url_rules;