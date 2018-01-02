<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2018/1/1
 * Time: 22:22
 */

namespace app\api\model;


class Order extends BaseModel
{
    protected $hidden = [
        'update_time', 'user_id', 'delete_time'
    ];
    protected $autoWriteTimestamp = true;
}