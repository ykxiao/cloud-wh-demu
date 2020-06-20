<?php
/**
 * Author: ykxiao
 * Date: 2020/6/20
 * Time: 10:24
 * Description:
 */

namespace CloudWhDemu;

class CloudService
{
    protected $config;
    /**
     * @var SendClient
     */
    protected $client;

    public function __construct($config, SendClient $client = null)
    {
        $this->config = $config;

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
     * @author wangju 2019-05-17 20:25
     */
    protected function createClient($config)
    {
        return new HttpClient($config);
    }
}