<?php
/**
 * Author: ykxiao
 * Date: 2020/6/20
 * Time: 14:12
 * Description:
 */

namespace CloudWhDemu\Sender;

class Contents extends Message
{
    /**
     * 字符串支持
     * Contents constructor.
     * @param $content
     */
    public function __construct($content)
    {
        $this->message = [
            'msgtype' => 'text',
            'text' => [
                'content' => $content
            ]
        ];
    }
}