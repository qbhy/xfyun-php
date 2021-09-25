<?php

namespace Qbhy\Xfyun;

use Hyperf\Contract\ConfigInterface;

class HyperfXFYun extends App
{
    public function __construct(ConfigInterface $config)
    {
        parent::__construct($config->get('xfyun', ['debug' => true]));
    }
}