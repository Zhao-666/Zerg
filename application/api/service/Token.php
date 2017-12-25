<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2017/12/23
 * Time: 16:08
 */

namespace app\api\service;


use app\lib\exception\TokenException;
use think\Exception;

class Token
{
    public static function generateToken()
    {
        $randChars = getRandChar(32);
        $timestamp = input('server.REQUEST_TIME_FLOAT');
        $salt = config('secure.token_salt');
        return md5($randChars . $timestamp . $salt);
    }

    public static function getCurrentTokenVar($key)
    {
        $token = request()->header('token');
        $vars = cache($token);
        if (empty($vars)) {
            throw new TokenException();
        } else {
            if (!is_array($vars)) {
                $vars = json_decode($vars);
            }
            if (array_key_exists($key, $vars)) {
                return $vars[$key];
            } else {
                throw new Exception('尝试获取的Token变量并不存在');
            }
        }
    }

    public static function getCurrentUid()
    {
        $uid = self::getCurrentTokenVar('uid');
        return $uid;
    }
}