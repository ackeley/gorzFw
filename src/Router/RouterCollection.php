<?php 

namespace GorzFig\Router;

use illuminate\Support\Collection;

class RouterCollection
{
    protected $collection = array();

    public function add(string $method, string $path, $callback)
    {
        if (!isset($this->collection[$method])) {

        }
    }
}