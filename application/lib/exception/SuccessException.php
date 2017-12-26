<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2017/12/26
 * Time: 21:01
 */

namespace app\lib\exception;


class SuccessException extends BaseException
{
    public $code = 201;
    public $msg = 'ok';
    public $errorCode = 0;
}