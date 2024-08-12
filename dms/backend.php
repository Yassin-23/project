<?php
include('connection.php');
if(isset($_POST['register'])){
    $names=$_POST['name'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $role=$_POST['role'];
    $query="INSERT INTO `users`(`id`, `names`, `email`, `password`, `role`) VALUES ('','$names','$email','$password','$role')";
}

if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query="SELECT * FROM `users` WHERE  `username`= '$username' AND `password`='$password'";
    $result=mysqli_query($conn,$query);
    if($result){
        header('Location: dashboard.php');
    }
    die("error".mysqli_error($conn));
   }
?>