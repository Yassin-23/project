<?php
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./bootstrap.min.css">
    <script src="./bootstrap.min.js"></script>
    <link rel="stylesheet" href="./main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <div class="container">
            <div class=" m-5">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Add Export
                    </button><br><br><br>
                <table class="table table-responsive-lg" id="table">
                    <thead>
                        <th>id</th>
                        <th>Exportdate</th>
                        <th>Quantity</th>
                        <th>update</th>
                        <th>delete</th>
                    </thead>
                    <tbody>
                        <?php
             $query = "SELECT * FROM Export";
             $result = mysqli_query($conn, $query);
          if($result){
            while($row= mysqli_fetch_assoc($result)){
                ?>
                        <tr>
                            <td><?php echo $row['FurnitureId']?></td>
                            <td><?php echo $row['ExportDate']?></td>
                            <td><?php echo $row['Quantity']?></td>
                            <td><a href='updateimport.php?id="<?php echo $row['FurnitureId']?>"' class=" btn btn-success">Update</a></td>
                            <td><a href='backend.php?id="<?php echo $row['FurnitureId']?>"' class=" btn btn-warning">Delete</a></td>
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
              <h1 class="modal-title fs-5" id="exampleModalLabel">Add Exported</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="backend.php" method="POST">
          <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">ExportDate</label>
        <input type="date" class="form-control" id="exampleFormControlInput1"name="ExportDate" placeholder="enter FurnitureName">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Quantity</label>
        <input type="password" class="form-control" id="exampleFormContr olInput1" name="Quantity" placeholder="enter FurnitureOwnerName">
      </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" name="AddExport">Add</button>
            </div>
          </form>
          </div>
        </div>
      </div>
          </div>
</body>
</html>