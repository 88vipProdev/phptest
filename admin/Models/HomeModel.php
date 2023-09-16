<?php
require_once "./admin/Database/ConnectionData.php";
class HomeModel extends ConnectionData
{
 

    function HomeModel()
    {
        $sql = "SELECT * FROM `sanpham`";
        $rs = $this->conn->query($sql);
        $result = [];
        while($row= $rs->fetch_assoc())
        {
            $result[] = $row;
        }
        return $result;
    }
}