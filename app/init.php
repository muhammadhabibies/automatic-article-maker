<?php

// require_once "./Controllers/Article.php";
// require_once "./Controllers/LiveStreaming.php";
// require_once "./Controllers/Content2AcaraTV.php";

// require_once "Controllers\Article.php";
// require_once "Controllers\LiveStreaming.php";
// require_once "Controllers\Content2AcaraTV.php";
// require_once "Controllers\Artikel.php";

// require_once '.\Controllers\Article.php';
// require_once '.\Controllers\LiveStreaming.php';
// require_once '.\Controllers\Content2AcaraTV.php';
// require_once "Controllers/Article.php";
// require_once "Controllers/LiveStreaming.php";
// require_once "Controllers/Content2AcaraTV.php";
// require_once "./Controllers/Article.php";
// require_once "./Controllers/LiveStreaming.php";
// require_once "./Controllers/Content2AcaraTV.php";

spl_autoload_register(function ($class) {
    require_once $class . ".php";
});