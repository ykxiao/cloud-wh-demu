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
    /**
     * 数组支持
     * ArrayCon constructor.
     * @param $content
     */
    public function __construct($content)
    {
        $this->message = [
            'msgtype' => 'array',
            'data' => $content
        ];
    }
}