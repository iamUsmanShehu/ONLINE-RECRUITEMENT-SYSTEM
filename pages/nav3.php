<style type="text/css">
	#mySidenav a {
    position: absolute;
    left: 0px;
    transition: 0.3s;
    padding: 15px;
    width: 150px;
    text-decoration: none;
    font-size: 15px;
    color: white;
    border-radius: 0 5px 5px 0;
    margin-top: 150px;
}

#mySidenav a:hover {
    left: 70;
}

#about {
    top: 20px;
    background-color: #0062cc;
}

#blog {
    top: 80px;
    background-color: #0062cc;
}

#projects {
    top: 140px;
    background-color: #0062cc;
}

#contact {
    top: 200px;
    background-color: #0062cc;
}
.container{
	    width: 70%!important;
}

</style>

<div id="mySidenav" class="sidenav">
  	<a href="../index.php" style="font-size: 20px;top:-50px;background: #0062cc;">C</a>
  <a href="Dashboard.php" id="about"><i class="fa fa-dashboard"></i> Dashboard</a>
  <a href="researved.php" id="blog"><i class="fa fa-user"></i> Reservations</a>
  <a href="signup.php" id="projects"><i class="fa fa-user-plus"></i> New User</a>
  <a href="signuptable.php" id="contact"><i class="fa fa-gear"></i> Manage Users</a>
  <a href="../index.php" style="color: maroon;top:260px;background: maroon;color:white;"><i class="fa fa-lock"></i> LogOut</a>
</div>