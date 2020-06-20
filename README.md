## cloud-wh-demu

1. PHP >= 7.2
2. **[Composer](https://getcomposer.org/)**
3. openssl 拓展

## Installation

```shell
$ composer require ykxiao/cloud-wh-api-sdk
```

## Usage

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

return [];

```

## Execute after successful installation
```shell
php artisan vendor:publish --provider="CloudWhDemu\HttpServiceProvider"
```

## License

MIT