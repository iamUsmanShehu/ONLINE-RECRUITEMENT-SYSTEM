
<?php 
	include("../dbconn.php");

	if(isset($_POST["password"])){ 

		session_start();
		if ($_POST){

		$_SESSION['email'] = $_POST['email'];
		$_SESSION['password']= $_POST['password'];

		$message=[];

		if ($_SESSION['email'] && $_SESSION['password']){
			$query = mysqli_query($connect, "SELECT * FROM users_tbl WHERE email = '".$_SESSION['email']."'");
			$numrows = mysqli_num_rows($query);
			
			if ($numrows != 0){
				
				while($row = mysqli_fetch_assoc($query)){
					$dbemail = $row['email'];
					$dbpassword = $row['password'];
					$_SESSION['image']= $row['image'];
					$_SESSION['id']= $row['id'];
					$_SESSION['fname']= $row['fname'];
					$_SESSION['surname']= $row['surname'];
					$_SESSION['email']= $row['email'];
					$_SESSION['gender']= $row['gender'];
					$_SESSION['maritalstatus']= $row['maritalstatus'];
					$_SESSION['contact']= $row['contact'];
					$_SESSION['address']= $row['address'];
					$_SESSION['image']= $row['image'];

				}
				if($_SESSION['email']==$dbemail){
					if($_SESSION['password']==$dbpassword){
						
						$message = "You have login successfully";
						header("refresh:2; url='pages/vacancy.php'");
						
					}else{ 
						$message = "your password is incorrect!";
					}
				}else{
					$message = "your name is incorrect!";
				}
			}else{
					$message = "Invalid email!";
				}
		}else{
					$message = "You have to type email and Password!";
				}
		}else{
			echo "Access Denied!";
			exit;
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
		<?php include("pages/nav.php"); ?>

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
				width: 80%;
			}
			.row{
				justify-content: center;
				display: flex;
			}
		</style>
		
		</div>
		<div class="row">
			<div class="col-md-4">
				<div style="padding: 20px;background: white; margin: 10px;margin-top: 60px;box-shadow: 0 15px 25px #ced4da;">
					<h3>Login</h3>
					<?php if (isset($message)) echo "$message"; ?>
				<form method="POST" class="form-group">
					<input type="text" name="email" class="form-control .border" placeholder="input Email" ><br>
					<input type="text" name="password" class="form-control .border" placeholder="input Password"><br>
					<input type="submit" name="" value='Login'class="form-control submit">
					<center><b><a href="login.php">Forgot Password</a></b></center>
				</form>

				</div>
			</div>

		</div><center><footer style="color:;"><hr>&copy 2024 By Group Members </footer></center>
	</div>
</body>
</html>