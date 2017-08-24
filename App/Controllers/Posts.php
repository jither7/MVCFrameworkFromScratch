<?php

namespace App\Controllers;

use Core\Controller;

class Posts extends Controller
{
    /**
     *  Show the index page
     *  @return void
     */
    public function indexAction()
    {
        echo "Hello from the index action in the Posts controller";
        echo "<pre>";
        echo htmlspecialchars(print_r($_GET, true));
        echo "</pre>";
    }

    /**
     *  Show the add new page
     * @return void
     */
    public function addNewAction()
    {
        echo "Hello from the addNew action in the Posts controller";
    }

    public function editAction()
    {
        echo "Hello from the edit action in the Posts controller";
        echo "<pre>";
        echo htmlspecialchars(print_r($this->route_params, true));
        echo "</pre>";
    }

}