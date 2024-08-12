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
                    <a href="#" class="text text-decoration-none">
                        <h3>Dashboard</h3>
                    </a>
                    <a href="furniture.php"  class="text text-decoration-none">
                        <h3>furniture</h3>
                    </a>
                    <a href="#" class="text text-decoration-none">
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
        <div class="container">
            <div class=" m-5">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Add funiture
                    </button><br><br><br>
                <table class="table table-responsive-lg" id="table">
                    <thead>
                        <th>id</th>
                        <th>furnitureName</th>
                        <th>furnitureOwner</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        <?php
             $query = "SELECT * FROM `furniture`";
             $result = mysqli_query($conn, $query);
          if($result){
            while($row= mysqli_fetch_assoc($result)){
                ?>
                        <tr>
                            <td><?php echo $row['FurnitureId']?></td>
                            <td><?php echo $row['FurnitureName']?></td>
                            <td><?php echo $row['FurnitureOwnerName']?></td>
                            <td>
                            <a href="update furniture.php?id='<?php echo $row['FurnitureId'];?>'" class="btn btn-success">Update</a>
                            </td>
                            <td><a href="backend.php?id='<?php echo $row['FurnitureId'];?>'" class="btn btn-warning">Delete</a></td>
                        </tr>
                        <?php 
            }
          } ?>
                    </tbody>
                </table>
            </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="backend.php" method="post">
          <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">FurnitureName</label>
        <input type="text" class="form-control" id="exampleFormControlInput1"name="FurnitureName" placeholder="enter FurnitureName">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">FurnitureOwnerName</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="FurnitureOwnerName" placeholder="enter FurnitureOwnerName">
      </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" name="Addfurniture">Add</button>
            </div>
          </form>
          </div>
        </div>
      </div>
          </div>
</body>

</html>