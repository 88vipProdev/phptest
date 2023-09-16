<?php
class App
{
    protected $controller = "HomeController";
    protected $action = "HomeNew";
    protected $params = [];

    public function __construct()
    {
        // Xử lý định tuyến của bạn
        $arr = $this->UrlProcess();

        if (isset($arr[0])) {
            $controllerDirectory = "./admin/Controllers/"; // Thư mục chứa controllers mặc định
            
            if ($arr[0] === 'Register') {
                $controllerDirectory = "./Register/Controllers/";
            }
            if ($arr[0] === 'Login') {
                $controllerDirectory = "./Login/Controllers/";
            }
            if($arr[0] === 'user')
            {
                $controllerDirectory = "./user/Controllers";
            }
                // var_dump($arr);
            $this->controller = ucfirst($arr[1] ?? 'HomeController');
            $this->action = $arr[2] ?? 'HomeNew';

            $controllerPath = $controllerDirectory."/".$this->controller . ".php";
            // var_dump($controllerPath);

            if (file_exists($controllerPath)) {
                require_once $controllerPath;
            } else {
                // Xử lý trường hợp không tìm thấy controller
                die("Controller not found");
            }

            $this->controller = new $this->controller;

            if (isset($arr[2])) {
                if (method_exists($this->controller, $arr[2])) {
                    $this->action = $arr[2];
                    unset($arr[2]);
                }
            }

            $this->params = $arr ? array_values($arr) : [];
        }

        // Cuối cùng, gọi controller và action tương ứng
        call_user_func_array([$this->controller, $this->action], $this->params);
    }

    protected function UrlProcess()
    {
        if (isset($_GET["url"])) {
            return explode("/", filter_var(trim($_GET["url"], "/")));
        }
    }
}

// Bắt đầu ứng dụng bằng cách tạo một đối tượng của lớp App
$app = new App();
