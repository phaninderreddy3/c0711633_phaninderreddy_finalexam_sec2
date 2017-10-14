<?php
  class Db {
    const DBHOST = 'localhost';
    const DBUSER = 'root';
    const DBPASS = '';
    const DBNAME = 'ATS2';

    private static $instance = NULL;

    private function __construct() {}

    private function __clone() {}

    public static function getInstance() {
        try{
            if (!isset(self::$instance)) {
                $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
                self::$instance = new PDO('mysql:host='.self::DBHOST.';dbname='.self::DBNAME, self::DBUSER,self::DBPASS, $pdo_options);
            }
        
            return self::$instance; //creating a singleton class
        }
        catch(PDOException $e) {
            //show error
            return '<p class="bg-danger">'.$e->getMessage().'</p>';
        }
    }
  }
?>