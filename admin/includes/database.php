<?php

require_once('new_config.php');

class Database {

    public $connection;

    function __construct()
    {
        $this->open_db_connection();
    }

    public function open_db_connection() {
        // Procedural: $this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $this->connection->set_charset('utf8');

        // Procedural: if (mysqli_connect_errno()) {
            if ($this->connection->connect_errno) {
            // Procedural: die('connection faied!' . mysqli_error());
            die('connection faied 1 ! ' . $this->connection->connect_error);
        }
    }

    public function query($sql) {
        // Procedural: $result = mysqli_query($this->connection, $sql);
        $result = $this->connection->query($sql);
        // echo $sql;
        $this->confirm_query($result);
        return $result;
    }

    private function confirm_query($result) {
        if (!$result) {
            die('Query failed 2 ! ' . $this->connection->error);
        }
    }

    public function escape_string($string) {
        // Procedural: $escaped_string = mysqli_real_escape_string($this->connection, $string);
        $escaped_string = $this->connection->real_escape_string($string);
        return $escaped_string;
    }

    public function the_insert_id() {
        return mysqli_insert_id($this->connection);
    }
}

$database = new Database();

?>