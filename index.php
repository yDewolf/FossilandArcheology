<?php

require_once "elements/top.php";

if (!isset($_GET["page"])) {
    require_once __DIR__ . "/pages/home.php";
} else {
    if (file_exists(__DIR__ . "/pages/{$_GET['page']}")) {
        require_once (__DIR__ . "/pages/{$_GET['page']}");
    } else {
        http_response_code(404);
        require_once __DIR__ . "/pages/home.php";
    }
}

require_once __DIR__ . "/elements/bottom.php";