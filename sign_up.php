<html>
	<head>
		<style>
		body{
			background:linear-gradient(#a7b2c4,#ad8c1f);
			padding-top:80px;
		}
        a{
            text-decoration: none;
        }
		.container{
			min-height:450px ;
			width:50%;
			background:#524d4d;
			margin:0px auto;
			padding:50px 40px;
			border-radius:10px;
			box-shadow:1px 3px 40px  3px  #a9a5a5;
		}
		.container:hover{
			box-shadow:0px 0px 5px 4px #000;
		}
		label{
			color:#fff;
			margin-top:10px;
		}
		.input{
			height:40px;
			width:100%;
			margin-top:10px;
			padding-left:10px;
			color:#f00;
			border-radius:5px;
			font-weight:bolder;
		}
		span{
		
			color:#fff;
		}
		.btn{
			background:#d4ae5a;
			padding:10px 5px;
			display: inline-block;
			width:100px;
			margin-left:14rem;
            text-align: center;
            color: #fff;
            border-radius: 10px;
            cursor: pointer;
		}
		p{
			text-align:center;
			margin-top:50px;
			color:#fff;
		}
		h3{
			text-align:center;
			color:#fff;
		}
		</style>
	</head>
	<body>
		<div class="container">
			<form method="POST" action="createpost.php">
				<label for="name">Usrename</label>
				<input type="text" name="name" class="input"><br><br>
                <label for="name">Email</label>
				<input type="text" name="email" class="input"><br><br>
				<label for="name">Mobile</label>
				<input type="text" name="mobile" class="input"><br><br>
				<label for="pass">Password</label>
				<input type="password" name="pass"  class="input"><br><br><br>
				
				<input type="checkbox" class="chek"><span >Remember Me</span>
				<input type="submit" class="btn" value="SignUP" name="userdata">
			</form>
			<p> <a href="" style="color: #fff;">Back Home</a></p>
			<h3></h2>
		</div>
	</body>
</html>