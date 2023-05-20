<?php
   session_start();
   if ($_SESSION['name']&&$_SESSION['password']) {
   
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>students from</title>
	<meta charset="utf-8">
	<meta name="viewport">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		form{
			width: 43%;
			background-color: #EDEBEB;
			left:400px;
			position: relative;
		}
	</style>
</head>
<body> 
	<h1 align="center">Student's Information</h1>
	<h1 align="center">update the data</h2>
	<form action="updatesubmit.php" method="post" name="form" value="submit" >
	<fieldset>
		<legend>students forms</legend>
		<div>
		<label for="fname">Name:</label>
		<input type="text" name="name" id="fname" placeholder="kanya">
		<label for=fcollage>Collage</label>
		<input type="text"id="fcollage" name="collage"value="kanya">
		</div>
		<div>
		<label for="fage">Age:</label>
		<input type="number" name="age" id="fage" placeholder="20" autofocus >
		</div>
		<div>
		<lable for="fphone">Phone:</lable>
		<input type="number" name ="phone" id="fphone" placeholder="12345678910" >
		</div>
		<div class="style">
		<label for="fsubject">Subject</label><br>
		<input type="checkbox"id="fjava" name="subject[]" value="Java" >
		<label for="fjava">Java</label><br>
		<input type="checkbox" id="fweb" name="subject[]"value="web">
		<label for="fweb">Web</label>
		</div>
		<div>
		<label for="fcourse">Course:</label>
		<select name="course[]" id="fcourse">
		<optgroup placeholder="BIM">
			 <option value="BIM">BIM</option>
             <option value="BBS">BBS</option>
             <option value="BBA">BBA</option>
             <option value="BEd">BEd</option>
             <option value="BscIT">BscIT</option>
             <option value="BHM">BHM</option>
		</optgroup>
	</select>
   </div>
   <div>
   <input type="submit" value="submit" name="submit">
   <input type="reset" value="reset">
	</div>
</fieldset>
</form>
<div id="footer"></div>
</body>
</html>
<?php
}
else{
     header('location:index.php');
  }
  ?>