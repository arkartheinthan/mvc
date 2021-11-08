<?php

declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors','1');

$config = require "config.php";
require "libraries/function.php";
require "libraries/Database.php";
require "libraries/QueryBulider.php";

$pdo = DBConnect::make($config["database"]);
$query = new QueryBulider($pdo);
