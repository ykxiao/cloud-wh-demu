## cloud-wh-demu

1. PHP >= 7.0
2. **[Composer](https://getcomposer.org/)**
3. openssl 拓展

## 安装

```shell
$ composer require ykxiao/cloud-wh-api-sdk
```

## 在非Laravel框架中使用

```php
<?php

use CloudWhDemu\HttpClient;
$options = new CloudMonth([
   "default" => [
           'enabled' => true,
           'token' => "you-push-token",
           'timeout' => 2.0,
           'ssl_verify' => true,
           'secret' => '',
   ]
]);

$options->text('Text Service SDK');

```

## 在laravel中使用
```shell
#成功安装后执行：
php artisan vendor:publish --provider="CloudWhDemu\HttpServiceProvider"

#会自动将cloud-service-sdk.php添加到您项目的配置文件当中

$res = cloud()->text('Test Service SDK');
dump($res);
```

## 相关配置
```php
CLOUD_WH_ENABLED=true   #(可选)默认为开启
CLOUD_WH_TIME_OUT=      #超时时间
CLOUD_WH_SSL_VERIFY=false   #是否开启SSL验证
CLOUD_WH_SECRET=            #安全配置
```

## License

MIT