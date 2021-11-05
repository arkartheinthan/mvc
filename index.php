<?php

    require "./init.php";

    $users = $query->all("user");

    require "index-view.php";