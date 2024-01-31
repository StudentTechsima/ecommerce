
<?php
/*
include 'dbconnect.php';
$sql="select * from student";
$result=mysqli_query($con,$sql);
*/
?>

<!DOCTYPE html>
<html>
<head>
<style>
body{
  padding:30px;
}
h2{
    text-align:center;
    color:rgba(100,0,100,0.8);
  }
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th { 
  border: 1px solid #dddddd;
  text-align: left;
  padding: 10px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<script>
        window.setTimeout(()=>{
            document.getElementById('succesmessage').style.display='none';
        },2000);
        
</script>

        <?php
        /*
        if(isset($_GET['success'])){ ?>
        <h2 style=  "color:green;"id="succesmessage">
            <?php echo $_GET['success'];?>
            </h2> <?php }
            */
            ?>
        <a href="create.php"><button>Add Date</button></a>

<h2>[Sign_in And Sign_up] </h2>

<table>
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Phone No</th>
    <th>Email</th>
    <th>Password</th>
    <th>UPDATE</th>
    <th>DELETE</th>
  </tr>

  <?php 

        // if($result->num_rows  > 0){
        // while($row=$result-> fetch_assoc()){
        ?>
  <tr>
    <td>1</td>
    <td>Ram Ashish</td>
    <td>8090690643</td>
    <td>ramashishk586@gmail.com</td>
    <td>6787688787</td>
    <td><a href="#"><button>EDIT</button></a></td>
    <td><a href="#"><button>DELETE</button></a></td>
  </tr>
  <tr>
    <!-- <td><?php echo $row['id']?></td>
    <td><?php echo $row['name']?></td>
    <td><?php echo $row['phone']?></td>
    <td><?php echo $row['email']?></td>
    <td><?php echo $row['pass']?></td> -->
    <!-- <td><a href="update.php ? id=<?php echo $row['id'];?>"><button>EDIT</button></a></td>
    <td><a href="delete.php ? id=<?php echo $row['id'];?>"><button>DELETE</button></a></td> -->
  </tr>

  <?php 
    //     }
    //  }
    ?>
</table>

</body>
</html>