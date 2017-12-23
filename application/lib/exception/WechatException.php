<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2017/12/23
 * Time: 11:27
 */

namespace app\lib\exception;


class WechatException extends BaseException
{
    public $code = 400;
    public $msg = '微信服务器接口调用失败';
    public $errorCode = 10002;
}