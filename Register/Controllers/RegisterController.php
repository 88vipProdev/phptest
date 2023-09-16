<?php 
require_once "./Register/Models/RegisterModel.php";
require_once "./Register/Views/RegisterView.php";
class RegisterController {
    var $model;
    var $view;
   

    public function __construct() 
    {
        $this->model = new RegisterModel();
        $this->view = new RegisterView();
     }

    public function FormRegister() 
    {
        
        $this->view->RegisterForm();
    }
    public function RegisterUser()
    {   $result = "";
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["cpassword"])) {
                $username = $_POST["username"];
                $email = $_POST["email"];
                $password = md5($_POST["password"]);
                $cpassword = md5($_POST["cpassword"]);
                $role_id = 2; // Điều này giả định rằng vai trò "user" có id là 2
                
                if ($password === $cpassword) {
                    $result = $this->model->createUser($username, $email, $password, $role_id);

                    if ($result !==false) {
                        // Đăng ký và gán vai trò thành công, bạn có thể thực hiện hành động tiếp theo
                        header("Location:/travelagency/Login/LoginController/FormLogin"); // Chuyển hướng đến trang đăng nhập sau khi đăng ký
                        exit();
                    } else {
                        // Đăng ký hoặc gán vai trò thất bại, xử lý lỗi tại đây
                        echo "Đăng ký thất bại hoặc lỗi khi gán vai trò.";
                    }
                } else {
                    echo "Mật khẩu không khớp.";
                }
            }
        }
        var_dump($result);
    }


}
?>
