<?php
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <br><br>
    <?php
    $id = $_GET['id'];
    $query="SELECT * FROM furniture WHERE FurnitureId=$id";
    $result=mysqli_query($conn,$query);
    $row =mysqli_fetch_assoc($result);
    ?>
    <form action="backend.php" method="POST">

        <div class="modal-body">
            <div class="form-group">
                <form action="backend.php" method="POST">
                    <div class="mb-3">
                       <input type="hidden" name="id" value="<?php echo $row['FurnitureId'] ;?>">
                        <label for="exampleInputEmail1" class="form-label">furnitureName</label>
                        <input type="text" class="form-control" value="<?php echo $row['FurnitureName'];?>"
                            name="furniturename" aria-describedby="emailHelp" placeholder="furnitureName">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">furnitureOwner</label>
                        <input type="text" class="form-control" value="<?php echo $row['FurnitureOwnerName'];?>"
                            name="furnitureOwner" placeholder="furnitureOwner">
                    </div>
                    <button type="submit" class="btn btn-success" name="updatefurniture">update</button>
</body>

</html>