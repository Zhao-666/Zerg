<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2018/1/2
 * Time: 21:52
 */

namespace app\api\controller\v1;


use app\api\controller\BaseController;
use app\api\service\WxNotify;
use app\api\validate\IDMustBePositiveInt;
use app\api\service\Pay as PayService;

class Pay extends BaseController
{
    protected $beforeActionList = [
        'checkExclusiveScope' => ['only' => 'getPreOrder']
    ];

    public function getPreOrder($id = '')
    {
        (new IDMustBePositiveInt())->goCheck();
        $pay = new PayService($id);
        return $pay->pay();
    }

    public function receiveNotify()
    {
        $notify = new WxNotify();
        $notify->Handle();
    }

    public function redirectNotify()
    {
        $xmlData = file_get_contents('php://input');
        $result = curl_post_raw(
            'http://zerg.com/api/v1/pay/notify?XDEBUG_SESSION_START=17742',
            $xmlData);
    }
}