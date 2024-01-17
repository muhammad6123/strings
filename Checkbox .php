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
        echo "you have selected ";
        foreach($gender as $lenth => $value){
            echo $value.", ";
        }
    
    }
    
    
    ?>
     <form action="" method="post">
        <table>
            <tr>
                <td>
                    <input type="checkbox" name="gender[]" value="php">PHP
                    <input type="checkbox" name="gender[]" value="java">Java
                    <input type="checkbox" name="gender[]" value="html">HTML
                </td>
            </tr>

            <tr>
                <td><input type="submit" name="submit" value="Submit"></td>
                <td></td>
            </tr>
        </table>
    </form>
</body>
</html>