<?php
/**
 * Author: ykxiao
 * Date: 2020/6/19
 * Time: 19:09
 * Description: 测试Composer包
 */

require '../vendor/autoload.php';

use CloudWhDemu\HttpClient;

echo HttpClient::cloudWhPost();