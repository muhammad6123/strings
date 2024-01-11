<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = ($_POST["name"]);
    $email = ($_POST["email"]);
    $comment = ($_POST["comment"]);
    $gender = ($_POST["gender"]);

    echo "name".$name ."<br/>";
    echo "email".$email."<br/>";
    echo "comment".$comment."<br/>";
    echo "gender".$gender;


}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?php echo ($_SERVER['PHP_SELF']);?>" method="post">
    <table>
        <tr>
            <td>name</td>
            <td><input type="text" name="name"></td>
        </tr>
        
        <tr>
            <td>email</td>
            <td><input type="text" name="email"></td>
        </tr>

        <tr>
            <td>comment</td>
            <td><textarea name="comment" cols="30" rows="10"></textarea></td>
        </tr>

        <tr>
            <td><input type="radio" name="gender" value="female">female</td>
            <td><input type="radio" name="gender" value="male">male</td>
        </tr>

        <tr>
            <td><input type="submit" name="submit" value="submit"></td>
        </tr>
    </table>
</form>

</body>
</html>