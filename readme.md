# qbhy/xfyun

科大讯飞 php sdk，支持 laravel/lumen、hyperf

## 安装 - install

```bash
$ composer require qbhy/xfyun
```

## 配置 - configuration

```
XFYUN_DEBUG=true
XFYUN_APP_ID=your app id
XFYUN_APP_KEY=your app key
```

> laravel 和 hyperf 都只需要添加以上配置即可。需要注意的是 laravel5.5以下的版本需要在 config/app.php 添加 `Qbhy\XFYun\LaravelServiceProvider`

## 使用 - usage

```php
<?php

// laravel 环境下直接注入即可
function(\Qbhy\XFYun\App $xfyun) {
    // todo
}

// hyperf 环境下注入 HyperfXFYun 即可，用法完全一样
function(\Qbhy\XFYun\HyperfXFYun $xfyun) {
    // todo
}

// 其他 php 框架请自行实例化
$xfyun = new Qbhy\XFYun\App([
    'debug' => true,
    'app_id' => 'XFYUN_APP_ID',
    'app_key' => 'XFYUN_APP_KEY',
]);

$result = $xfyun->voice_extension->identifySong('https://xfyun-doc.cn-bj.ufileos.com/1537253485018707/qlzw2.wav');
dump($result);// 识别结果
/**
 array:4 [
  "code" => "0"
  "data" => array:3 [
    0 => array:6 [
      "song" => "千里之外"
      "song_id" => "6433782"
      "singer" => "周杰伦"
      "singer_id" => "313264"
      "start_time" => 24600
      "end_time" => 40490
    ]
    1 => array:6 [
      "song" => "千里之外"
      "song_id" => "6433782"
      "singer" => "周杰伦"
      "singer_id" => "313264"
      "start_time" => 124250
      "end_time" => 137190
    ]
    2 => array:6 [
      "song" => "千里之外"
      "song_id" => "6433782"
      "singer" => "周杰伦"
      "singer_id" => "313264"
      "start_time" => 207800
      "end_time" => 222640
    ]
  ]
  "desc" => "success"
  "sid" => "wbh460b2fb0@gz153a14aa3f18460b00"
]
 */
```

> 关于该 sdk 的任何问题都可以加QQ群：873213948 向我提问

https://github.com/qbhy/xfyun-php  
qbhy0715@qq.com  

