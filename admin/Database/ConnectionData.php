<?php
class ConnectionData{

        var $conn;
function __construct()
{

        $this->conn=mysqli_connect(hostname:'localhost:4306', username:'root', password:'' ,database:'travelagency');

        if ($this->conn->connect_error) {
            die("Connection failed:".$this->conn->connect_error);
            }
        if(!mysqli_set_charset($this->conn,"utf8mb4"))
        {
                die("không thể thiết lập".mysqli_error($this->conn));
        }
}
}

