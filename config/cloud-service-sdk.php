<?php
/**
 * Author: ykxiao
 * Date: 2020/6/20
 * Time: 09:46
 * Description: 默认配置
 */

return [
    // 德木云仓服务接口默认配置
    'default' => [
        // 是否要开服务
        'enabled' => env('CLOUD_WH_ENABLED',true),
        // 服务端的access_token
        'token' => env('CLOUD_WH_TOKEN',''),
        // 服务接口请求的超时时间
        'timeout' => env('CLOUD_WH_TIME_OUT',2.0),
        // 是否开启ss认证
        'ssl_verify' => env('CLOUD_WH_SSL_VERIFY',true),
        // 开启安全配置
        'secret' => env('CLOUD_WH_SECRET',true),
    ],

    'other' => [
        'enabled' => env('OTHER_DING_ENABLED',true),

        'token' => env('OTHER_DING_TOKEN',''),

        'timeout' => env('OTHER_DING_TIME_OUT',2.0),

        'ssl_verify' => env('CLOUD_WH_SSL_VERIFY',true),

        'secret' => env('CLOUD_WH_SECRET',true),
    ]
];