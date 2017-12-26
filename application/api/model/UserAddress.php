<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2017/12/26
 * Time: 21:35
 */

namespace app\api\model;


class UserAddress extends BaseModel
{
    protected $hidden = [
        'id', 'user_id', 'delete_time'
    ];
}