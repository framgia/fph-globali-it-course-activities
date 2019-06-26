<?php

class Database
{
    private $host = "mysql"; //mysql docker image
    private $username = "root"; //your-user-name
    private $password = "GlobalIT@123"; //your-password
    private $database_name = "memo_app"; //your-database-name

    public function connect_db()
    {
        // connect to databse
        return new PDO("mysql:host=" . $this->host . ";" 
                        . "dbname=" . $this->database_name ,
                        $this->username,
                        $this->password);
    }
}
?>