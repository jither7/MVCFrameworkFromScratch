<?php

namespace App\Controllers;

use Core\Controller;
use Core\View;

class Home extends Controller
{

    /**
     * @return void
     */
    public function indexAction()
    {
//        View::render('Home.index', [
//            'name' => 'Dave',
//            'colors' => ['red', 'blue', 'green']
//        ]);

        View::renderTemplate('Home/index.html', [
            'name' => 'Dave',
            'colors' => ['red', 'blue', 'green']
        ]);
    }
}