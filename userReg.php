<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'db_userside');


if (isset($_POST['username']) && isset($_POST['password']))    {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $username = validate ($_POST['username']);
    $password = validate ($_POST['password']);

if (empty($username)){
     header("Location: index2.php?error2=Username is required");
  
    exit();
    
 
}else if(empty($password)){
    header("Location: index2.php?error2=Password is required");
    exit();

  
   
 }else if(empty($username)and($password)){
    header("Location: index2.php?error2=Username and Password is required");
    exit();
 }
 else{
   
if (isset($_POST['REG'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $query = "INSERT INTO `tbl_userreg`(`username_REG`, `emailAdd_REG`, `password_REG`) VALUES('$username', '$email', '$password')";
    $query_run = mysqli_query($db, $query);

    if($query_run)
    {
    echo '<script> alert("Registered"); </script>';
    header("Location: index2.php");
    
    }
    else
    {
        echo '<script> alert("Not Registered"); </script>';
            }
        }
    }
}