<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2017/12/16
 * Time: 10:08
 */

namespace app\lib\exception;


class CategoryException extends BaseException
{
    public $code = 404;
    public $msg = '指定类目不存在，请检查ID';
    public $errorCode = 50000;
}