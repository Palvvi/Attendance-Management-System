<?php
class database{
    public static $server="localhost";
    public static $username="root";
    public static $password="";
    public static $database="school";
    public static function createNewConnection()
    {
      $conn=new mysqli(database::$server,database::$username,database::$password,database::$database);
      if($conn->connect_errno)
      {
        die("connection failed=" .$conn->connect_error);
      }  
      else
      {
       
        return $conn;
      }
    }
    
}


?>