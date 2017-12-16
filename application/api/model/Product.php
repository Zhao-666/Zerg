<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2017/12/14
 * Time: 21:52
 */

namespace app\api\model;


class Product extends BaseModel
{
    protected $hidden = [
        'delete_time', 'select_time', 'update_time', 'pivot', 'from', 'category_id','main_img_id'
    ];

    public function getMainImgUrlAttr($value,$data){
        return $this->prefixImgUrl($value,$data);
    }

    public static function getMostRecent($count){
        $products = self::limit($count)->order('create_time desc')->select();
        return $products;
    }
    public static function getProductsByCategoryID($id){
        $products = self::where('category_id','=',$id)->select();
        return $products;
    }
}