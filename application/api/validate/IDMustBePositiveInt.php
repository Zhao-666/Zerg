<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2017/11/29
 * Time: 22:54
 */

namespace app\api\validate;

class IDMustBePositiveInt extends BaseValidate
{
    protected $rule = [
        'id' => 'require|isPositiveInteger'
    ];

    protected $message=[
        'id'=>'id必须为正整数'
    ];

}