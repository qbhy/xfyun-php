<?php

namespace Qbhy\XFYun;

use Hanson\Foundation\Foundation;

/**
 * @property-read VoiceExtension voice_extension
 * @property-read Http http
 */
class App extends Foundation
{
    protected $providers = [
        ServiceProvider::class,
    ];

    public function getAppId()
    {
        return $this->getConfig('app_id');
    }

    public function getAppKey()
    {
        return $this->getConfig('app_key');
    }

    public function __construct($config)
    {
        parent::__construct($config);

        $this['http'] = function (App $app) {
            return new Http($app);
        };
    }
}