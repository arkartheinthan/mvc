<?php

//Database connection
// function db_connect()
// {
//     try {
//         return $pdo = new PDO("mysql:host=localhost; dbname=todo", "root", "");
//     } catch (PDOException $e) {
//         echo $e->getMessage();
//     }
// }

// function query($pdo)
// {
//     $statement = $pdo->prepare("select * from user");
//     $statement->execute();
//     return $statement->fetchAll(PDO::FETCH_ASSOC);
// }


function dd($data)
{
    echo "<pre>";
    die(print_r($data));
}