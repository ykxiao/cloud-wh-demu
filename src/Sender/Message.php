<?php
/**
 * Author: ykxiao
 * Date: 2020/6/20
 * Time: 14:15
 * Description:
 */

namespace CloudWhDemu\Sender;

abstract class Message
{
    protected $message = [];

    public function getMessage(){
        return $this->message;
    }

    public function getBody()
    {
        return $this->message;
    }
}