<?php

abstract class application {

    protected $config;

    /**
     * @return mixed
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * @param $config
     */
    public function setConfig($config)
    {
        $this->config = $config;
    }
}