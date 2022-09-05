<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'db_userside');

if (isset($_POST['USERname']) && isset($_POST['PASSword']))    {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $USERname = validate ($_POST['USERname']);
    $PASSword = validate ($_POST['PASSword']);
    

    if (empty($USERname)){
        header("Location: index2.php?error=Username is required");
        exit();
    }else if(empty($PASSword)){
        header("Location: index2.php?error=Password is required");
        exit();
    }else{
     
       $sql = "SELECT * FROM tbl_userreg WHERE username_REG ='$USERname' AND password_REG='$PASSword'";
        $result = mysqli_query($db, $sql);
        if (mysqli_num_rows($result) === 1) {
           $row = mysqli_fetch_assoc($result);
            if ($row['username_REG'] === $USERname && $row['password_REG'] === $PASSword) { 
                $_SESSION['username_REG'] = $row['username_REG'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
    
            
                 header("Location: main.php");
    
                exit();
            }else{
                header("Location: index2.php?error=Incorrect Username and password");
                exit();
            }
        }else{
            header("Location: index2.php?error=Incorrect Username or Password");
            exit();
        }
    }
} 
else{ 
    header("Location: index.php");
    exit();
}




