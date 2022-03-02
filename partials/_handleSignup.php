<?php
$showError = "false";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include '_dbconnect.php';
    $user_email = $_POST['signupEmail'];
    $password = $_POST['signupPassword'];
    $cpassword = $_POST['signupcPassword'];


    //CHECK WHETHER THIS EMAIL EXISTS
    $existsql = "SELECT * FROM `users` WHERE user_email = '$user_email'";
    $result = mysqli_query($conn, $existsql);
    $numRows = mysqli_num_rows($result);
    //alert($numRows);
    if($numRows>0){
        $showError = "Email already in use";
    }
    else{
        if($pass == $cpass){
            $hash = password_hash($pass, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`user_email`, `user_pass`) VALUES ( '$user_email', '$hash')";
            $result = mysqli_query($conn, $sql);
            
            if($result){
                $showAlert = true;
                header("Location: /forum/forum.php?signupsuccess=true");
                exit();
            }

        }
        else{
            $showError = "Passwords do not match"; 
            
        }
    }

    header("Location: /forum/forum.php?signupsuccess=false&error=$showError");
}

?>