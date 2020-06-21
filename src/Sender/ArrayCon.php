<?php
/**
 * Author: ykxiao
 * Date: 2020/6/21
 * Time: 10:33
 * Description: 提交数组
 */

namespace CloudWhDemu\Sender;

class ArrayCon extends Message
{
    public function __construct($content)
    {
        $this->message = [
            'msgtype' => 'array',
            'array' => [
                'content' => $content
            ]
        ];
    }
}