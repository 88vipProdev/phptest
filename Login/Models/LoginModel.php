<?php 
require_once "./Login/Database/ConnectionData.php";
class LoginModel extends ConnectionData{
        public function __construct()
        {
            parent::__construct();
        }

    public function getUserByUsername($username)
    {
        $query = "SELECT * FROM user WHERE username = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }


     
     public function getRolesByUserId($user_id) {
            $query = "SELECT r.role_name FROM user_roles ur
                      JOIN roles r ON ur.role_id = r.id
                      WHERE ur.user_id = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->bind_param("i", $user_id);
            $stmt->execute();
            $result = $stmt->get_result();
    
            $roles = [];
            while ($row = $result->fetch_assoc()) {
                $roles[] = $row['role_name'];
            }
    
            return $roles;
     }    
}
?>