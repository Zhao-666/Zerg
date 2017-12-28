<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2017/12/28
 * Time: 22:33
 */

namespace app\api\controller;


use app\api\service\Token as TokenService;
use think\Controller;

class BaseController extends Controller
{
    protected function checkPrimaryScope()
    {
        TokenService::needPrimaryScope();
    }

    protected function checkExclusiveScope()
    {
        TokenService::needExclusiveScope();
    }
}