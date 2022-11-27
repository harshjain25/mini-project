<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['pwd'];

$conn = new mysqli('localhost','root','','user_data');
if($conn->connect_error){
    
    die('connection failed' .$conn->connect_error);
}
else{

    $data = mysqli_fetch_assoc(mysqli_query($conn,"select * from data where email='$email' "));
    if($data['email']!="$email"){
    $stmt = $conn->prepare("insert into data(name,email,password) values(?,?,?)");
    $stmt->bind_param("sss",$name,$email,$password);
    $stmt->execute();
    echo '<script>alert("Registration successful please login");
    location.href="https://harshjain25.github.io/WeTalk/";
    </script>';
    $stmt->close();
    $conn->close();
    }
    else{
        echo "<script> alert('account already exist please login');
            location.href='login.html';
            </script>";
    }
}
?>