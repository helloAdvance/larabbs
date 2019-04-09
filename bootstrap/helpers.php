<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/4/8
 * Time: 23:11
 */

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}