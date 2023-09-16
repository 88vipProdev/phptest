<?php 
require_once "./Login/Models/LoginModel.php";
require_once "./Login/Views/LoginView.php";
Class LoginController{
    var $model ; 
    var $view ; 
    public function __construct()
    {
        $this->model = new LoginModel();
        $this->view = new LoginView();
    }
    public function FormLogin()
    {
        $this->view->FormLogin();
    }
    public function LoginUser()
    {
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
           if(isset($_POST["username"]) && isset($_POST["password"]))
           {
                $username = $_POST["username"];
                $password = $_POST["password"];
                
           }
                $rs = $this->model->getUserByUsername($username);

            if ($rs && password_verify($password,$rs["password"])) {
                session_start();
                $_SESSION["id"] = $rs["id"];
                $_SESSION["username"] = $rs["username"];
                $_SESSION["role"]=$rs["role"];

                header("location:/travelagency/user/HomeController/HomeIndex");
            }
            else{
                header("location:/Travelagency/Login/LoginController/FormLogin");
                echo "that bai";
            }
        }
    }
}