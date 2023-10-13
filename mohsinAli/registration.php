<?php
include "Navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
    <div class="col-md-3"></div>
        <div class="col-md-6">
            <h1 class="mt-5 text-center">Registration Form</h1>
        <form action="" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">User Name</label>
    <input type="text" name="user_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" id="password">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" onchange="comparePassword()">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" id="confirm_password">confirm password</label>
    <input type="password" name="confirm_password" class="form-control" id="exampleInputPassword2" onchange="comparePassword()">
  </div>
  <button id="btnRegister" type="submit" name="submit" class="btn btn-primary" disabled>Register</button>
</form>
    </div>
    <div class="col-md-3"></div>
    </div>
</div>
<?php 
  if (isset ($_POST['submit'])) {
    include "Cinfig.php";
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    
    $createUserQuery = "INSERT INTO `userdata` (`user_name`, `password`,`confirm_password`) VALUES ('$user_name', '$password', '$confirm_password')";
    $result = $connect->query($createUserQuery);
}
?>
<script>
function comparePassword() {
  var p1 = document.getElementById("exampleInputPassword1").value;
  var p2 = document.getElementById("exampleInputPassword2").value;
  if(p1 == p2){
    document.getElementById("btnRegister").removeAttribute("disabled");
  }
}
</script>

</body>
</html>