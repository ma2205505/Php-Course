<?php
include "Cinfig.php";
$sql = 'SELECT * FROM student_data';
$result  = $connect->query($sql);
include "Navbar.php";
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style href="style.css"></style>
    <title>Document</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-4">
        </div>
        <div class="container">
    <div class="col-md-12">
        <h1 class=" mt-5 text-center mt-2">Student Details</h1>
    <table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">fname</th>
      <th scope="col">city</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  <?php
if ($result -> num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        ?>
            <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['first_name'];?></td>
            <td><?php echo $row['city'];?></td>
            <td><button class="btn btn-sm btn-primary">Edit</button>
            <button data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="deletedetails(<?php echo $row['id']?>, '<?php echo $row['first_name']?>', '<?php echo $row['city']?>')" class="btn btn-sm btn-danger">delete</button>
            <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="showdetails(<?php echo $row['id']?>, '<?php echo $row['first_name']?>', '<?php echo $row['city']?>')">Show Details</button></td>
            </tr>
       <?php
        }
    }
       ?>
        </div>
    </div>
</div>

                 <?php
                 if (isset ($_POST['submit'])) {
                    include "Cinfig.php";
                    $fname = $_POST['fname'];
                    $city = $_POST['city'];
                    // echo 'My name is ' . $fname . ' I live in '. $city;
            
                    $createUserQuery = "INSERT INTO `student_data` (`first_name`, `city`) VALUES ('$fname', '$city')";
                    $result = $connect->query($createUserQuery);
                
                    // if ($result) {
                    //     echo 'Your Data Successfully Saved';
                    // }
                    // else {
                    //     echo 'Your Data was not Saved';
                    // }
                
                }
                ?>



  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <form action="View.php" method="POST">
    <div class="modal-content">
      <div class="modal-header">
      <div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">id</label>
    <input  type="text" id="studentId" name="studentId" class="form-control"  aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">First Name</label>
    <input type="text" id="f_name"  name="fname" class="form-control"  aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">city</label>
    <input type="text" id="city" name="city" class="form-control" >
  </div>
        </div>
    </div>
</div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="update" class="btn btn-primary" echo="check it">Save changes</button>
      </div>
    </div>
     </form>
  </div>
</div>

  </tbody>
</table>
    </div>
</div>

<script>
function showdetails(id , f_name , city){
console.log(id , f_name , city);
document.getElementById("studentId").value = id;
document.getElementById("f_name").value = f_name;
document.getElementById("city").value = city
}

function deletedetails(id , f_name , city){
console.log(id , f_name , city);
document.getElementById("studentId").value = id;
document.getElementById("f_name").value = f_name;
document.getElementById("city").value = city
}






</script>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>




<?php
    
  if(isset($_POST["update"])){
    include "Cinfig.php";
    $id =  $_POST["studentId"];
    $f_name = $_POST["fname"];
    $city = $_POST["city"];

    $result = 0;
  $sql = "UPDATE `student_data` SET `first_name` = '$f_name' , `city` = '$city' WHERE `id` = '$id'";
  $result = $connect->query($sql);
  
  echo "<script> window.reload()</script>";
  }?>