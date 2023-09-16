<?php
require_once "./admin/Database/ConnectionData.php";
class ProductModel extends ConnectionData{
        function __construct()
        {
            parent:: __construct();
        }
        public function CreateModel($form)
        {
            $sql = "INSERT INTO `danhmucsp`(`name`) VALUES ('".$form['name']."')";
            $rs = $this->conn->query($sql);
            return $rs;
        }
        public function CreateModelTwo($name,$id_category,$image,$noidung,$time, $location,$price)
        {
            $sql = "INSERT INTO `sanpham`(`name`, `id_category`, `image`, `noi dung`, `time`, `location`, `price`) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("sssssss", $name, $id_category, $image, $noidung, $time, $location, $price);
            $rs = $stmt->execute();
            if($rs)
            {
                return true;
            }
            else{
                return false;
            }
        }
        public function Category_select()
        {
                $sql = "SELECT * FROM `danhmucsp`";
                $rs = $this->conn->query($sql);
                $result = [];
                while($row= $rs->fetch_assoc())
                {
                    $result[] = $row;
                }
                return $result;
        }
        public function UpdateProduct($id, $name, $image, $id_category, $noidung, $time, $location, $price)
        {
            $sql = "UPDATE `sanpham`
                    SET `name` = ?, `id_category` = ?, `image` = ?, `noi dung` = ?, `time` = ?, `location` = ?, `price` = ?
                    WHERE `id` = ?";
            
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("ssssssss", $name, $id_category, $image, $noidung, $time, $location, $price, $id);
            
            $rs = $stmt->execute();
            return $rs;
        }
        
        public function getProductById($id)
        {
            $sql = "SELECT * FROM sanpham WHERE id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("s", $id);
            $stmt->execute();
            $result = $stmt->get_result();
            return $result->fetch_assoc();      
        }
        public function getAllCategories()
        {
            $sql = "SELECT * FROM danhmucsp";
            $rs = $this->conn->query($sql);
            $result = [];
            while($row= $rs->fetch_assoc())
            {
            $result[] = $row;
            }
           return $result;
        }
        public function DeleteDetailsp()
        {
            $sql = "DELETE FROM detailsp WHERE id_product IN (SELECT id FROM sanpham)";
            $stmt = $this->conn->query($sql);
            return $stmt;
        }

        public function DeleteSanpham($id)
        {
            $sqlDeleteSanpham = "DELETE FROM sanpham WHERE id = ?";
            $stmtDeleteSanpham = $this->conn->prepare($sqlDeleteSanpham);
            $stmtDeleteSanpham->bind_param("i", $id);
            $stmtDeleteSanpham->execute();
            return $stmtDeleteSanpham;
        }

        public function getSanpham()
        {
            $sql = "SELECT * FROM sanpham";
            $rs = $this->conn->query($sql);
            $result = [];
            while($row= $rs->fetch_assoc())
            {
            $result[] = $row;
            }
           return $result;
        }
        public function DetaileModel($id_product,$name,$image,$review,)
        {
            $sql = "INSERT INTO `detailsp`(`name`, `id_product`, `image`, `review`) VALUES (?, ?, ?, ?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("ssss", $name, $id_product, $image, $review);
            $rs = $stmt->execute();
            return $rs;
        }
}