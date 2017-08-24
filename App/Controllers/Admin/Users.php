<?php

namespace App\Controllers\Admin;

use Core\Controller;

class Users extends Controller
{
    protected function before()
    {
        echo "hello";
    }

    public function indexAction()
    {
        echo "hello index";
    }
}