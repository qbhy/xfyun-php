<?php

namespace Qbhy\XFYun;

use Hanson\Foundation\AbstractAPI;

class VoiceExtension extends Api
{
    public function identifySong(string $audioUrl, string $aue = 'raw', string $sampleRate = '8000')
    {
        return $this->app->http->execute('https://webqbh.xfyun.cn/v1/service/v1/qbh', [
            'engine_type' => 'afs',
            'aue' => $aue,
            'sample_rate' => $sampleRate,
            'audio_url' => $audioUrl,
        ]);
    }
}