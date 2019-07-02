<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Pingpp\Pingpp;
class IndexController extends Controller
{
    protected $apiKey;
    public function index(){
        //设置平台key
        $this->apiKey='sk_test_ibbTe5jLGCi5rzfH4OqPW9KC';
        //订单号
        $order_no=time().rand(1111,9999);
        $amount=500;//订单金额
        \Pingpp\Pingpp::setApiKey($this->apiKey);
        $arr=\Pingpp\Charge::all(['limit'=>1]);//分页查询创建的charge对象
        $result=\Pingpp\Charge::create(array(
            'order_no'  => $order_no,
            'amount'    => $amount,
            'app'       => array('id' => 'app_1Gqj58ynP0mHeX1q'),
            'channel'   => 'upacp',
            'currency'  => 'cny',
            'client_ip' => '127.0.0.1',
            'subject'   => 'Your Subject',
            'body'      => 'Your Body'
        ));
//        print_r(json_decode($result,true));
////        print_r(json_decode($arr,true));
        return[
            'name'=>123,
            'age'=>25,
        ];
    }
    public function test(){
        $arr=[
            'environment' => 'sandbox',
            'merchantId' => '4wrxztzgxgcjvxc8',
            'publicKey' => 'qzvr8qpy4nw3ysrb',
            'privateKey' => '3d11ae07c9872ceea7585543288a3cf5'
        ];
//        $gateway=new \Braintree_Gateway($arr);
//        var_dump($gateway);
        //生成客户端令
        \Braintree_Configuration::environment('sandbox');
        \Braintree_Configuration::merchantId('4wrxztzgxgcjvxc8');
        \Braintree_Configuration::publicKey('qzvr8qpy4nw3ysrb');
        \Braintree_Configuration::privateKey('3d11ae07c9872ceea7585543288a3cf5');
        $aCustomerId='4wrxztzgxgcjvxc8';//商户id
        $clientToken=\Braintree_ClientToken::generate(["customerId" => $aCustomerId]);
        $this->setError('200',$clientToken); //返回到客户端
        //接收用户付款授权信息
        //$nonceFromTheClient = $_POST["payment_method_nonce"];
//        $result = $gateway->transaction()->sale([
//            'amount' => '10.00',
//            'paymentMethodNonce' => $nonceFromTheClient,
//            'options' => [
//                'submitForSettlement' => True
//            ]
//        ]);
    }
}
