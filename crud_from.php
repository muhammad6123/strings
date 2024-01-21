<?php 
include 'crud01.php';


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
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data">
                            <label for="">name</label>
                            <input type="text" name="name" placeholder="Enter your name" class="form-control"></input>

                            <label for="">fatherName</label>
                            <input type="text" name="fatherName" placeholder="Enter your fatherName" class="form-control"></input>

                            <label for="">matherName</label>
                            <input type="text" name="motherName" placeholder="Enter your phone matherName" class="form-control"></input>

                            <label for="">date_of_birth</label>
                            <input type="date" name="dode_of_birth" placeholder="Enter your dode_of_birth"  class="form-control"></input>

                            <label for="">image</label>
                            <input type="file" name="image" class="form-control"></input> <br>

                            <input type="submit" name="submit" value="submit" class="btn btn-success form-control">
                        </form>

                    </div>
                </div>
            </div>
        </div>


        <table class="table table-primary shadow pl-7">
            <thead>
                <tr>
                
                    <th>name</th>
                    <th>FatherName</th>
                    <th>MatherName</th>
                    <th>Date</th>
                    <th>image</th>
                    <th colspan="2">action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['fatherName']; ?></td>
                        <td><?php echo $row['motherName']; ?></td>
                        <td><?php echo $row['dode_of_birth']; ?></td>
                        <td><img src="uploaded/<?php echo $row['image']; ?>" height="100" alt=""></td>
                        <td>
                            <a href="update02.php?edit=<?php echo $row['id'];?>" class="btn btn-secondary">edit</a>
                            <a href="crud_from.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
</body>
</html>