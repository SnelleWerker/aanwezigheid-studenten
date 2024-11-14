<?php
session_start();
include "db_connect.php";

if (isset($_POST['username']) && isset($_POST['password']) && 
    isset($_POST['name']) && isset($_POST['re_password'])){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $username = validate ($_POST['username']);
    $password = validate ($_POST['password']);

    $re_password = validate ($_POST['re_password']);
    $name = validate ($_POST['name']);

    $user_data = 'username='. $username. '&name'. $name;


    if (empty($username)){
        header("Location: register.php?error=User Name required&$user_data");
        exit();
    }
    else if(empty($password)){
        header("Location: register.php?error=Password is required&$user_data");
        exit();
    }
    else if(empty($re_password)){
        header("Location: register.php?error=Confirm Password is required&$user_data");
        exit();
    }
    else if(empty($name)){
        header("Location: register.php?error=Name is required&$user_data");
        exit();
    }
    else if($password !== $re_password){
        header("Location: register.php?error=The confirmation password does not match&$user_data");
        exit();
    }
    else{
        
        //hashing the password
        $pass = md5($password);

        
        $sql = "SELECT * FROM tgebruiker WHERE user_name = '$username' ";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
           header("Location: register.php?error=The username is taken try another&$user_data");
            exit();
        }else{
            $sql2 = "INSERT INTO tgebruiker(user_name, password, name) VALUES('$username', '$password', '$name')";
            $result2 = mysqli_query($conn, $sql2);
            if ($result2){
                header("Location: register.php?success=Your account has been created successfully");
                exit();

            }else{
                header("Location: register.php?error=unknown error occurred&$user_data");
                exit();

            }
        }

    }

}else{
    header("Location: register.php");
    exit();
}