<?php
   session_start();
   if (isset($_SESSION['name'])&&isset($_SESSION['password'])){
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>display the record</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		  body{
      background-image: url(bg-image.jpg);
    }
      #button{
        background-color: #E153EB;
        position: relative;
        float: top;
        height: 30px;
        font-size: 20px;
        cursor: pointer;
        text-align: center;
      }      
      .div{
      	text-align: center;
      	font-size: 30px;
      	background-color: green;
      	height: 30px;
      }
</style>
</head>
<body>
	<h1 align="center">Student's Information</h1>   
	<div class="div" ><a href="display.php">record</a> of students</div>
	<div class="div"><a href="studentform.php">insert</a>New students</div>
  <div id="button"><button ><a href="logout.php">logout</a></button></div>
</body>
</html>
<?php
}
  else{
    header('location:index.php');
  }
  ?>
