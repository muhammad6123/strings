

<?php include ('seven011.php');
if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $edit_start =true;
    $rec = mysqli_query($db, "SELECT * FROM object_crud WHERE id=$id");
    $record = mysqli_fetch_array($rec);
     $name = $record['name'];
     $address = $record['address'];
    $id = $record['id'];
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  href="/style011.css">
</head>
<body>
    <?php if(isset($_SESSION['msg'])):?>
        <div class="msg">
            <?php echo $_SESSION['msg'];
            unset($_SESSION['msg']);
            
            ?>
        
        </div>
        <?php endif ?>
    <table>
        <thead>
            <tr>
                <th>name</th>
                <th>address</th>
                <th colspan="2">action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($results)) { ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><a class="edit_den" href="index011.php?edit=<?php echo $row['id'];?>">edit</a></td>
                    <td><a class="del_den"  href="seven011.php?del=<?php echo $row['id'];?>">delete</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <form action="seven011.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id;?>">
        <div class="input-group">
            <label for="name">name</label>
            <input type="text" name="name" value="<?php echo $name;?>">
        </div>

        <div class="input-group">
            <label for="address">address</label>
            <input type="text" name="address" value="<?php echo $address;?>">
        </div>
        <div class="input-group">
            <?php if($edit_start == false):?>
            <button type="submit" name="save" class="btn">submit</button>
            <?php else: ?>
            <button type="submit" name="update" class="btn">updete</button>
            <?php endif ?>
        </div>
    </form>
</body>
</html>
