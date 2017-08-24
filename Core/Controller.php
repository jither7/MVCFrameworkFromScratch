<?php

namespace Core;

abstract class Controller
{
    /**
     * Parameters from the matched route
     * @var array
     */
    protected $route_params = [];

    /**
     * Controller constructor.
     * @param array $route_params Parameters from the route
     */
    public function __construct($route_params)
    {
        $this->route_params = $route_params;
    }

    public function __call($name, $arguments)
    {
        $method = $name . 'Action';
        // TODO: Implement __call() method.
        if(method_exists($this, $method)) {
            if($this->before() !== false) {
                call_user_func_array([$this, $method], $arguments);
                $this->after();
            }
        } else {
            echo "Method not found in controller " . get_class($this);
        }
    }

    /**
     * Before filter - called before an action method
     * @return void
     */
    protected function before()
    {

    }

    /**
     * After filter - called before an action method
     * @return void
     */
    protected function after()
    {

    }
}