<?php

namespace Qbhy\XFYun;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['voice_extension'] = function (App $app) {
            return new VoiceExtension($app);
        };
    }
}