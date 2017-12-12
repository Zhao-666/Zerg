<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2017/12/4
 * Time: 21:29
 */

namespace app\lib\exception;


use think\Exception;

class BaseException extends Exception
{
    //HTTP状态码
    public $code = 400;

    //错误具体信息
    public $msg = 'ParamError';

    //自定义的错误码
    public $errorCode = 10000;

    public function __construct($param = [])
    {
        if (!is_array($param)) {
//            new Exception('参数必须是数组');
            return;
        }
        if (array_key_exists('code', $param)) {
            $this->code = $param['code'];
        }
        if (array_key_exists('msg', $param)) {
            $this->msg = $param['msg'];
        }
        if (array_key_exists('errorCode', $param)) {
            $this->errorCode = $param['errorCode'];
        }
    }
}