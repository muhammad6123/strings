<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if(isset($_POST['gender'])){
        $gender = $_POST['gender'];
        if($gender == "male"){
            echo "you are a male";

        }
        elseif($gender == "female"){
            echo "you are a female";

        }
        else {
            echo "you are a other";
        }
       
    }
    
    
    ?>
    <form action="" method="post">
        <table>
            <tr>
                <td> <input type="radio" name="gender" value="male">male</td>
                <td> <input type="radio" name="gender" value="female">female</td>
                <td> <input type="radio" name="gender" value="other">other</td>
            </tr>


        <tr>
                <td><input type="submit" name="submit" value="submit"></td>
                <td></td>
        </tr>
        </table>
    </form>
</body>
</html>