<?php
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = new mysqli('localhost','root','','user_data');
    if($conn->connect_error){
        die('connection failed' .$conn->connect_error);
    }
    else {
        $datae = mysqli_fetch_assoc(mysqli_query($conn,"select * from data where email='$email' "));
        // $datap = mysqli_fetch_assoc(mysqli_query($conn,"select * from registration where password='$password' "));

        if($datae['email']==$email){
            if (($password==$datae['password'])){
                echo '<script>alert("Login successful");
                location.href="https://harshjain25.github.io/WeTalk/";
                </script>';
    
            }
            else{
                echo '<script>alert("Email or password miss match");
                location.href="login.html";
                </script>';
    
            }
        }
            else{
                echo "<script> alert('acount does not exist');
                location.href='login.html';
                    </script>";
            }
    }


?>
