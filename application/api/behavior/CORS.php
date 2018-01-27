<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2018/1/27
 * Time: 10:04
 */

namespace app\api\behavior;


class CORS
{
    public function appInit(&$params)
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: token, Origin, X-Requested-With, Content-Type, Accept");
        header('Access-Control-Allow-Methods: GET');
        if (request()->isOptions()) {
            exit();
        }
    }
}