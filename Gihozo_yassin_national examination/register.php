<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <form action="backend.php" method="post">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">username</label>
  <input type="text" class="form-control" id="exampleFormControlInput1"name="username" placeholder="enter username">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">password</label>
  <input type="password" class="form-control" id="exampleFormControlInput1" name="password" placeholder="password">
</div>
<button type="submit" class="btn btn-primary" name="register">register</button><br>
    <p>if you have account?<a href="index.php">here</a></p>
    </form>
</body>
</html>