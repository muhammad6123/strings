<?php
session_start();
$name = "";
$address = "";
$id = 0;
$edit_start = false;


$db = mysqli_connect('localhost', 'root', '', 'it_crud');

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];

    $query = "INSERT INTO object_crud (name, address) VALUES ('$name', '$address')";
    mysqli_query($db, $query);
    $_SESSION['msg'] = "Address saved";
    header('location: index011.php');
    
}

if (isset($_POST['update'])) {
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $address = mysqli_real_escape_string($db, $_POST['address']);
    $id = mysqli_real_escape_string($db, $_POST['id']);

    mysqli_query($db, "UPDATE object_crud SET name='$name', address='$address' WHERE id=$id");
    $_SESSION['msg'] = "Address updated";
    header('location: index011.php');
    
}

if (isset($_GET['del'])) {
    $id = $_GET['del'];
    mysqli_query($db, "DELETE FROM object_crud WHERE id=$id");
    $_SESSION['msg'] = "Address updated";
    header('location: index011.php');

}

$results = mysqli_query($db, "SELECT * FROM object_crud");
?>
