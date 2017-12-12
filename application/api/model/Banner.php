<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2017/12/2
 * Time: 22:50
 */

namespace app\api\model;


use think\Db;
use think\Model;

class Banner extends Model
{
    public function items(){
        return $this->hasMany('BannerItem','banner_id','id');
    }
    public static function getBannerByID($id)
    {
//        $result = Db::table('banner_item')->where('banner_id','=',$id)->select();
        $result = Db::table('banner_item')
            ->where(function ($query) use ($id) {
                $query->where('banner_id', '=', $id);
            })
            ->select();
        return $result;
    }
}