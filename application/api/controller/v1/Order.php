<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2017/12/27
 * Time: 21:55
 */

namespace app\api\controller\v1;


use app\api\controller\BaseController;
use app\api\validate\OrderPlace;

class Order extends BaseController
{
    protected $beforeActionList = [
        'checkExclusiveScope' => ['only' => 'placeOrder']
    ];

    public function placeOrder()
    {
        (new OrderPlace())->goCheck();
    }
}