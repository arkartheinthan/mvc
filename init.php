<?php

declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors','1');

require "App/Core/function.php";
$config = require "config.php";
require "App/Core/db.php";
require "App/Core/queryBulider.php";

$pdo = DBConnect::make($config["database"]);
$query = new QueryBulider($pdo);
