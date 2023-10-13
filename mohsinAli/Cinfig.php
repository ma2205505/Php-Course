<?php
    $server_name = 'localhost';
    $user_name = 'root';
    $password = '';
    $database_name = 'student_details';


    try {
        $connect = new mysqli($server_name, $user_name, $password, $database_name);
        if ($connect -> connect_error) {
            die('connection failed: ' . $connect->connect_error);
        }
        else {
            // echo 'connection successfull';
        }

    } catch (Exception $ex) {
        echo "exception";
    }






?>