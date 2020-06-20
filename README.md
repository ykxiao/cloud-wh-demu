## cloud-wh-demu

1. PHP >= 7.2
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
$options = [
    'app_id'    => '12edgkt',
    'secret'    => 'f1c242f4f28f735d4687abb469072xxx',
    'token'     => 'cloud-8674yue4weqd',
    'log' => [
        'level' => 'debug',
        'file'  => '/tmp/cloud-http-sdk.log',
    ],
];

$options->text('Text Service SDK');

```

## 在laravel中使用
```shell
#成功安装后执行：
php artisan vendor:publish --provider="CloudWhDemu\HttpServiceProvider"

#会自动将cloud-service-sdk.php添加到您项目的配置文件当中
```

## License

MIT