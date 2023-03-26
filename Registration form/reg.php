<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" lang="en"/>
    <link rel="stlyesheet" type="text/css" href="style.css">
	<title>Form</title>
    
</head>
<body>

    <h1 id ="h1">Student Enrollment Form</h1>
    <div class="reg">
	<from action="#" method="POST">	

	<label>Name:</label>
		<input type="Text" name ="nm" id ="nm" required=""/>
        </br>
        </br>
		
	<label>Email:</label>
		<input type="email" name ="email" id ="email" required=""/>
        </br>
        </br>

    <label>Website:</label>
		<input type="Text" name ="web" id ="web" required=""/>
        </br>
        </br>

    <label>Image URL</label>
		<input type="Text" name ="iurl" id ="iurl" required=""/>
        </br>
        </br>

	<label>Gender:</label>
		<input type="radio" name ="gender" id ="male" checked="checked"/><label>Male</label></br>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" name ="gender" id ="female" /><label>Female</label>
        </br>
		</br>

	<label>Skills:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<input type="Checkbox" name ="JAVA" id ="JAVA" required="" checked="checked"/><label>JAVA</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<input type="Checkbox" name ="HTML" id ="HTML"/><label>HTML</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<input type="Checkbox" name ="CSS" id ="CSS"/><label>CSS</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		</br>
		</br>
		<input type="button"  value ="Enroll Student"/>
		<input type="button" value="Clear"  /> 
        </div>
       

       <div class ="dis">
        <h3>Enrolled Students</h3>
        <table border="1">
            <tr>
                <td>
                    <h5>Descreption</h5>
                </td>
                <td>
                    <h5>image</h5>
                </td>
            </tr>
        </table>    
       </div> 
	<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$nm = $_POST["nm"];
		$email = $_POST["email"];
		$web = $_POST["web"];
		$iurl = $_POST["iurl"];

		echo "<h2>Registration Details:</h2>";
		echo "<p>name: " . $nm . "</p>";
		echo "<p>email: " . $email . "</p>";
		echo "<p>web: " . $seb . "</p>";
		echo "<p>iurl: " . $iurl . "</p>";
	}
	?>
	</form>
	</body>
</html>
