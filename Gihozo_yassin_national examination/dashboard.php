<!DOCTYPE html>
<html lang="en">
<?php 
include("connection.php");
?>
<head>
    <link rel="stylesheet" href="./bootstrap.min.css">
    <script src="./bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./main.css">
    <title>Document</title>
</head>
<body>
<div class="container ">
        <aside>
            <div class="top">
                <div class="logo"><br>
                    <img src="./img/pexels-maoriginalphotography-1485894.jpg" alt="logo"><br>
                    <h2>Manger <span class="success">Admin</span></h2>
                </div>
            </div>
                <div class="sidebar">
                    <a href="dashboard.php" class="text text-decoration-none">
                        <h3>Dashboard</h3>
                    </a>
                    <a href="furniture.php"  class="text text-decoration-none">
                        <h3>furniture</h3>
                    </a>
                    <a href="Export.php" class="text text-decoration-none">
                        <h3>Exports</h3>
                    </a>
                    <a href="imports.php" class="text text-decoration-none">
                        <h3>Imports</h3>
                    </a>
                    <a href="#" class="text text-decoration-none">
                        <h3>Report</h3>
                    </a>
                    <a href="#" class="text text-decoration-none">
                        <h3>Logout</h3>
                    </a>
                </div>
        </aside>
        <div class="card mb-auto mt-3 shadow" id="card" style="width: 18rem;">
  <div class="card-body">
    <h1 class="card-title">furniture</h1>
    <?php
    $count="COUNT (*) FROM furniture";
    $result=mysqli_query($conn,$count);
 if($result){
   while($row= mysqli_fetch_assoc($result))
    ?>
    <h2><?php echo $count;?></h2>
    <?php
 }
    ?>
</div>
</div>
</div>
</body>
</html>