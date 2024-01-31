<?php
$host="localhost";
$user="root";
$pass= '';
$database="ramashish";
$con = mysqli_connect($host,$user,$pass,$database);
if(!$con){
    die("connection not established".mysqli_error());
}
else{
    echo "connection is established";
}

if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['login'])){
        $uname = $_POST['name'] ? $_POST['name'] : '';
        $email = $_POST['email'] ? $_POST['email'] : '';
        $mobile = $_POST['mobile'] ? $_POST['mobile'] : '';
        $password = $_POST['password'] ? $_POST['password'] : '';

        $sql = "Insert into login(username,password) values('$uname','$email','$mobile','$password')";
        if(mysqli_query($con,$sql)){
            header("Location:loginread.php?success=Record inserted succcessfully");
        }else{
            echo mysqli_error($con);
        }
    }
}