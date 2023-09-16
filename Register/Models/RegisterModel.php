<?php 
// session_start();
require_once "./Register/Database/ConnectionData.php";
class RegisterModel extends ConnectionData{ 
        public function __construct()
        {
            parent::__construct();
        }
    
        public function createUser($username, $email, $password,$role_id)

        {
            // Kiểm tra xem người dùng đã tồn tại chưa (dựa trên email)
            $sql = "SELECT * FROM user WHERE username = ?";
            $checkStmt = $this->conn->prepare($sql);
            $checkStmt->bind_param("s", $username);
            $checkStmt->execute();
            $result = $checkStmt->get_result();
    
            if ($result->num_rows > 0) {
                // Người dùng đã tồn tại, không thể đăng ký
                return false;
            }
    
            // Thêm tài khoản người dùng vào bảng "users"
            $sql = "INSERT INTO user (username, email, password) VALUES (?, ?, ?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("sss", $username, $email, $password);
            var_dump($stmt->error);
    
            if ($stmt->execute()) {
                // Lấy id của tài khoản người dùng vừa được tạo
                $user_id = $stmt->insert_id;
    
                // Gán vai trò cho tài khoản người dùng trong bảng "user_roles"
                $sql = "INSERT INTO user_roles (user_id, role_id) VALUES (?, ?)";
                $stmt = $this->conn->prepare($sql);
                $stmt->bind_param("ss", $user_id, $role_id);
    
                if ($stmt->execute()) {
                    return true; // Đăng ký và gán vai trò thành công
                } else {
                    return false; // Đã xảy ra lỗi khi gán vai trò
                }
            } else {
                return false; // Đã xảy ra lỗi khi tạo tài khoản người dùng
            }

        
        }

 }
    


