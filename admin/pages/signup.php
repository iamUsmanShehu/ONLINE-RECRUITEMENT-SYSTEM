
<?php 
include("../../dbconn.php");

if(isset($_POST['password'])){
	$fname = $_POST['fname'];
	$surname = $_POST["surname"];
	$email = $_POST["email"];
	$password = $_POST["password"];

	$result =[];
		if ($fname && $surname && $email && $password){
			
			mysqli_query($connect, "INSERT INTO users_tbl(fname,surname,email,password) VALUES('$fname','$surname','$email','$password')");
			header("refresh:2; url=vacancy.php");
			$result="<style> .border{border:1px solid green!important; color:green!important;}</style>";
		}else{
			$result="<style> .border{border:1px solid maroon!important; color:maroon!important;}</style>";
		}
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	
</head>
<body>
	<div class="container">
		<?php include("nav.php"); ?>

		<style type="text/css">
			body{
				background:white;
			}
			.top-bg-image{
				width: 100%;
				height: 200px;
				background-image: url("../images/untitled.png");
				background-repeat: no-repeat;
				background-size: cover;
			}
			.container{
				box-shadow:0 15px 25px rgb(0,0,0,0.1);
				background: white;
				padding: 0;
			}
			.opacity{
				width: 100%;
				height: 100%;
				background:#28a745b3;
				justify-content: center;
				display: flex;
				font-weight: 700;
				text-align: center;
				color: white;
				text-shadow: 0px 4px 3px black, 5px 5px 10px #040434, 1px 1px 1px #ffc107;

			}
			
			.submit{
				background:#040434;
				color: white;
				border-radius: 8px;
			}
			.submit:hover{
				background:#07074e;
				color:white;
			}
			hr{
				border:1px solid #040434;
			}
			.row{
				justify-content: center;
				display: flex;
			}
		</style>
		
		<div class="row">
 
			<div class="col-md-4">
				<div style="padding: 20px;background: white; margin: 10px;margin-top: 60px;box-shadow: 0 15px 25px #ced4da;">
					<h3>Create Account</h3>
				<form method="POST" class="form-group">
					<input type="text" name="fname" class="form-control .border" placeholder=" First Name"><br>
					<input type="text" name="surname" class="form-control .border" placeholder="Surname"><br>
					<input type="text" name="email" class="form-control .border" placeholder="input Email" ><br>
					<input type="text" name="password" class="form-control .border" placeholder="input Password"><br>
					<input type="submit" name="" class="form-control submit">
					<center><b><a href="vacancy.php">Back</a></b></center>
				</form>

				</div>
			</div>

		</div><center><footer style="color:;"><hr>&copy 2024 By Group Members </footer></center>
	</div>
</body>
</html>