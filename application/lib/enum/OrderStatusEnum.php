<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2018/1/3
 * Time: 21:53
 */

namespace app\lib\enum;


class OrderStatusEnum
{
    //待支付
    const UNPAID = 1;

    //已支付
    const PAID = 2;

    //已发货
    const DELIVERER = 3;

    //已支付，但库存不足
    const PAID_BUT_OUT_OF = 4;
}