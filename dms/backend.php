<?php
include('connection.php');
session_start();
if(isset($_POST['register'])){
    $names=$_POST['name'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $role=$_POST['role'];
    $query="INSERT INTO `users`(`id`, `names`, `email`, `password`, `role`) VALUES ('','$names','$email','$password','$role')";
}

// if(isset($_POST['login'])){
//     $username=$_POST['username'];
//     $password=$_POST['password'];
//     $query="SELECT * FROM `users` WHERE  `username`= '$username' AND `password`='$password'";
//     $result=mysqli_query($conn,$query);
//     if($result){
//         header('Location: dashboard.php');
//     }
//     die("error".mysqli_error($conn));
//    }
   if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
  
    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $user = mysqli_query($connection, $query);
  
    if (mysqli_num_rows($user)>0) {
  
      $row = mysqli_fetch_assoc($user);
    
        $user_id = $row['id'];
        $user_name = $row['names'];
        $user_email = $row['email'];
        $user_password = $row['password'];
        echo $user_email;
        $_SESSION['id'] = $user_id;      
        $_SESSION['names'] = $user_name;  
        $_SESSION['email'] = $user_email; 
        header('location: dashboard.php?user_id=' . $user_id);
    } else{
      echo "<script>alert('User does not exist')</script>";
    }
  }
?>