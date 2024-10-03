

<?php
 include("../dbconn.php");
 include("header.php"); ?>
<?php include("nav.php"); ?>
<?php session_start();

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
		$result = "<a style='color:green;'>successfully updated Please login again</a>";
		header("refresh:2; url='../login.php'");
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

img{border: 2px solid green;
	border-radius: 50px;}
</style>

<div class="container">
	<div class="row">
		<div class="col-md-2">
			<?php 
			$picture="<img src='uploaded_imgs/".$_SESSION["image"]."' width='100' height='100'>";
			echo("<br>");
			echo "<center class='img'>$picture </center>";

			 ?>
			 <a href="home.php" class="btn btn-primary btn-width">Home</a>
			<a href="updateprofile.php" class="btn btn-primary btn-width">Update Profile</a>
			<a href="apply.php" class="btn btn-primary btn-width">Apply</a>
			<a href="exam.php" class="btn btn-primary btn-width">Take a Test</a>
			<a href="../login.php" class="btn btn-primary btn-width">Logout</a>

		</div>
		<div class="col-md-10">
			
			<div class="container">
				<div style="padding: 20px;background: white; margin: 10px;margin-top: 60px;box-shadow: 0 15px 25px #ced4da;">
					<h3>Update Profile</h3>
					<?php if (isset($result)) echo "$result"; ?>
				<form method="POST" class="form-group" enctype="multipart/form-data">
					<div class="row">
						<div class="col">
							<input type="file" name="image" class="form-control .border" ><br>
						</div>
						<div class="col">
							<input type="text" name="gender" class="form-control .border" placeholder="Gender">
						</div>
					</div>

					<div class="row">
						<div class="col">
							<input type="text" name="maritalstatus" class="form-control .border" placeholder="Marital status">
						</div>
						<div class="col">
							<input type="text" name="contact" class="form-control .border" placeholder="Contact " >
						</div>
					</div>
					<br>
					<textarea type="text" name="address" class="form-control .border" placeholder=" Home address"></textarea><br>
					<input type="submit" name="" value="Update" class="form-control submit">
					<input type="hidden" name="id" Value="<?php echo $_SESSION['id'];?>">
				</form>

				</div>
			</div>

		</div>
		
		</div>
	</div>
</div>