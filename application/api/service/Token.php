<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2017/12/23
 * Time: 16:08
 */

namespace app\api\service;


class Token
{
    public static function generateToken(){
        $randChars = getRandChar(32);
        $timestamp = input('server.REQUEST_TIME_FLOAT');
        $salt = config('secure.token_salt');
        return md5($randChars.$timestamp.$salt);
    }
}