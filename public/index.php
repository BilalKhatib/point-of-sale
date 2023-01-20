<?php

require "../app/core/init.php";

$controller = $_GET['page_name'] ?? "home";


show($controller);