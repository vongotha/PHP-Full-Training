<?php

class Database {

    public $connection;

    public $statement;

    public function __construct($config, $user = 'root', $password = '') {

        //configure the database connection


        $dsn = 'mysql:' . http_build_query($config, '', ';');

        // Set up the connection with error handling
        $this->connection = new PDO($dsn,$user, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }
    public function query($query, $params = []) {
        

        $this->statement = $this->connection->prepare($query);

        $this->statement->execute($params);
        return $this;
    }

    public function find() {
        // Statement->fetch
        return $this->statement->fetch();
    }

    public function findOrFail() {
        $result = $this->find();
        if (! $result) {
            abort();
        }
        return $result;
    }

    public function get() {
        // Statement->fetchAll
        return $this->statement->fetchAll();

    }

}