<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2017/12/2
 * Time: 22:50
 */

namespace app\api\model;


class Banner extends BaseModel
{
    protected $hidden = [
        'update_time',
        'delete_time'
    ];

    public function items()
    {
        return $this->hasMany('BannerItem', 'banner_id', 'id');
    }

    public static function getBannerByID($id)
    {
        $banner = self::with(['items.img'])
            ->find($id);
        return $banner;
    }
}