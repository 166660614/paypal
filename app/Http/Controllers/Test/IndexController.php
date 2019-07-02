<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Pingpp\Pingpp;
class IndexController extends Controller
{
    public function test(){
        $config_braintree=[
            'environment' => 'sandbox',
            'merchantId' => '4wrxztzgxgcjvxc8',
            'publicKey' => 'qzvr8qpy4nw3ysrb',
            'privateKey' => '3d11ae07c9872ceea7585543288a3cf5'
        ];
        $gateway=new \Braintree_Gateway($config_braintree);
        //生成客户端令牌
        var_dump($gateway->clientToken());exit;
        $aCustomerId='';
        $clientToken = $gateway->clientToken()->generate([
            "customerId" => $aCustomerId
        ]);
    }
}
