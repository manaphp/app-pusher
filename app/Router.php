<?php

namespace App;

class Router extends \ManaPHP\Http\Router
{
    public function __construct($useDefaultRoutes = true)
    {
        parent::__construct($useDefaultRoutes);

        $this->add('/pushing', "index::index");
    }
}