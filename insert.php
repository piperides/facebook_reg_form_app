<?php
	
	$con=mysqli_connect("10.169.0.25", "actiondi_kpiperi", "kpiperides2015!", "actiondi_kpiperi");
	mysqli_set_charset($con,"utf8");

		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }
	
	$q = "INSERT INTO fb_piperides (Name,Phone) VALUES ('".$_GET["Name"]."','".$_GET["Phone"]."')";
	$r = mysqli_query($con,$q);

	if ( !$r )
    {
    die("not added");
    }
	header("Location: https://webtodesigns.co/adchallenge/kpiperides/well _done.html");
	?>
