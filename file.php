<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo ($_SERVER['PHP_SELF']);?>" enctype="multipart/form-data" method="post">
    <input type="file" name="image"/>
    <input type="submit" value="submit"/>
    </form>
<?php
    if(isset ($_FILES['image'])){
        $filename = $_FILES['image'] ['name'];
        $filetmp = $_FILES['image'] ['tmp_name'];
        move_uploaded_file($filetmp, "image/".$filename);
        echo "image uploaded successfully";
    }
phpinfo();
    ?>
</body>
</html>