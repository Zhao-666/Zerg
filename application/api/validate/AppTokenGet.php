<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2018/1/26
 * Time: 20:45
 */

namespace app\api\validate;


class AppTokenGet extends BaseValidate
{
    protected $rule = [
        'ac' => 'require|isNotEmpty',
        'se' => 'require|isNotEmpty'
    ];
}