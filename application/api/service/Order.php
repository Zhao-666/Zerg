<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2017/12/29
 * Time: 20:52
 */

namespace app\api\service;


use app\api\model\Product;
use app\lib\exception\OrderException;
use think\Exception;

class Order
{
    //订单的商品列表
    protected $oProducts;

    //数据库查出来的商品
    protected $products;

    protected $uid;

    public function place($uid, $oProducts)
    {
        $this->oProducts = $oProducts;
        $this->products = $this->getProductsByOrder($oProducts);
        $this->uid = $uid;
        $status = $this->getOrderStatus();
        if (!$status['pass']) {
            $status['order_id'] = -1;
            return $status;
        }else{
            
        }
    }

    private function getOrderStatus()
    {
        $status = [
            'pass' => true,
            'orderPrice' => 0,
            'pStatusArray' => [],
        ];
        foreach ($this->oProducts as $oProduct) {
            $pStatus = $this->getProductsStatus($oProduct['product_id'], $oProduct['count']);
            $status['pass'] = $pStatus['haveStock'];
            $status['orderPrice'] += $pStatus['totalPrice'];
            $status['pStatusArray'][] = $pStatus;
        }
        return $status;
    }

    private function getProductsStatus($oPID, $oCount)
    {
        $pIndex = -1;
        $pStatus = [
            'id' => null,
            'haveStock' => false,
            'count' => 0,
            'name' => '',
            'totalPrice' => 0
        ];
        for ($i = 0; $i < count($this->products); $i++) {
            if ($oPID == $this->products[$i]['id']) {
                $pIndex = $i;
            }
        }
        if ($pIndex == -1) {
            //客户端传递的ID可能不存在
            throw new OrderException([
                'msg' => 'ID为 ' . $oPID . '商品不存在，创建订单失败'
            ]);
        } else {
            $product = $this->products[$pIndex];
            $pStatus['id'] = $product['id'];
            $pStatus['name'] = $product['name'];
            $pStatus['count'] = $oCount;
            $pStatus['totalPrice'] = $product['price'] * $oCount;
            $pStatus['haveStock'] = $product['stock'] >= $oCount;
        }
        return $pStatus;
    }

    private function getProductsByOrder($oProducts)
    {
        $oPIDs = [];
        foreach ($oProducts as $item) {
            $oPIDs[] = $item['product_id'];
        }
        $products = Product::all($oPIDs)
            ->visible(['id', 'price', 'stock', 'name', 'main_img_url'])
            ->toArray();
        return $products;
    }
}