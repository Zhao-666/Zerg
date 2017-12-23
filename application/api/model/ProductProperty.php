<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2017/12/24
 * Time: 0:13
 */

namespace app\api\model;


class ProductProperty extends BaseModel
{
    protected $hidden = [
        'id', 'delete_time', 'update_time'
    ];
}