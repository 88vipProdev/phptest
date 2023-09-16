<?php
require_once "./admin/Models/HomeModel.php";
require_once "./admin/Views/HomeView.php";
class HomeController
{       var $model ; 
        var $view ; 
        function __construct()
        {
            $this->model = new HomeModel();
            $this->view = new HomeView();
        }

        function HomeController()
        {
            $rs = $this->model->HomeModel();
            $this->view->HomeNew($rs);
            // var_dump($rs);  
        }
}