<?php
require_once "./admin/Views/ProductView.php";
require_once "./admin/Models/ProductModel.php";
class ProductController
{
    var $model ; 
    var $view;
   
    function __construct()
    {   
        $this->model = new ProductModel();
        $this->view = new ProductView();
    }
// --------------------------------------------addCATEGORY---------------------------------------------------------------------------------------//
    public function CreateForm()
    {
        $this->view->CreateView();
    }
    public function CreateController()
    {
   
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {  if(isset($_POST)){
                $form = [];
                $form['name'] = $_POST['name'];
           }
            
        }
        $rs= $this->model->CreateModel($form);
           
    }

// -------------------------------------------------------------------------ADD PRODUCT ---------------------------------------------------//

    public function CreateFormTwo()
    {   $row = $this->model->Category_select();
        $this->view->CreateViewTwo($row);
    }

    public function CreateControllerTwo()
    {
        if($_SERVER['REQUEST_METHOD']==="POST")
        {   
            if (isset($_POST['name'])) {
                $name = $_POST['name'];
            }
            if(isset($_POST['id_category']))
            {
                $id_category = $_POST['id_category'];
            }
            if (isset($_POST['noidung'])) {
                $noidung = $_POST['noidung'];
            }
            if(isset($_POST['time']))
            {
                $time = $_POST['time'];
            }
            if (isset($_POST['location'])) {
                $location = $_POST['location'];
            }
            if (isset($_POST['price'])) {
                $price = $_POST['price'];
            }

            $newFileName = uniqid('uploaded-', true) . '.' . strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
            if (move_uploaded_file($_FILES['image']['tmp_name'],__DIR__.'/../../image/'. $newFileName)) {
               
                echo 'Upload OK';
            } 
                 $image = $newFileName;
                 $rs= $this->model->CreateModelTwo($name,$id_category,$image,$noidung,$time,$location,$price);
            }
        }
    //---------------------------------------------------------------------UPDATE PRODUCT ---------------------------------------------------------------------------
    public function UpdateForm() {
            $product = null;
            $categories = null;
            if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])){
                $id = $_GET["id"];
                $product = $this->model->getProductById($id);
                if ($product==null) {
                    exit("ko có sản phẩm");
                }
                $categories = $this->model->getAllCategories();
                $this->view->UpdateViewOne($product, $categories);   
            }

        }
        
    public function UpdateController() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = $_POST["id"];
            $name = $_POST["name"];
            $id_category = $_POST["id_category"];
            $noidung = $_POST["noidung"];
            $time = $_POST["time"];
            $location = $_POST["location"];
            $price = $_POST["price"];
    
            $newfileName = uniqid('uploaded', true).'.'.strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
            if (move_uploaded_file($_FILES['image']['tmp_name'], __DIR__.'/../image/'.$newfileName)) {
                echo 'Upload OK';
            }
            $image = $newfileName;
    
            $result = $this->model->UpdateProduct($id, $name, $image, $id_category, $noidung, $time, $location, $price);

            
        }

        
    }
   //----------------------------------------------------------------------DELETE PRODUCT -------------------------------------------------------------//
    public function DeleteController()
    { 
       if($_SERVER["REQUEST_METHOD"]=="GET" && isset($_GET["id"]))
       {
            $id = $_GET["id"];
            $product = $this->model->getProductById($id);
            if($product==null)
            {   var_dump($product);
                echo " không có sản phẩm" ; 
            }

            $this->model->DeleteDetailsp();
            $this->model->DeleteSanpham($id);
       }
    }
    // ------------------------------------------------------------ADD DETAIL PRODUCT---------------------------------------------------------------//
    public function FormDetail()
    {
      if($_SERVER["REQUEST_METHOD"]=="GET" && isset($_GET["id"]))
      {
        $id = $_GET["id"];
        $pr = $this->model->getProductById($id);
        // var_dump($pr);
        $this->view->DetailsView($pr);


      }
    }
    public function CreateDetails()
    {
        if ($_SERVER["REQUEST_METHOD"]=="POST") {
            if(isset($_POST["id_product"]))
            {
                $id_product = $_POST["id_product"];
            }
            if (isset($_POST["name"])) {
                $name = $_POST["name"];
            }
            if(isset($_POST["review"]))
            {
                $review = $_POST["review"];
            }

            $newfileName = uniqid('uploaded-', true).'.'.strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
            if (move_uploaded_file($_FILES['image']['tmp_name'], __DIR__.'/../image/'.$newfileName)) {
                echo 'Upload OK';
            }
            $image = $newfileName; 
            $row = $this->model->DetaileModel($id_product,$name,$image,$review);
           
        }  
    }
}
