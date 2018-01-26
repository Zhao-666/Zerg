<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2017/12/19
 * Time: 22:03
 */

return [
    'app_id' => 'wx9d22cdc03f27f628',
    'app_secret' => 'a1e3852804d0da8e5a0832c86605c52a',
    'login_url' => 'https://api.weixin.qq.com/sns/jscode2session?' .
        'appid=%s&secret=%s&js_code=%s&grant_type=authorization_code',

    // 微信获取access_token的url地址
    'access_token_url' => "https://api.weixin.qq.com/cgi-bin/token?" .
        "grant_type=client_credential&appid=%s&secret=%s"
];