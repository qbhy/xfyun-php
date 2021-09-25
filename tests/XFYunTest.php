<?php

class XFYunTest extends PHPUnit\Framework\TestCase
{
    public function testExample()
    {
        $config = require __DIR__ . '/../config/xfyun.php';
        $app = new Qbhy\XFYun\App($config);

        $this->assertTrue($app->voice_extension instanceof Qbhy\XFYun\VoiceExtension);

        dd($app->voice_extension->identifySong('https://xfyun-doc.cn-bj.ufileos.com/1537253485018707/qlzw2.wav'));

    }
}