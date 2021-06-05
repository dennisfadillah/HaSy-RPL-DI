<?php

class Database {
    
    private static $instance = null;
    
    public function __construct()
    {
        $mysqli = new mysqli("localhost","root","","hasy");
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
    }

    public static function getInstance()
    {
        
        if (self::$instance == null) {
            self::$instance = new Database();
        } 

        return self::$instance;
    }

$db = Database::getInstance();

?>