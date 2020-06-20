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
    protected $dingTalkService;

    protected $client;

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
        $this->dingTalkService = new CloudService($this->config[$robot],$this->client);
        return $this;
    }
}