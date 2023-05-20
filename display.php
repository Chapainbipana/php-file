 <?php
   session_start();
   if (isset($_SESSION['name'])&&isset($_SESSION['password'])) {
   
 ?>

  <!DOCTYPE html>
  <html>
  <head>
  	<title></title>
    <meta charset="utf-8">
    <meta name="viewport">
    <link rel="stylesheet" type="text/css" href="style.css">
  	<style type="text/css">
  		table,tr,th,td{
  			border: 1px solid black;
  			padding:3px;
        background-color: white;
  		}
      table{
        text-align: center;
        position: relative;
        left:250px;
      }
      button{
        position: relative;
      }
      #button{
        position: relative;
       float: right;
        right: 225px;
        margin: 0px;
        padding: 0px;
        text-align: center;
      }

   	</style>
  </head>
  <body>
    <h1 align="center">Student's Information</h1>
    <h1 align="center">display table data</h1>
    <div id="button"><button text-align:right><a href="logout.php">logout</a></button></div>
     
   <table>
   	   <tr>
        <th>Id</th>
   	   	<th>Name</th>
   	   	<th>College</th>
   	   	<th>Age</th>
   	   	<th>phone</th>
   	   	<th>gender</th>
   	   	<th>subject</th>
   	   	<th>course</th>
   	   	<th>image</th>
   	    <th>edit</th>
   	   	<th>delete</th>

   	   </tr>
   	   <?php
          include 'connection.php';
          $q="SELECT * FROM `student`";
          $result=mysqli_query($connection,$q);
          while ($res=mysqli_fetch_assoc($result)){   
  ?>
   	   <tr>
        <td><?php echo $res['id']; ?></td>
   	   	<td><?php echo $res['name']; ?></td>
   	   	<td><?php echo $res['collage'];?></td>
   	   	<td><?php echo $res['age']; ?></td>
   	   	<td><?php echo $res['phone'];?></td>
   	   	<td><?php echo $res['gender'];?></td>
   	   	<td><?php echo $res['subject'];?></td>
   	   	<td><?php echo $res['course'];?></td>
   	   	<td> <img src="<?php echo $res['image'];?>" height='100px' width='100px'></td>
        <td><button><a href="update.php?id=<?php echo $res['id'];?>">Edit</a></button></td>  
         <td><button><a href="delete.php?id=<?php echo $res['id'];?>">Delete</a></button></td> 	
   	   </tr>
   	   <?php 
   	   } ?>
   	   
   </table>
   <div id="footer"></div>
  </body>
  </html>
  <?php
}
  else{
    header('location:index.php');
  }
  ?>