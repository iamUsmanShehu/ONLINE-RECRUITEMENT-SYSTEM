
<?php 
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "online_recuit_system";
	
	$connect = mysqli_connect($host, $user, $pass, $db) or die("Problem With Connection");
		

if(isset($_POST['password'])){
	$fname = $_POST['fname'];
	$surname = $_POST["surname"];
	$email = $_POST["email"];
	$password = $_POST["password"];

	$result =[];
		if ($fname && $surname && $email && $password){
			
			mysqli_query($connect, "INSERT INTO applicants_tbl(fname,surname,email,password) VALUES('$fname','$surname','$email','$password')");
			header("refresh:2; url=login.php");
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
		// mysqli_connect("localhost", "root", "") or die("Problem With Connection");
		// 	mysqli_select_db("online_recuit_system");
		
		$query=mysqli_query($connect, "SELECT * FROM `vacancy_tbl` \n" . " ORDER BY `id` DESC");
			
		
			
		while($row=mysqli_fetch_array($query)) {

			$id=$row['id'];
			$positionname = $row['positionname'];
			$availablity = $row["availablity"];
			$status = $row["status"];
			$description = $row["description"];
			$element_class = ($row["status"] == "Active") ? "activebadge" : "closedbadge";
		

				echo("<style> .activebadge{background:green;color:white;padding-right:10px;padding-left:10px; border-radius:50px;} </style>");
				echo("<style> 
					.closedbadge{background:maroon;color:white;padding-right:10px;padding-left:10px; border-radius:50px;} </style>");
			
	
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
					<h3>Create Account</h3>
				<form method="POST" class="form-group">
					<input type="text" name="fname" class="form-control .border" placeholder=" First Name"><br>
					<input type="text" name="surname" class="form-control .border" placeholder="Surname"><br>
					<input type="text" name="email" class="form-control .border" placeholder="input Email" ><br>
					<input type="text" name="password" class="form-control .border" placeholder="input Password"><br>
					<input type="submit" name="" class="form-control submit">
					<center><b>already have an account? &nbsp <a href="login.php">Signin</a></b></center>
				</form>

				</div>
			</div>

		</div><center><footer style="color:;"><hr>&copy 2021 </footer></center>
	</div>
</body>
</html>