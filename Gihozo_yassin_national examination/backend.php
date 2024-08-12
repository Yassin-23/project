<?php
    include("connection.php");
    if(isset($_POST['register'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $checkUsername="SELECT username FROM Manager WHERE username='$username'";

        $query="INSERT INTO `manager`(`ManagerID`, `Username`, `password`) VALUES ('','$username','$password')";
        $result= mysqli_query($conn,$query);
        if($result){
            header('Location: index.php');
        }
    }
   if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query="SELECT * FROM `manager` WHERE  `username`= '$username' AND `password`='$password'";
    $result=mysqli_query($conn,$query);
    if($result){
        header('Location: dashboard.php');
    }
    die("error".mysqli_error($conn));
   }
   if(isset($_POST['Addfurniture'])){
    $FurnitureName=$_POST['FurnitureName'];
    $FurnitureOwnerName=$_POST['FurnitureOwnerName'];
    $query="INSERT INTO `furniture`(`FurnitureId`, `FurnitureName`, `FurnitureOwnerName`) VALUES ('','$FurnitureName','$FurnitureOwnerName')";
    $insert=mysqli_query($conn,$query);
    if($insert){
        header('Location: furniture.php');
    }
    die("error".mysqli_error($conn));
   }

    if(isset($_POST['AddImport'])){
       $ImportDate=$_POST['ImportDate'];
       $quantity =$_POST['quantity'];
       $query="INSERT INTO `import`(`FurnitureId`, `ImportDate`, `quantity`) VALUES ('',$ImportDate,$quantity)";
       $insert=mysqli_query($conn,$query);
    if($insert){
        header('Location: imports.php');
    }
    die("error".mysqli_error($conn));
    }
    if(isset($_POST['updatefurniture'])){
        $id=$_POST['id'];
        $FurnitureName=$_POST['furniturename'];
        $FurnitureOwnerName=$_POST['furnitureOwner'];
        $query="UPDATE `furniture` SET `FurnitureName`='$FurnitureName',`FurnitureOwnerName`='$FurnitureOwnerName' WHERE FurnitureId=$id";
        $result=mysqli_query($conn,$query);
        if($result){
            header('Location: furniture.php');
        }
        die("error".mysqli_error($conn));
    }
    if(isset($_POST['updateimport'])){
        $id=$_POST['id'];
        $ImportDate=$_POST['importdate'];
        $quantity=$_POST['Quantity'];
        $query="UPDATE `import` SET `ImportDate`='$ImportDate',`Quantity`='$quantity' WHERE FurnitureId=$id";
        $result=mysqli_query($conn,$query);
        if($result){
            header('Location: imports.php');
        }
        die("error".mysqli_error($conn));
    }
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $query="DELETE FROM `furniture` WHERE FurnitureId=$id";
        $result=mysqli_query($conn,$query);
    }
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $query="DELETE FROM `import` WHERE FurnitureId=$id";
        $result=mysqli_query($conn,$query);
    }
    if(isset($_POST['AddExport'])){
        $Date=$_POST['ExportDate'];
        $quantity=$_POST['Quantity'];
        $query="INSERT INTO `export`(`FurnitureId`, `ExportDate`, `Quantity`) VALUES ('',$Date,$quantity)";
        $result=mysqli_query($conn,$query);
        if($result){
            header('Location: Export.php');
        }
        die("error".mysqli_error($conn));
    }
?>