<?php

class Dbhelper
{
    public function dbconnect()
    {
       $servername = "localhost";
       $username = "root";
       $password = "root";
       $dbname = "tube";
       $conn = new mysqli($servername, $username, $password, $dbname);
       return $conn;
    }
    public function SelQuery($sql){
      $conn = $this->dbconnect();
      $result = mysqli_query($conn, $sql);
      return $result;
    }
}

?>
