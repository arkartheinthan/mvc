<?php

class DBConnect
    {
        public static function make($config)
        {
            try {
                return $pdo = new PDO("{$config['host']}; dbname={$config['db']}", "{$config['username']}", "{$config['password']}");
                // echo "Connected";
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }