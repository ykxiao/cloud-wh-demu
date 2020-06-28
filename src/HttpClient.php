<?php
/**
 * Author: ykxiao
 * Date: 2020/6/19
 * Time: 18:58
 * Description: Http 协议
 */

namespace CloudWhDemu;

use GuzzleHttp\Client;

class HttpClient implements SendClient
{
    protected $client;
    protected $config;
    /**
     * @var string
     */
    protected $hookUrl = "http://dm-wh-new.com/service/v1/";

    /**
     * @var string
     */
    protected $accessToken = "";

    /**
     * tests
     * @return string
     */
    public static function cloudWhPost()
    {
        return 'Yk Xiao';
    }

    public function __construct($config)
    {
        $this->config = $config;
        $this->setAccessToken();
        $this->client = $this->createClient();
    }

    public function setAccessToken(){
        $this->accessToken = $this->config['token'];
    }

    /**
     * create a guzzle client
     * @return Client
     */
    protected function createClient()
    {
        return new Client([
            'timeout' => $this->config['timeout'] ?? 2.0,
        ]);
    }

    /**
     * @param $api
     * @return string
     */
    public function getRobotUrl($api)
    {
        $query['access_token'] = $this->accessToken;
        if (isset($this->config['secret']) && $secret = $this->config['secret']) {
            $timestamp = time() . sprintf('%03d', rand(1, 999));
            $sign      = hash_hmac('sha256', $timestamp . "\n" . $secret, $secret, true);
            $query['timestamp'] = $timestamp;
            $query['sign'] = base64_encode($sign);
        }
        return $this->hookUrl . $api . "?" . http_build_query($query);
    }

    /**
     * send message
     * @param $params
     * @param string $api
     * @return array
     */
    public function send($params, $api = ''): array
    {
        $request = $this->client->post($this->getRobotUrl($api), [
            'body' => json_encode($params),
            'headers' => [
                'Content-Type' => 'application/json',
            ],
            'verify' => $this->config['ssl_verify'] ?? true,
        ]);

        $result = $request->getBody()->getContents();
        return json_decode($result, true) ?? [];
    }
}