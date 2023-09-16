<?php
class ProductView{

     public function __construct() {
      
    }

    public function CreateView()
    {
        require_once "./admin/Template/createform.php";
    }
    public function CreateViewTwo($row)
    {
        require_once "./admin/Template/createformnew.php";
    }
    
    public function UpdateViewOne($product, $categories)
    {
        require_once "./admin/Template/Updateform.php";
    }
    public function DetailsView($pr)
    {
        require_once "./admin/Template/AddDetails.php";
    }
}