<?php

/**
 * The config decorator will set the value of the final app class
 */
class ConfigDecorator {

    private $_app;

    /**
     * @param application $app
     */
    public function __construct(Application $app)
    {
        $this->_app = $app;
    }

    /**
     * Decorate the app property
     *
     * @param mixed $config
     */
    public function setConfig($config)
    {
        $this->_app->setConfig($config);
    }
}