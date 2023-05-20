<!DOCTYPE html>
<html>
<head>
	<title>Adminform</title>
	<style type="text/css">
		body{
			background-color: #20AFDB;
		}
		h1{
			background-color: #E153EB;
		}
		form{
			border : 2px solid black;
			height: 150Px;
			width: 25%;
      left: 500px;
      text-align: center;
			background-color: #928E8E;
			position: relative;
		}
		div{
			margin: 5px;
		}
       #footer{
       	
       	padding: 5px;
       	background-color: #D314E1;
       }
       
	</style>
</head>
<body>
	 <h1 align="center">Student's Information</h1>
   <h2 align="center">New users login </h2>
     <form  method="post" action="users.php">
     	  <h2 align="center">Add users</h2>
     	<div>
     	Name:
     	<input type="text" name="name"><br>
     	</div>
     	<div>
     	password:
     	<input type="password" name="password"><br>
     	</div>
     	<div>
     	<input type="submit" name="submit" value="submit"><br>
     	</div>
     </form>

     <div id="footer">
     </div>
</body>
</html>