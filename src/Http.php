<?php

namespace Qbhy\XFYun;

use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\RequestOptions;

class Http extends \Hanson\Foundation\Http
{
    /** @var App */
    protected $app;

    /**
     * @param App $app
     */
    public function __construct(App $app)
    {
        $this->app = $app;
    }

    public function execute($url, $json = [])
    {
        $currentTime = strval(time());
        ksort($json);

        return $this->request('POST', $url, [
            'headers' => [
                'X-Appid' => $this->app->getAppId(),
                'X-CurTime' => $currentTime,
                'X-Param' => $param = base64_encode(json_encode($json)),
                'X-CheckSum' => md5($this->app->getAppKey() . $currentTime . $param),
                'Content-Type' => 'application/x-www-form-urlencoded; charset=utf-8',
            ],
        ]);
    }


    /**
     * @param string $method
     * @param string $url
     * @param array $options
     * @return array
     */
    public function request($method, $url, $options = [])
    {
        try {
            $response = parent::request($method, $url, $options);
        } catch (BadResponseException $badResponseException) {
            $response = $badResponseException->getResponse();
        }

        return json_decode($response->getBody()->__toString(), true);
    }
}