<?php
require_once "./user/Models/HomeModel.php";
require_once "./user/Views/HomeView.php";
class HomeController{
        var $view;
        var $model ; 
    public function __construct()
    {
        $this->model = new HomeModel();
        $this->view = new HomeView();
    }
    public function HomeIndex()
    {
            $this->view->HomeIndex();
    }
}
?>