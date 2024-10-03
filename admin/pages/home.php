

<?php include("header.php"); ?>
<?php include("nav.php"); ?>
<?php session_start();
include("../../dbconn.php");

if(isset($_POST['address'])){
	$gender = $_POST['gender'];
	$maritalstatus = $_POST["maritalstatus"];
	$contact = $_POST["contact"];
	$address = $_POST["address"];
	$id = $_SESSION["id"];
	$image = $_FILES['image']['name'];
	$result =[];
		mysqli_query($connect, "UPDATE applicants_tbl SET gender='$gender', maritalstatus='$maritalstatus', contact='$contact',address='$address',image='$image'  WHERE id='$id'");


		$msg = "";
		if ($_FILES['image']['error'] == 0) {
			$image = $_FILES['image']['name'];
			$target = "uploaded_imgs/".basename($image);
			if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
				
			}else{
				
			}
		}
		$result = "success";
	}else{
		$result = "Problem";
	}
 ?>
<style type="text/css">
	body{
		margin:0;
	}
	
	
	.btn-width{width:95%; margin-top: 20px;}
	

.col-md-2{

 			  box-shadow:0 15px 25px rgb(0,0,0,0.1);
 			  
}
.col-md-10{box-shadow:0 15px 25px rgb(0,0,0,0.1);}

img{border: 2px solid #040434;
	border-radius: 50px;}
table {
    border: 1px solid rgb(0 0 0 / 8%);
}
.btn-width{width:95%; margin-top: 20px;background: #040434;}
.col{color: #040434;}
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
		</div>
		<div class="col-md-10">
			
			<div class="container" style="margin-top: 40px;color: black;">
				<table border="1"cellpadding='20'>
					<tr>
						<td class="col">Name: <b><?php echo "$fname $surname";?></b></td>
						<td colspan='2' class="col">Email: <b><?php echo "$email";?></b></td>
						
					</tr>
					<tr>
						<td class="col">Gender: <b><?php echo "$gender";?></b></td>
						<td class="col">________________________________Contact <b><?php echo "$contact";?></b></td>
						<td class="col">________________________________MaritalStatus: <b><?php echo "$maritalstatus";?></b></td>
						
					</tr>
					<tr>
						<td colspan='3' class="col">Address: <b><?php echo "$address";?></b></td>
					</tr>
				</table>
			</div>

		</div>
		
		</div>
	</div>
</div>