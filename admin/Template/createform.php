<html>
    <div>
        <?php require_once "admin/Controllers/ProductController.php";?>

        <form action="CreateController" method="post" enctype ="multipart/form-data">
            <div class="form-group <?php echo(!empty($name));?>">
            <label for="">quan ly danh muc</label><br>
            
            <label for="">Name</label>
            <input type="text" name="name" class="form-control" value="">
            <span class="help-block"><span>
            <input type="submit" value="submit">
            </div>
        </form>
    </div>
</html>