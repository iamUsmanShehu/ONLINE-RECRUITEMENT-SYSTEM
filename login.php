
<?php 
	include("dbconn.php");
	if(isset($_POST["password"])){ 

		session_start();
		if ($_POST){

		$_SESSION['email'] = $_POST['email'];
		$_SESSION['password']= $_POST['password'];

		$message=[];

		if ($_SESSION['email'] && $_SESSION['password']){
			$query = mysqli_query($connect, "SELECT * FROM applicants_tbl WHERE email = '".$_SESSION['email']."'");
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
						header("refresh:2; url='pages/home.php'");
						
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
					$message = "You have to type a email and Password!";
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
				background-image: url("images/untitled.png");
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
			.text{
				margin-top: 20px;
			}
			.col-md-6{
				padding: 20px;
			}
			.text-body{
				color: #ffffffab!important;
				text-align: justify;
			}
			.submit{
				background:#28a745;
				color: white;
				border-radius: 8px;
			}
			.submit:hover{
				background:#07074e;
				color:white;
			}
			hr{
				border:1px solid #28a745;
			}
			.text b{font-size: 40px;}
		</style>
		<div class="top-bg-image">
			<div class="opacity">
				<p class="text">
					<b>Online Recruitment System </b>
					<br><small>The system allow people to apply for a job online from their comport zone </small>
					<br><br><a href="index.php" class="btn btn-primary">Apply</a> &nbsp <a href="login.php" class="btn btn-info">Signin</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<div style="padding: 20px;color:; border-radius: 5px;height: 95%;width: 100%; margin: 10px;">
				<h2>Vacancies</h2>
					
				<p class="text-body">
					<table class="table table-hover" style="border:1px solid #bc303159; font-size: 14px;">
  <thead>
    <tr>
      <th scope="col">Position</th>
      <th scope="col">Description</th>
      <th scope="col">Availability</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
					
					<?php
		$query=mysqli_query($connect, "SELECT * FROM `vacancy_tbl` \n" . " ORDER BY `id` DESC");
			
		echo("<style> .activebadge {background:green;color:white;padding-right:10px;padding-left:10px; border-radius:50px;} </style>");
		echo("<style> .closedbadge {background:maroon;color:white;padding-right:10px;padding-left:10px; border-radius:50px;} </style>");		
			
		while($row=mysqli_fetch_array($query)) {

			$id=$row['id'];
			$positionname = $row['positionname'];
			$availablity = $row["availablity"];
			$status = $row["status"];
			$description = $row["description"];
			
			$element_class = ($row["status"] == "Active") ? "activebadge" : "closedbadge";
	
			echo "
					 <tr>
				      <td>$positionname</td>
				      <td>$description China Green Agriculture is a public company listed in the New York Stock Exchange with the ticker of CGA. Our primary operations are conducted through our wholly owned PRC subsidiaries, Shaanxi TechTeam Jinong 
				      <a href='' class='badge badge-primary'>Apply</a></td>
				      <td><span class='badge badge-light'>$availablity</span></td>
				      <td><i class='$element_class'><small>$status</small></i></td>
				      
				    </tr>				
			";
		}
		?>	</tbody>
				</table>	


				</p>
				</div>
			</div>
			<div class="col-md-4">
				<div style="padding: 20px;background: white; margin: 10px;margin-top: 60px;box-shadow: 0 15px 25px #ced4da;">
					<h3>Login</h3>
					<?php if (isset($message)) echo "$message"; ?>
				<form method="POST" class="form-group">
					<input type="text" name="email" class="form-control .border" placeholder="input Email" ><br>
					<input type="text" name="password" class="form-control .border" placeholder="input Password"><br>
					<input type="submit" name="" value='Login'class="form-control submit">
					<center><b>Don't have an account? &nbsp <a href="index.php">Signup</a></b></center>
				</form>

				</div>
			</div>

		</div><center><footer style="color:;"><hr>&copy 2024 Designed by Group Members <span class="badge badge-warning"><a href="admin/login.php">Signin</a></span> </footer></center>
	</div>
</body>
</html>