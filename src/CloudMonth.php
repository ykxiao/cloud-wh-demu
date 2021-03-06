<?php
/**
 * Author: ykxiao
 * Date: 2020/6/20
 * Time: 12:52
 * Description:
 */

namespace CloudWhDemu;

class CloudMonth
{
    /**
     * @var
     */
    protected $config;
    /**
     * @var string
     */
    protected $robot = 'default';

    /**
     * @var CloudService
     */
    protected $cloudService;

    protected $client;

    /**
     * Month constructor.
     * @param $config
     * @param SendClient $client
     */
    public function __construct($config, $client = null)
    {
        $this->config = $config;
        $this->client = $client;
        $this->with();
    }

    /**
     * @param string $robot
     * @return $this
     */
    public function with($robot = 'default'){
        $this->robot = $robot;
        $this->cloudService = new CloudService($this->config[$robot],$this->client);
        return $this;
    }

    /**
     * @param string $content
     * @param string $api
     * @return mixed
     */
    public function text($content = '', $api = '')
    {
        return $this->cloudService
            ->setTextMessage($content)
            ->send($api);
    }

    public function arrayCon($array = [], $api = '')
    {
        return $this->cloudService
            ->setArrayMessage($array)
            ->send($api);
    }
}