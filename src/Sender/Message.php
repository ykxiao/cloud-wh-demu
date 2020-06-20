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
    protected $at;


    public function getMessage(){
        return $this->message;
    }

    protected function makeAt($mobiles = [],$atAll = false){
        return [
            'at' => [
                'atMobiles' => $mobiles,
                'isAtAll' => $atAll
            ]
        ];
    }

    public function sendAt($mobiles = [],$atAll = false){
        $this->at = $this->makeAt($mobiles,$atAll);
        return $this;
    }

    public function getBody(){

        if (empty($this->at)){
            $this->sendAt();
        }
        return $this->message + $this->at;
    }
}