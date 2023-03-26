<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" lang="en"/>
    <link rel="stlyesheet" type="text/css" href="style.css">
	<title>Form</title>
    <link rel="stylesheet" type="text/css" href="stylereg.css " />
</head>
<body>



	<div class="x">
    	<h1 id ="h1">Student Enrollment Form</h1>
	</div>
    <div class="y">
	<from action="#" method="POST">	
		<br>
	<label class="mar">Name</label>
		<input class="border" type="Text" name ="nm" id ="nm" required=""/>
        </br>
        </br>
		
	<label class="mar">Email</label>
		<input type="email" class="border" name ="email" id ="email" required=""/>
        </br>
        </br>

    <label class="mar">Website</label>
		<input type="Text" name ="web" class="border" id ="web" required=""/>
        </br> 
        </br>

    <label class="mar">Image URL</label>
		<input type="Text" name ="iurl" id ="iurl" class="border"  required=""/>
        </br>
        </br>

	<label class="marg">Gender</label>
		<input type="radio" class="marm1" name ="gender" id ="male" checked="checked"/><label class="">Male</label></br>
		
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<input type="radio" class="marm2" name ="gender" id ="female" /><label class="">Female</label>
        </br>
		</br>

	<label class="mar">Skills</label>&nbsp&nbsp
		<input type="Checkbox" name ="cb" id ="JAVA" required="" checked="checked"/><label>JAVA</label>&nbsp&nbsp
		<input type="Checkbox" name ="cb" id ="HTML"/><label>HTML</label>&nbsp&nbsp
		<input type="Checkbox" name ="cb" id ="CSS"/><label>CSS</label>&nbsp&nbsp&nbsp&nbsp
			</br>
			
		</br>
	</br>
		<input type="submit"  value ="Enroll Student"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<input type="button" value="Clear"  /> 
        </div>
        </form>

		<div class ="z">
        <h3>Enrolled Students</h3>
			<div>
				<p>hello</p>
				<p>hello</p>
				</div>
       </div>  
	 <?php
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// 	$nm = $_POST["nm"];
	// 	$email = $_POST["email"];
	// 	$web = $_POST["web"];
	// 	$iurl = $_POST["iurl"];

	// 	echo "<h2>Registration Details:</h2>";
	// 	echo "<p>name: " . $nm . "</p>";
	// 	echo "<p>email: " . $email . "</p>";
	// 	echo "<p>web: " . $seb . "</p>";
	// 	echo "<p>iurl: " . $iurl . "</p>";
	// }
	?>  
	
<?php

if(isset($_POST['submit']))
{
	$name=$_POST['nm'];
	$dep=$_POST['email'];
	$co=$_POST['web'];
	$e=$_POST['iurl'];
	 $ps=$_POST['gender'];
	// $add=$_POST['company_address'];
	$det=$_POST['cb'];
	// $mdps=md5($ps);
	$cn=mysqli_connect("localhost:3306","root","","lgm_reg");
	$db=mysqli_select_db($cn,"lgm_reg");
	$q="insert into register values('','$name','$dep','$co','$e','$ps','$det')";
	$a=mysqli_query($cn,$q);
	
	if($a) {
		echo "<script>alert('Data Inserted Successfully.'); window.location = 'http://localhost/vcc/user/companylogin.php';</script>";
	} 
	else {
		echo "<script>alert('Some Error Occured, Please try again...')</script>";
	}
}

?>

	</body>
</html>
