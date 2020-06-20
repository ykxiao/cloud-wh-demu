<?php
/**
 * Author: ykxiao
 * Date: 2020/6/20
 * Time: 10:24
 * Description:
 */

namespace CloudWhDemu;

use CloudWhDemu\Sender\Contents;
use CloudWhDemu\Sender\Message;

class CloudService
{
    /**
     * @var Message
     */
    protected $message;
    protected $config;

    /**
     * @var array
     */
    protected $mobiles = [];
    /**
     * @var bool
     */
    protected $atAll = false;

    /**
     * @var SendClient
     */
    protected $client;

    /**
     * CloudService constructor.
     * @param $config
     * @param null $client
     */
    public function __construct($config, SendClient $client = null)
    {
        $this->config = $config;
        $this->setTextMessage('null');

        if ($client != null) {
            $this->client = $client;
            return;
        }
        $this->client = $this->createClient($config);

    }

    /**
     * create a guzzle client
     * @param $config
     * @return HttpClient
     */
    protected function createClient($config)
    {
        return new HttpClient($config);
    }

    /**
     * @param $content
     * @return $this
     */
    public function setTextMessage($content)
    {
        $this->message = new Contents($content);
        return $this;
    }

    /**
     * @return bool|array
     */
    public function send()
    {
        if (!$this->config['enabled']) {
            return false;
        }
        return $this->client->send($this->message->getBody());
    }
}