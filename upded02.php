<?php 
include 'crud01.php';


$id = $GET['edit'];
if(isset($_POST['update'])){
    $name = $_POST['name'];
    $fatherName = $_POST['fatherName'];
    $matherName = $_POST['motherName'];
    $dode_of_birth = $_POST['dode_of_birth'];

    $image = $_FILES['image']['name'];
    $name_tap_name = $_FILES['image']['tmp_name'];
    $name_tap_name_folder = 'uploaded/'.$image;

    if(empty($name) || empty($fatherName) || empty($matherName) || empty($image)){
        $message[] = 'Please fill out all fields.';
    } else {
    
        $upodate = " UPDATE python_crud SET name='$name', fatherName='$fatherName', motherName='$motherName', dode_of_birth='dode_of_birth', image='image') VALUES ('$name', '$fatherName', '$matherName', '$dode_of_birth', '$image' WHERE id = $id";

        $upload = mysqli_query($conn, $upodate);
    }
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-7">
                <div class="card shadow">
                    <div class="card-body">
                    <?php 
                    $sel = mysqli_query($conn,"SELECT * FROM python_crud  WHERE id=$id");
                    while($row = mysqli_fetch_assoc($sel)){

                        ?>
                    
                
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data">
                            <label for="">name</label>
                            <input type="text" name="name" value="<?php echo $row['name']?>" class="form-control"></input>

                            <label for="">fatherName</label>
                            <input type="text" name="fatherName" value="<?php echo $row['fatherName']?>"  class="form-control"></input>

                            <label for="">matherName</label>
                            <input type="text" name="motherName" value="<?php echo $row['motherName']?>"  class="form-control"></input>

                            <label for="">date_of_birth</label>
                            <input type="date" name="dode_of_birth" value="<?php echo $row['dode_of_birth']?>"   class="form-control"></input>

                            <label for="">image</label>
                            <input type="file" name="image" class="form-control"></input> <br>

                            <input type="submit" name="update" value="update" class="btn btn-success form-control"> <br>
                            <button class="btn btn-success mt-4  form-control"><a href="crud_from.php">go back</a></button>
                            
                        
                        </form>
                            <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>