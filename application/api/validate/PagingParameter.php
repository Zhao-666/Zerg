<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2018/1/6
 * Time: 18:55
 */

namespace app\api\validate;


class PagingParameter extends BaseValidate
{
    protected $rule = [
        'page' => 'isPositiveInteger',
        'size' => 'isPositiveInteger'
    ];

    protected $message = [
        'page' => '分页页数必须为正整数',
        'size' => '分页参数必须为正整数'
    ];
}