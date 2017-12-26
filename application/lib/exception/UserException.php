<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2017/12/26
 * Time: 20:50
 */

namespace app\lib\exception;


class UserException extends BaseException
{
    public $code = 404;
    public $msg = '用户不存在';
    public $errorCode = 60000;
}