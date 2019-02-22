<?php
/**
 * Created by PhpStorm.
 * User: smbar
 * Date: 15-Aug-18
 * Time: 9:53 AM
 */

$url_rules = [
    '<alias:\w+>' => 'site/<alias>',
    //candidate actions
    'candidate/register' => 'candidate/default/signup',
    'candidate/login' => 'candidate/default/login',
    'candidate/logout' => 'candidate/default/logout',

    //principal actions
    'principal/register' => 'principal/default/signup',
    'principal/login' => 'principal/default/login',
    'principal/logout' => 'principal/default/logout',

    //sub county actions
    'sub-county/register' => 'sub-county/default/signup',
    'sub-county/login' => 'sub-county/default/login',
    'sub-county/logout' => 'sub-county/default/logout',

    //county actions
    'county/register' => 'county/default/signup',
    'county/login' => 'county/default/login',
    'county/logout' => 'county/default/logout'
];

return $url_rules;