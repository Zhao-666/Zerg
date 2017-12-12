<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2017/11/29
 * Time: 22:29
 */

namespace app\api\validate;

use think\Validate;
class TestValidate extends Validate
{
    protected $rule = [
      'name'=>'require'
    ];
}