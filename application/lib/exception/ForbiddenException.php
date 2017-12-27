<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2017/12/27
 * Time: 21:42
 */

namespace app\lib\exception;


class ForbiddenException extends BaseException
{
    public $code = 403;
    public $msg = '权限不够';
    public $errorCode = 10001;
}