<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2017/12/19
 * Time: 21:29
 */

namespace app\api\service;

use think\Exception;

class UserToken
{
    protected $code;
    protected $wxAppID;
    protected $wxAppSecret;
    protected $wxLoginUrl;

    function __construct($code)
    {
        $this->code = $code;
        $this->wxAppID = config('wx.app_id');
        $this->wxAppSecret = config('wx.app_secret');
        $this->wxLoginUrl = sprintf(config('wx.login_url'),
            $this->wxAppID, $this->wxAppSecret, $this->code);
    }

    public function get()
    {
        $result = curl_get($this->wxLoginUrl);
        $wxResult = json_decode($result, true);
        if (empty($wxResult)) {
            throw new Exception('获取session_key以及openID时异常');
        } else {
            $loginFail = array_key_exists('errcode', $wxResult);
            if ($loginFail) {

            } else {

            }
        }
    }
}