<?php

class DB{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    /*public function __construct(){
        $this->host     = 'localhost';
        $this->db       = 'test';
        $this->user     = 'root';
        $this->password = 'sepsa';
        $this->charset  = 'utf8mb4';
    }*/

    public function __construct(){
        $this->host     = '194.5.156.145';
        $this->db       = 'u882853344_SIOE';
        $this->user     = 'u882853344_admin';
        $this->password = "Gheal910427.*";
        $this->charset  = 'utf8mb4';
    }
    function connect(){

        try{

            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
            $options = [PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_EMULATE_PREPARES   => false];

            $pdo = new PDO($connection, $this->user, $this->password, $options);

            return $pdo;

        }catch(PDOException $e){
            print_r('Error connection: ' . $e->getMessage());
        }
    }
}






?>
