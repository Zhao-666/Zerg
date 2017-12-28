<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2017/12/25
 * Time: 22:29
 */

namespace app\api\controller\v1;


use app\api\controller\BaseController;
use app\api\model\User as UserModel;
use app\api\service\Token as TokenService;
use app\api\validate\AddressNew;
use app\lib\exception\SuccessException;
use app\lib\exception\UserException;

class Address extends BaseController
{
    protected $beforeActionList = [
        'checkPrimaryScope' => ['only' => 'createOrUpdateAddress']
    ];

    public function createOrUpdateAddress()
    {
        $validate = new AddressNew();
        $validate->goCheck();
        $uid = TokenService::getCurrentUid();
        $user = UserModel::get($uid);
        if (!$user) {
            throw new UserException();
        }
        $dataArray = $validate->getDataByRule(input('post.'));
        $address = $user->address;
        if (!$address) {
            $user->address()->save($dataArray);
        } else {
            $user->address->save($dataArray);
        }
        return json(new SuccessException(), 201);
    }
}