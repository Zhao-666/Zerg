<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2017/12/23
 * Time: 16:26
 */

namespace app\lib\exception;


class TokenException extends BaseException
{
    public $code = 401;
    public $msg = 'Token已过期或无效的Token';
    public $errorCode = 10001;
}