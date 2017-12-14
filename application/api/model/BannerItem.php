<?php

namespace app\api\model;


class BannerItem extends BaseModel
{
    protected $hidden = [
        'id',
        'update_time',
        'delete_time',
        'banner_id',
        'img_id'
    ];

    public function img()
    {
        return $this->belongsTo('Image', 'img_id', 'id');
    }
}
