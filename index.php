<?php
require_once "public/src/Router/Router.php";
require_once 'config.php';

$router = new Router();

# template basic de boostrap y jquery
define("template", "public/template/basic_template.php");

# demo Hola mundo

$router->add('/hola/([a-zA-Z]+)', function ($name) {
    echo sprintf('<h1>Hola %s</h1>', $name);
});

$router->add('/', function () {
    $content = "app/views/es/home_cart.php";
    require_once template;
});

$router->add('/info', function () {
    // $include_lib_css = ["animate", "gradiand", "fontawesome_4"];
    // $include_lib_js  = ["alert"];
    $link            = ["style" => "assets/css/style.home.css"];
    $script          = ["script" => "assets/js/default_home.js"];
    $include_lib_css = ["fontawesome", "gradiand", "color"];
    $content         = "app/views/es/home.view.php";
    require_once template;
});

$router->add('/login', function () {
    $link            = ["style" => "assets/css/style.login.css"];
    $script          = ["script" => "assets/js/login-ajax.js"];
    $include_lib_css = ["fontawesome", "color"];
    $content         = "app/views/es/login.php";
    require_once template;
});

$router->add('/register', function () {
    $link            = ["style" => "assets/css/style.register.css"];
    $script          = ["script" => "assets/js/register-ajax.js"];
    $include_lib_css = ["fontawesome", "color"];
    $include_lib_js  = ['jquery_validate'];
    $content         = "app/views/es/register.php";
    require_once template;
});

$router->post('/register/paso_2', function () {
    $link            = ["style" => "assets/css/style.register.css"];
    $script          = ["script" => "assets/js/register-ajax-paso-2.js"];
    $include_lib_css = ["fontawesome", "color"];
    $include_lib_js  = ['jquery_validate'];
    $content         = "app/views/es/register_paso_2.php";
    require_once template;
});

$router->add('/forgotten', function () {
    $link            = ["style" => "assets/css/style.login.css"];
    $script          = ["script" => "assets/js/login-ajax.js"];
    $include_lib_css = ["fontawesome", "color"];
    $content         = "app/views/es/login.php";
    require_once template;
});

$router->add('/.*', function () {
    header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
    echo "Error 404";
});

$router->route();
