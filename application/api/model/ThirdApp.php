<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2018/1/26
 * Time: 20:51
 */

namespace app\api\model;


class ThirdApp extends BaseModel
{
    public static function check($ac, $se)
    {
        $app = self::where('app_id','=',$ac)
            ->where('app_secret','=',$se)
            ->find();
        return $app;
    }
}