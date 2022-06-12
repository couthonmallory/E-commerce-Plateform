<?php
    class Database {
        private $dbHost = DB_HOST;
        private $dbUser = DB_USER;
        private $dbPass = DB_PASS;
        private $dbName = DB_NAME;

        private $statement;
        private $dbHandler;
        private $error;

        public function __construct() {
            $conn = 'mysql:host=' . $this->dbHost . ';dbname=' . $this->dbName;
            $options = array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );
            try {
                $this->dbHandler = new PDO($conn, $this->dbUser, $this->dbPass, $options);
            } catch (PDOException $e) {
                $this->error = $e->getMessage();
                echo $this->error;
            }
        }

        //Allows us to write queries
        public function query($sql) {
            $this->statement = $this->dbHandler->prepare($sql);
        }

        //Execute the prepared statement
        public function execute($data=[]) {
            return $this->statement->execute($data);
        }

        //Return an array
        public function resultSet($data=[]) {
            $this->execute($data);
            return $this->statement->fetchAll();
        }

        //Return a specific row as an object
        public function single($data=[]) {
            $this->execute($data);
            return $this->statement->fetch();
        }

        //Get's the row count
        public function rowCount() {
            return $this->statement->rowCount();
        }
    }