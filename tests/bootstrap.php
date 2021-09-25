<?php

require_once __DIR__ . '/../vendor/autoload.php';

$repository = Dotenv\Repository\RepositoryBuilder::createWithDefaultAdapters()
    ->make();

$dotenv = Dotenv\Dotenv::create($repository, __DIR__ . '/..');
$dotenv->load();

$dotenv->required(['XFYUN_DEBUG', 'XFYUN_APP_ID', 'XFYUN_APP_KEY']);

