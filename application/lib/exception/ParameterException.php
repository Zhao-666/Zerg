<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2017/12/4
 * Time: 22:32
 */

namespace app\lib\exception;



class ParameterException extends BaseException
{
    public $code = 400;
    public $msg = '参数错误';
    public $errorCode = 10000;
}