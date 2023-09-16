<html>
    <form action="CreateDetails" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_product" value="<?php echo$pr["id"];?>"><br>
    <label for="name">name</label>
        <input type="text" name="name" value="<?php echo $pr["name"];?>"><br>
        <label for="image"></label>
        <input type="file" name="image" id=""><br><input type="./travelagency/image" src="./image<?php echo $pr["image"];?>" alt="" width="250" hieght="250" value ="file"><br>
    
       <label for="">review</label>
        <input type="text" name="review">

    <button type="submit">add</button>
    </form action"submit">
</html>