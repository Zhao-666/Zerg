<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2017/12/24
 * Time: 0:13
 */

namespace app\api\model;


class ProductImage extends BaseModel
{
    protected $hidden = [
        'img_id', 'delete_time', 'product_id'
    ];

    public function imgUrl()
    {
        return $this->belongsTo('Image', 'img_id', 'id');
    }
}