

<?php include("header.php"); ?>
<?php include("nav.php"); ?>
<?php 
	session_start();
include("../../dbconn.php");

if(isset($_POST['positionname'])){
	$positionname = $_POST['positionname'];
	$availablity = $_POST["availablity"];
	$status = $_POST["status"];
	$description = $_POST["description"];

	$result =[];
		if ($positionname && $availablity && $status && $description){
			
			mysqli_query($connect, "INSERT INTO vacancy_tbl(positionname,availablity,status,description) VALUES('$positionname','$availablity','$status','$description')");

			$result="<style> .border{border:1px solid green!important; color:green!important;}</style>";
		}else{
			$result="<style> .border{border:1px solid maroon!important; color:maroon!important;}</style>";
		}
	}
 ?>
<style type="text/css">
	body{
		margin:0;
	}
	.margin{
		margin-bottom: 10px;
		margin-top: 5px;
	}
	.col{
		padding-right: 2px!important;
    	padding-left: 2px;
    	color: rgb(40 167 69);
	}
	.active{color:green;}
	.closed{color: maroon;}
	.container{
		width: 99%!important;
	}
	.vacancyhead{
		background: #040434;
		color: white;
		margin-top: 20px;
		padding: 10px;
		padding-left: 20px;
		padding-right: 20px;
		width: 100%;

	}
	table{
		margin-top: 20px;
		width: 100%;
	}
	.btn-width{width:95%; margin-top: 20px;background: #040434;}
	.containe{
		margin-right:20px!important;
   		 margin-left:20px!important;
	}
	img{border: 2px solid #040434;
	border-radius: 50px;}
	table {
	    border: 1px solid rgb(0 0 0 / 8%);
	}
	form{width:100%;}

	@media (min-width: 992px)
.container {
    max-width: 100%;
    margin-right:20px;
    margin-left:20px;
}
@media (min-width: 768px)
.container {
    max-width: 100%;
    margin-right:20px;
    margin-left:20px;
}
@media (min-width: 576px)
.container {
    max-width: 100%;
    margin-right:20px;
    margin-left:20px;
}
.col-md-2{

 			  box-shadow:0 15px 25px rgb(0,0,0,0.1);
 			  padding: 0px;
}
.btn-danger{background: #dc3545;}

</style>
<div class="container">
	<div class="row">
		<div class="col-md-2">
			<?php 
			$fname=$_SESSION["fname"];
			$surname=$_SESSION["surname"];
			$email=$_SESSION["email"];
			$gender=$_SESSION["gender"];
			$maritalstatus=$_SESSION["maritalstatus"];
			$contact=$_SESSION["contact"];
			$address=$_SESSION["address"];
			$image=$_SESSION["image"];
			$picture="<img src='uploaded_imgs/".$_SESSION["image"]."' width='100' height='100'>";
			echo("<br>");
			echo "<center class='img'>$picture </center>";

			 ?>
			 <a href="home.php" class="btn btn-primary btn-width">Home</a>
			<a href="updateprofile.php" class="btn btn-primary btn-width">Update Profile</a>
			<a href="signup.php" class="btn btn-primary btn-width">Create Admin</a>
			<a href="vacancy.php" class="btn btn-primary btn-width">Vacancy</a>
			<a href="admin.php" class="btn btn-primary btn-width">Admin(s)</a>
			<a href="../login.php" class="btn btn-danger btn-width"><i class="fa fa-sign-out"></i> Signout</a>
		</div>
		<div class="col-md-8">
			

<table class="table table-hover" style="border:1px solid #bc303159; font-size: 14px;">
  <thead>
    <tr>
      <th scope="col">Fullname</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Contact</th>
      <th scope="col"><i class="fa fa-gear"></i></th>
    </tr>
  </thead>
  <tbody>
   

<?php
		
		$query=mysqli_query($connect, "SELECT * FROM `users_tbl` \n" . " ORDER BY `id` DESC");
			
		
			
		while($row=mysqli_fetch_array($query)) {

			$id=$row['id'];
			$fname = $row['fname'];
			$surname = $row["surname"];
			$email = $row["email"];
			$password = $row["password"];
			$contact = $row["contact"];
		
			
	
			echo "
					 <tr>
				      <td>$fname $surname</td>
				      <td>$email</td>
				      <td>$password</td>
				      <td>$contact</td>
				      <td><a href=\"massage.php?id=$id&fnames=$fname\"><i class='fa fa-edit'></i></a></td>
				    </tr>				
			";
	
}
		?>	
				  </tbody>
				</table>	


		
	</div>
</div>