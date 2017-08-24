<?php

namespace App\Controllers;

use Core\Controller;

class Home extends Controller
{

    public function before()
    {
        echo "(before) ";
    }

    public function after()
    {
        echo "(after) ";
    }

    /**
     * @return void
     */
    public function indexAction()
    {
        echo "Hello from the index action in the Home controller";
    }
}