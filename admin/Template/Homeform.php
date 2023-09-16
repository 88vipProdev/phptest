<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Admin</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a type="button" class="btn btn-primary nav-link active" href="/travelagency/admin/ProductController/CreateFormTwo">Add New</a>
            </li><br>
            <!-- <li>
            <a type="button" class="btn btn-primary nav-link active" href="/travelagency/ProductController/FormDetail">Add Product Details</a>
            </li> -->
            <li>
            <a type="button" class="btn btn-primary nav-link active" href="/travelagency/admin/ProductController/CreateForm">Add Product Category</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container my-4">
    <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>NAME</th>
        <th>Image</th>
        <th>NỘI DUNG</th>
        <th>TIME</th>
        <th>LOCATION</th>
        <th>PRICE</th>
      </tr>
    </thead>
    <tbody>
            <?php 
                foreach ($rs as $row) { ?>
                <?php var_dump($row['image']);?>
                <tr>
                    <th><?php echo $row['id'];?></th><br>
                    <th><?php echo $row['name'];?></th><br>
                     <th><th><img src="travelagency/image/<?php echo $row['image'];?>" alt="" srcset="" width="250px" height="250px">

                      </th><br>
                    <th><?php echo $row['noi dung'];?></th><br>
                        <th><?php echo $row['time'];?></th><br>
                     <th><?php echo $row['location'];?></th><br>
                    <th><?php echo $row['price'];?></th><br>
                    <td>
                  <a class='btn btn-success' href='/travelagency/admin/ProductController/UpdateForm&id=<?=$row["id"]?>'>Edit</a>
                  <a class='btn btn-success' href='/travelagency/admin/ProductController/DeleteController&id=<?=$row["id"]?>'>Delete</a>
                  <a class='btn btn-success' href='/travelagency/admin/ProductController/FormDetail&id=<?=$row["id"]?>'>ADD details</a>
                </td>
                </tr>

               <?php } ?>

    </tbody>
  </table>
      </div>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>