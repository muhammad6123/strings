<?php 



$conn = mysqli_connect('localhost', 'root', '', 'python');



if(isset($_POST['submit'])){
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
    
        $insert = "INSERT INTO python_crud (name, fatherName, motherName, dode_of_birth, image) VALUES ('$name', '$fatherName', '$matherName', '$dode_of_birth', '$image')";

        $upload = mysqli_query($conn, $insert);
    


    }
}



$result = mysqli_query($conn, "SELECT * FROM python_crud ");



if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM python_crud WHERE id=$id");
    header('location: crud_from.php');

}


?>