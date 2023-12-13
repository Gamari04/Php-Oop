<?php

require_once __DIR__ .'../../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();


class Database {
    private $connection;

    public function __construct() {
        $this->connection = mysqli_connect($_ENV['DB_SERVERNAME'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD'], $_ENV['DB_NAME']);
        if ($this->connection) {
            echo "works";
        } else {
            echo "doesn't work";            
        }
    }

    public function getConnection() {
        return $this->connection;
    }
}   

$DB = new Database();
$connection = $DB->getConnection();