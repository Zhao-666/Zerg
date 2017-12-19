<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2017/12/19
 * Time: 21:16
 */

namespace app\api\validate;


class TokenGet extends BaseValidate
{
    protected $rule = [
        'code' => 'require|isNotEmpty'
    ];

    protected $message = [
        'code' => '没有code还想获取token?'
    ];
}