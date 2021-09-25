<?php

namespace Qbhy\XFYun;

abstract class Api
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

}