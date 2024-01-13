<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if(isset($_POST['text'])){
        global $text;
        $text = $_POST['text'];
        echo trim($text, " .");
    }
    
    
    ?>

<form action="" method="post">
    <input type="text" name="text" value="<?php global $text; echo $text;?>"/>
    <input type="submit" value="submit"/>
</form>
    
</body>
</html>