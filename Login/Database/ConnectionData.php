<?php
class ConnectionData{
    private mysqli $conn;
    public function __construct()
    {
       $this->conn=mysqli_connect(hostname:'localhost:4306', username:'root', password:'' ,database:'travelagency');

        if ($this->conn->connect_error) {
            die("Connection failed:".$this->conn->connect_error);
            }
    }
}
?>