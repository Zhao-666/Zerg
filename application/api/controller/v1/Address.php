<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2017/12/25
 * Time: 22:29
 */

namespace app\api\controller\v1;


use app\api\validate\AddressNew;
use app\api\service\Token as TokenService;

class Address
{
    public function createOrUpdateAddress()
    {
        (new AddressNew())->goCheck();
        $uid = TokenService::getCurrentUid();
        
    }
}