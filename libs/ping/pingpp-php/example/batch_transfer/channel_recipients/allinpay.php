<?php
return [
    [
        // 必须，接收者银行卡账号。
        'account' => '656565656565656565656565',

        // 必须，金额，单位为分。
        'amount' => 5000,

        // 必须，接收者姓名。
        'name' => '张三',

        // 必须，4位，开户银行编号。具体值参考此链接：https://www.pingxx.com/api#%E9%93%B6%E8%A1%8C%E7%BC%96%E5%8F%B7%E8%AF%B4%E6%98%8E
        'open_bank_code' => '0308',

        // 可选，批量付款描述，最多 30 个 Unicode 字符。
        // 'description' => '描述',

        // 可选，业务代码，allinpay 渠道会用到此字段，5位，根据通联业务人员提供，不填使用通联提供默认值09900。
        // 'business_code' => '09900',

        // 可选，银行卡号类型，allinpay 渠道会用到此字段，0：银行卡、1：存折，不填默认使用银行卡。
        // 'card_type' => 0,

        // 可选，订单号， 20 ~ 40 位不能重复的数字字母组合（必须以通联的商户号开头，建议组合格式：通联商户号 + 时间戳 + 固定位数顺序流水号，不包含+号），这里不传的话程序会调用商户的通联商户号加上随机数自动生成 order_no。
        // 'order_no' => '321101234554321098765432112'
    ],
    [
        'account'           => '656565656565656565656565',
        'amount'            => 3000,
        'name'              => '李四',
        'open_bank_code'    => '0308',
    ]
];
