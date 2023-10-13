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
                <h1 class="mt-5 text-center">Login Form</h1>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">User Name</label>
                        <input type="text" name="user_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>

<?php
if (isset($_POST['submit'])) {
    include 'Cinfig.php';
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    $sql = "select * from  userdata  where user_name = '" . $user_name . "' and password = '" . $password . "';";
    $result = $conn->query($sql);
    if ($result) {
        $row = $result->fetch_assoc();
        if ($row['id'] != null) {
            userSectionData($row['id']);

            $_SESSION['userID'] = $row['id'];
            header('location:navbar.php');
        }
    } else {
        echo "This user dose not access";
    }

    // $sql = "SELECT * FROM userdata where user_name ='" . $user_name . "','password";
    // $result  = $connect->query($sql);
    // if ($result) {
    //     $row = $result->fetch_assoc();

    //     if ($row['id'] != null) {
    //         saveUseSessionData($row['id']);
    //         header('location: View.php');
    //     }
    // } else {
    //     echo "<script> alert ('This user does not Exist')</script>";
    // }
}
?>




</html>