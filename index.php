<!DOCTYPE html>
<html>
<head>
	<title>Adminform</title>
  <link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		form{
			border : 2px solid black;
			height: 200Px;
			width: 25%;
			background-color: #928E8E;
			left: 455px;
      text-align: center;
      position: relative;
		}
    div{
      height: 2px;
    }
		   
	</style>
</head>
<body>
	 <h1 align="center">Student's Information</h1>
     <form action="admin.php" method="post" >
     	  <h2 align="center">Admin</h2>

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
      	<div>
    	  new users<a href="login.php">login Here</a>
      	</div>
      </form>

     <div id="footer">
     </div>
</body>
</html>