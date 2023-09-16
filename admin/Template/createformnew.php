<form action="CreateControllerTwo" method="POST" enctype="multipart/form-data">
    <label for="name">Tên sản phẩm</label><br>
    <input type="text" name="name"><br>
    
    <label for="id_category">Tên Danh Mục</label><br>
    <select name="id_category" id="id_category">
        <option value="input">Tên danh mục</option>
        <?php foreach ($row as $key => $value) { ?>
            <option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
        <?php } ?>
    </select><br>
    
    <label for="image">Hình ảnh</label><br>
    <input type="file" name="image"><br>
    
    <label for="noidung">Nội dung</label><br>
    <input type="text" name="noidung"><br>
    
    <label for="time">Thời gian</label><br>
    <input type="time" name="time"><br>
    
    <label for="location">Địa điểm</label><br>
    <input type="text" name="location"><br>
    
    <label for="price">Giá</label><br>
    <input type="text" name="price"><br>
    
    <button type="submit" name="submit_button">Thêm</button>
</form>
