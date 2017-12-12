<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2017/11/29
 * Time: 23:19
 */

namespace app\api\validate;


use think\Validate;
use app\lib\exception\ParameterException;

class BaseValidate extends Validate
{
    public function goCheck()
    {
        $params = request()->param();
        $result = $this->batch()->check($params);
        if (!$result) {
            $e = new ParameterException([
                'msg' => $this->error
            ]);
            throw $e;
        } else {
            return true;
        }
    }
}