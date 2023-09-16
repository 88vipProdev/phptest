<html>
    <a href="">sua thong tin san pham</a>
    <form action="UpdateController" method="POST" enctype="multipart/form-data" >
        <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
        <label for="name">Tên sản phẩm</label><br>
        <input type="text" name="name" value="<?php echo $product['name']; ?>"><br>
        <!-- Các trường dữ liệu khác tương tự -->
        
        <label for="id_category">Danh mục sản phẩm</label><br>
        <select name="id_category">
            <?php foreach ($categories as $key =>$value) { ?>
         
                <option value="<?php echo $category['id']; ?>"
                    <?php if ($value['id'] == $product['id_category']) echo 'selected'; ?>>
                    <?php echo $value['name']; ?>
                </option>
            <?php } ?>
        </select><br>
        <label for="image">image</label><br>
        <input type="image"src="./image/<?php echo $product["image"];?>" alt="" width="250" hieght="250" alt="" value="file"><br>
        <input type="file" name="image" id="" ><br>
        
        <label for="noidung">Nội dung</label><br>
        <input type="text" name="noidung"><br>
    
        <label for="time">Thời gian</label><br>
        <input type="time" name="time"><br>
    
         <label for="location">Địa điểm</label><br>
        <input type="text" name="location"><br>
    
         <label for="price">Giá</label><br>
        <input type="text" name="price"><br>
        <button type="submit" name="update_button">Cập nhật</button>
    </form action="submit">

</body>
</html>