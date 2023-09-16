<?php
class ConnectionData{

        protected  $conn;
function __construct()
{

        $this->conn = mysqli_connect(hostname:'localhost:4306', username:'root', password:'' ,database:'travelagency');

        if ($this->conn->connect_error) {
            die("Connection failed:".$this->conn->connect_error);
            }
}
public function getConnection() {
    return $this->conn;
}
}

