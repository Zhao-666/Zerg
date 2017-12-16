<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2017/12/16
 * Time: 9:23
 */

namespace app\api\validate;


class Count extends BaseValidate
{
    protected $rule = [
        'count' => 'isPositiveInteger|between:1,15'
    ];
}