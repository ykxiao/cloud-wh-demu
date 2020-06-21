<?php
/**
 * Author: ykxiao
 * Date: 2020/6/20
 * Time: 09:46
 * Description: 默认配置
 */

/**
 * 德木云仓服务接口默认配置
 * 德木仓储后台获取SECRET、Token
 */
return [
    'default' => [
        'enabled' => env('CLOUD_WH_ENABLED',true),      #是否要开服务
        'token' => env('CLOUD_WH_TOKEN',''),            #服务端的access_token
        'timeout' => env('CLOUD_WH_TIME_OUT',2.0),      #服务接口请求的超时时间
        'ssl_verify' => env('CLOUD_WH_SSL_VERIFY',true),#是否开启ss认证
        'secret' => env('CLOUD_WH_SECRET',true),        #开启安全配置
    ]
];