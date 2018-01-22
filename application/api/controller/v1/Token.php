<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2017/12/19
 * Time: 21:15
 */

namespace app\api\controller\v1;


use app\api\service\UserToken;
use app\api\validate\TokenGet;
use app\lib\exception\ParameterException;
use app\api\service\Token as TokenService;

class Token
{
    public function getToken($code = '')
    {
        (new TokenGet())->goCheck();
        $ut = new UserToken($code);
        $token = $ut->get();
        return [
            'token' => $token
        ];
    }

    public function verifyToken($token = '')
    {
        if (!$token) {
            throw new ParameterException(['msg' => 'Token不允许为空']);
        }
        $valid = TokenService::verifyToken($token);
        return [
            'isValid'=>$valid
        ];
    }
}