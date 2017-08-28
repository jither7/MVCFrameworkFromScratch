<?php

namespace Core;

class View
{
    /**
     * Render a view file
     *
     * @param string $view The view file
     * @param array $args
     */
    public static function render($view, $args = [])
    {
        extract($args, EXTR_SKIP);

        $view = str_replace(".", "/", $view);

        $file = "../App/Views/$view.html"; // relative to Core directory

        if (is_readable($file)) {
            require $file;
        } else {
            echo "$file not found";
        }
    }

    /**
     * Render a view template using Twig
     *
     * @param string $template The template file
     * @param array $args Associate array of data to display in the view (optional)
     */
    public static function renderTemplate($template, $args = [])
    {
        static $twig  = null;
        if($twig === null) {
            $loader = new \Twig_Loader_Filesystem('../App/Views');
            $twig = new \Twig_Environment($loader);
        }

        echo $twig->render($template, $args);
    }
}