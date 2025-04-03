<?php

function dd(): void
{
    $args = func_get_args();

    if (count($args)) {
        echo "<pre>";

        foreach ($args as $arg) {
            var_dump($arg);
        }

        echo "</pre>";

        die();
    }
}

function getPage()
{
    if (isset($_GET['page'])) {
        $page = $_GET['page'];

        if (file_exists('../resources/views/' . $page . '.view.php')) {
            return '../resources/views/' . $page . '.view.php';
        }

        echo 'page not found';

        exit;
    }

    return '../resources/views/home.view.php';
}

function isLoginPage($page) {
    if ($page === "../resources/views/login.view.php") {
        return true;
    }
    
    return false;
}
