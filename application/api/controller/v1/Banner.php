<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2017/11/29
 * Time: 22:13
 */

namespace app\api\controller\v1;

use app\api\validate\IDMustBePositiveInt;
use app\api\model\Banner as BannerModel;
use app\lib\exception\BannerMissException;
use think\Exception;

class Banner
{
    /**
     * 获取指定id的banner信息
     * @url /banner/:id
     * @http GET
     * @id int Banner的id号
     * @param $id
     * @return null
     * @throws Exception
     */
    public function getBanner($id)
    {
        (new IDMustBePositiveInt())->goCheck();
        //$banner = BannerModel::getBannerByID($id);
        $banner = BannerModel::with('items')->find($id);
        if (!$banner) {
            throw new BannerMissException();
        }
        return $banner;
    }
}