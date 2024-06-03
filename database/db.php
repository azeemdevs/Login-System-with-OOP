<?php

class Database
{
    /**
     *  Connects to the database using PDO
     */
    protected function connect()
    {
        try {
            $db_host = "localhost";
            $db_name = "oop_login_system";
            $db_username = "root";
            $db_pwd = "";
            $dsn = "mysql:host=$db_host;dbname=$db_name";
            $conn = new PDO($dsn, $db_username, $db_pwd);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            print "ERROR:" . $e->getMessage() . "<br/><br/>";
            die();
        }
    } // ends method.
}
