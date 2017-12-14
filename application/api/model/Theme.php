<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2017/12/14
 * Time: 21:52
 */

namespace app\api\model;


class Theme extends BaseModel
{
    public function topicImg()
    {
        return $this->belongsTo('Image', 'topic_img_id', 'id');
    }

    public function headImg()
    {
        return $this->belongsTo('Image', 'head_img_id', 'id');
    }
}