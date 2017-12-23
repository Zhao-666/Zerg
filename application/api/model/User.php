<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2017/12/19
 * Time: 21:29
 */

namespace app\api\model;


class User extends BaseModel
{
    public static function getByOpenID($openid)
    {
        $user = self::where('openid', '=', $openid)->find();
        return $user;
    }

}