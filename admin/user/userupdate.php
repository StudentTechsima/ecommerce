<?php
include 'dbconnect.php';
//forupdate
if(isset($_POST['update'])){
    $id= $_POST['id'] ? $_POST['id'] :'';
    $name = $_POST['name'] ? $_POST['name'] : '';
    $email = $_POST['email'] ? $_POST['email'] : '';
    $mobile = $_POST['mobile'] ? $_POST['mobile'] : '';
    $message = $_POST['password'] ? $_POST['password'] : '';
    $sql="update student set name='$name',emaiil='$email',phone='$mobile',mobile='$password'
     where id=$id";
     if(mysqli_query($con,$sql)){
        header("Location:read.php?success=Record updated succcessfully");
     }else{
        echo mysqli_error($con);
     }
}
//get
if(isset($_GET['id'])){
$id = ($_GET['id']);
$selsql="select * from student where id=$id";
$res=mysqli_query($con,$selsql);
if($res->num_rows > 0){
    while($row = $res->fetch_assoc()){
        $name = $row['name'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        $password = $row['password'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Name: <input type="text" value="<?php echo $name; ?>" name="name">
        <input type="hidden" value="<?php echo $id; ?>" name="id">
        Emaiil: <input type="text" value="<?php echo $emaiil; ?>" name="emaiil">
        phone: <input type="text" value="<?php echo $phone; ?>" name="phone">
        Message: <textarea name="message" id="" cols="30" rows="10"><?php echo $message; ?></textarea>
        <input type="submit" value="update" name="update">
    </form>
</body>
</html>
<?php 
} ?>//iseet ka close