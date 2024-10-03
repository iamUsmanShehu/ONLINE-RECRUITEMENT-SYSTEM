<?php session_start();
include("../dbconn.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Exam</title>
	<link rel="stylesheet" type="text/css" href="../css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<style type="text/css">
	body{
		background: #28a745;
	}
	body .container{
		box-shadow:0 15px 25px rgb(0,0,0,0.1);
		background-color: white;
		margin-top: 30px!important;
	}
	img{border: 3px solid white;}
<?php 
			$fname=$_SESSION["fname"];
			$surname=$_SESSION["surname"];
			$email=$_SESSION["email"];
			$gender=$_SESSION["gender"];
			$maritalstatus=$_SESSION["maritalstatus"];
			$contact=$_SESSION["contact"];
			$address=$_SESSION["address"];
			$image=$_SESSION["image"];
			$picture="<img src='uploaded_imgs/".$_SESSION["image"]."' width='55' height='55'>";
			
			

	$score = 'score';
	$score = (empty($_POST['submit'])) ? '0' : $score + 1;		 
	$Q1 = $_POST['Q1'];
	$Q2 = $_POST['Q2'];
	$Q3 = $_POST['Q3'];
	$Q4 = $_POST['Q4'];
	$Q5 = $_POST['Q5'];
	$Q6 = $_POST['Q6'];
	$Q7 = $_POST['Q7'];
	$Q8 = $_POST['Q8'];
	
	$Q_one = 'Q_one';
	$Q_two = 'Q_two';
	$Q_three = 'Q_three';
	$Q_four = 'Q_four';
	$Q_five = 'Q_five';
	$Q_six = 'Q_six';
	$Q_seven = 'Q_seven';
	$Q_eight = 'Q_eight';
	
	if ($Q1 == $Q_one) {
		$score + 1;
	}

?>
</style>
<body>
	<?php include("nav2.php"); ?>
	<div class="container">
		<b>My Score: <span class="badge badge-success" name='score' id="Score"><?php echo "$score"; ?></span> </b>
		<input type="submit" value=" i'm done!" name="">
		<?php echo "<center class='pull-right' class='img'>$picture </center>"; ?>
	</div>
	<div class="container">
		<form method="POST">
			<div class="row">
				<div class="col-md-6">
					<p><b name='Q1'>Q1: </b>What is the heighest level in the institution?</p>
					<p><input type="radio" name="Q_one">five (5)</p>
					<p><input type="radio" name="Q_one">eight (8)</p>
					<p><input type="radio" value="sixteen" name="Q_one">sixteen (16)</p>
					<p><input type="radio" name="Q_one">Ten (10)</p>

					<p><b name='Q2'>Q2: </b>Who is the current president of Nigeria?</p>
					<p><input type="radio" name="Q_two">Maryam</p>
					<p><input type="radio" name="Q_two">Muhammadu Buhari</p>
					<p><input type="radio" name="Q_two">Haruna</p>
					<p><input type="radio" name="Q_two">Atiku Abubakar</p>

					<p><b name='Q3'>Q3: </b>What is the heighest level in the institution?</p>
					<p><input type="radio" name="Q_three">five (5)</p>
					<p><input type="radio" name="Q_three">eight (8)</p>
					<p><input type="radio" name="Q_three">sixteen (16)</p>
					<p><input type="radio" name="Q_three">Ten (10)</p>

					<p><b name='Q4'>Q4: </b>Who is the current president of Nigeria?</p>
					<p><input type="radio" name="Q_four">Maryam</p>
					<p><input type="radio" name="Q_four">Muhammadu Buhari</p>
					<p><input type="radio" name="Q_four">Haruna</p>
					<p><input type="radio" name="Q_four">Atiku Abubakar</p>
				</div>
				<div class="col-md-6">
					<p><b name='Q5'>Q5: </b>What is the heighest level in the institution?</p>
					<p><input type="radio" name="Q_five">five (5)</p>
					<p><input type="radio" name="Q_five">eight (8)</p>
					<p><input type="radio" name="Q_five">sixteen (16)</p>
					<p><input type="radio" name="Q_five">Ten (10)</p>

					<p><b name='Q6'>Q6: </b>Who is the current president of Nigeria?</p>
					<p><input type="radio" name="six">Maryam</p>
					<p><input type="radio" name="six">Muhammadu Buhari</p>
					<p><input type="radio" name="six">Haruna</p>
					<p><input type="radio" name="six">Atiku Abubakar</p>

					<p><b name='Q7'>Q7: </b>What is the heighest level in the institution?</p>
					<p><input type="radio" name="Q_seven">five (5)</p>
					<p><input type="radio" name="Q_seven">eight (8)</p>
					<p><input type="radio" name="Q_seven">sixteen (16)</p>
					<p><input type="radio" name="Q_seven">Ten (10)</p>

					<p><b name='Q8'>Q8: </b>Who is the current president of Nigeria?</p>
					<p><input type="radio" name="Q_eight">Maryam</p>
					<p><input type="radio" name="Q_eight">Muhammadu Buhari</p>
					<p><input type="radio" name="Q_eight">Bola Ahmad Tinibu</p>
					<p><input type="radio" name="Q_eight">Atiku Abubakar</p>
				</div>
			</div>
		</form>
	</div>
</body>
</html>