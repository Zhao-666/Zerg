<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2017/12/16
 * Time: 10:02
 */

namespace app\api\model;


class Category extends BaseModel
{
    protected $hidden = [
      'delete_time','update_time'
    ];
    public function img(){
        return $this->belongsTo('Image','topic_img_id','id');
    }
}