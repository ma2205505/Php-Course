<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php
    include "Navbar.php";
    ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
        <form action="" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">First Name</label>
    <input type="text" name="fname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">city</label>
    <input type="text" name="city" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
    </div>
</div>
    <?php

    //-----------------for loop method--------------------//

    // define ("cars", ['civic','reborn','mehran','cultus','alto','picanto']);

    // for($i=0;$i<count(cars);$i++)
    // {
    //    echo cars[$i];
    // };

    //-----------------for loop array length method--------------------//

    // define ("cars", ['civic','reborn','mehran','cultus','alto']);
    // echo count(cars);


    //-----------------for loop minus method--------------------//

    // define ("cars", ['civic','reborn','mehran','cultus','alto']);

    // for($i=0;$i<5;$i--)
    // {
    //    echo cars[$i];
    // }; 
    
    //-----------------while loop minus method--------------------//

    // $i= 0;
    // while ($i < 20) {
    //     echo $i++;
    // }


    //-----------------if or else method--------------------//

    // $x = 10;
    // if($x % 2 == 0)             //(percentage ka sign even or odd check krne k lye hta h or isse moduler kehte hen)
    // {
    //     echo "Even";
    // }
    // else
    // {
    //     echo "Odd";
    // }


    //-----------------if or else method nested--------------------//

    // for($i=0;$i<10;$i++)
    // {
    // if($i % 2 == 0)
    // {
    //     echo "Even";
    // }
    // else
    // {
    //     echo "Odd";
    // }
    // }


    //-----------------if or else method only even print--------------------//

    // for($i=2;$i<10;$i+=2)
    // {
    // if($i % 2 == 0)
    // {
    //     echo "Even";
    // }
    // }


    //-----------------function method--------------------//

    // $firstname =  'Mohsin';
    // $lastname =  'Ali';
    // demo($firstname , $lastname);

    // function demo($firstname , $lastname) {
    //     echo 'hello' , '  ' , $firstname , '  ', $lastname;
    // }


    //-----------------function calculator method--------------------//

    // $num1 = 60;
    // $num2 = 50;
    // $decision = '-';

    // function sum($num1, $num2) {
    //     echo $num1 + $num2;
    // };

    // function sub($num1, $num2) {
    //     echo $num1 - $num2;
    // };

    // function multi($num1, $num2) {
    //     echo $num1 * $num2;
    // };

    // function divide($num1, $num2) {
    //     echo $num1 / $num2;
    // };


    // if ($decision == '+') {
    //     echo sum($num1, $num2);
    // }

    // if ($decision == '-') {
    //     echo sub($num1, $num2);
    // }

    // if ($decision == '*') {
    //     echo multi($num1, $num2);
    // }

    // if ($decision == '/') {
    //     echo divide($num1, $num2);
    // }


    //-----------------Data sending into database method--------------------//


    if (isset ($_POST['submit'])) {
        include "Cinfig.php";
        $fname = $_POST['fname'];
        $city = $_POST['city'];
        echo 'My name is ' . $fname . ' I live in '. $city;

        $createUserQuery = "INSERT INTO `student_data` (`first_name`, `city`) VALUES ('$fname', '$city')";
        $result = $connect->query($createUserQuery);
    
        if ($result) {
            echo 'Your Data Successfully Saved';
        }
        else {
            echo 'Your Data was not Saved';
        }
    
    }







    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>