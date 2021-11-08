<?php

class QueryBulider
    {
        protected $pdo;
        public function __construct($pdo)
        {
            $this->pdo = $pdo;
        }

        public function all($table)
        {
            $statement = $this->pdo->prepare("select * from {$table}");
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
    }