<?php

/**
*
*/
class Tomato_TM_Module
{
    protected $config = array();
    protected $router = NULL;

    function __construct()
    {
        $this->router = Load_TM_Helper::module('router');
    }

    function Run()
    {
        $this->router->request();
    }
}