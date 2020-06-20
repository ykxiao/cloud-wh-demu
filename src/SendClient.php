<?php
/**
 * Author: ykxiao
 * Date: 2020/6/20
 * Time: 11:23
 * Description:
 */

namespace CloudWhDemu;

interface SendClient
{
    public function send($params): array;
}