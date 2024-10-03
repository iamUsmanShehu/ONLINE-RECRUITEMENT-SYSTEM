<!DOCTYPE html>
<html>
<head>

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

img{border: 2px solid green;
	border-radius: 50px;}
table {
	width: 100%;
    border: 1px solid rgb(0 0 0 / 8%);
}
.col{color: rgb(40 167 69);}
.submit{
	background: #28a745!important;
	color: white;
}
.s{width: 100px!important;}
textarea{height: 200px!important;}
.styl{
	box-shadow: 1px 0px 4px 1px #ced4da;
}
</style>
<link rel="stylesheet" type="text/css" href="js/summernote-bs4.css">
<link rel="stylesheet" type="text/css" href="js/bootstrap.css">

<div class="container">
	<div class="row">
		<div class="col-md-2">
			<?php 

			$surname=$_SESSION["surname"];
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
				<div style="padding: 20px;background: white; margin: 10px;margin-top: 10px;box-shadow: 0px 0px 25px #ced4da;border-radius: 30px;">
					<h3>Job Application Form</h3>
				<form method="POST" class="form-group" enctype="multipart/form-data">
					<div class="row">
						<div class="col">
							<select type="text" name="" class="form-control .border styl">
								<option>Select Position...</option>
								<option>Exam officer</option>
								<option>Lecturer</option>
								<option>Security</option>
								<option>Cleaner</option>
								<option>Scretary</option>
								<option>Gurdner</option>
								<option>Store Keeper</option>
							</select> <br>
						</div>
					</div>
					<table>
						<th><input type="hidden" disabled class="form-control .border" ></th><th><input type="hidden" disabled class="form-control .border" ></th><th class="s"><input type="hidden" disabled class="form-control .border" ></th><th class="s"><input type="hidden" disabled class="form-control .border" ></th>
						<tr>
								<td>
									School:
									<input type="text" name="" class="form-control .border" placeholder="School name" >
								</td>
								<td >
									Certification Type
									<select type="text" name="" class="form-control .border">
										<option>Select Certification...</option>
										<option>Primary</option>
										<option>Secondary</option>
										<option>National Diploma</option>
										<option>Diploma</option>
										<option>Bsc</option>
										<option>Other</option>
									</select>
								</td>
								<td >

									From:<input type="text" name="" class="form-control .border "  placeholder="" >
								</td>
								<td>
									To:<input type="text" name="" class="form-control .border "  placeholder="" >
								</td>
						</tr>
						<tr>
								<td>
									School:
									<input type="text" name="" class="form-control .border" placeholder="School name" >
								</td>
								<td >
									Certification Type
									<select type="text" name="" class="form-control .border">
										<option>Select Certification...</option>
										<option>Primary</option>
										<option>Secondary</option>
										<option>National Diploma</option>
										<option>Diploma</option>
										<option>Bsc</option>
										<option>Other</option>
									</select>
								</td>
								<td >

									From:<input type="text" name="" class="form-control .border "  placeholder="" >
								</td>
								<td>
									To:<input type="text" name="" class="form-control .border "  placeholder="" >
								</td>
						</tr>
						<tr>
								<td>
									School:
									<input type="text" name="" class="form-control .border" placeholder="School name" >
								</td>
								<td >
									Certification Type
									<select type="text" name="" class="form-control .border">
										<option>Select Certification...</option>
										<option>Primary</option>
										<option>Secondary</option>
										<option>National Diploma</option>
										<option>Diploma</option>
										<option>Bsc</option>
										<option>Other</option>
									</select>
								</td>
								<td >

									From:<input type="text" name="" class="form-control .border "  placeholder="" >
								</td>
								<td>
									To:<input type="text" name="" class="form-control .border "  placeholder="" >
								</td>
						</tr>
						<tr>
								<td>
									School:
									<input type="text" name="" class="form-control .border" placeholder="School name" >
								</td>
								<td >
									Certification Type
									<select type="text" name="" class="form-control .border">
										<option>Select Certification...</option>
										<option>Primary</option>
										<option>Secondary</option>
										<option>National Diploma</option>
										<option>Diploma</option>
										<option>Bsc</option>
										<option>Other</option>
									</select>
								</td>
								<td >

									From:<input type="text" name="" class="form-control .border "  placeholder="" >
								</td>
								<td>
									To:<input type="text" name="" class="form-control .border "  placeholder="" >
								</td>
						</tr>
						<tr>
								<td colspan="4">
									Cover Letter
									<textarea id="summernote" type="text" name="address" class="form-control .border" placeholder=" Cover Letter...."></textarea>
								</td>
						</tr>
					</table>

					<input type="submit" name="" value="Apply Now" class="btn submit">
					<input type="hidden" name="id" Value="<?php echo $_SESSION['id'];?>">
				</form>

				</div>
			</div>

		</div>
		
		</div>
	</div>
</div>
<script src="js/jquery-2.1.4.js" ></script>
<script src="js/popper.min.js" ></script>
<script src="js/bootstrap.min.js" ></script>
<script src="js/summernote-bs4.js" ></script>
  
  <script>
  	//$('#summernote').summernote();
</script>