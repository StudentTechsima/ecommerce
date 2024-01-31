
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script type="text/javascript">
        window.setInterval(() => {
            document.getElementById("successmsg").style.display='none';
        }, 2000);
    </script>
   <?php if(isset($_GET['success'])){ ?>
    <h5 style="color:green" id="successmsg">
        <?php echo isset($_GET['success']) ? $_GET['success'] : '';?>
    </h5>
    <?php } ?>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        <?php
            include 'dbconnect.php' ;
            $sql="select * from student";
            $result=mysqli_query($con,$sql);
            //print_r($result);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
            //print_r($row);
        ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['mobile'] ?></td>
            <td><?php echo $row['Password'] ?></td>
            <td><a href="update.php?id=<?php echo $row['id']; ?>"><button>Edit</button></a>
            <a href="delete.php?id=<?php echo $row['id']; ?>"><button>delete</button></a></td>
        </tr>
        <?php
            }
        }
        ?>
    </table>
</body>
</html>