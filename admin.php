<?php
   session_start();
   ?>
<?php 
   include 'connection.php';
  if (isset($_POST['submit'])) {
  	$name = trim($_POST['name']);
  	$password = trim( $_POST['password']);
    $_SESSION['name']=$name;
    $_SESSION['password']=$password;
    $q = " SELECT * FROM `admin`"; 
      $query= mysqli_query($connection,$q);
      while( $res=mysqli_fetch_array($query))
      {
          if($res['name']==$name && $res['password']==$password )
          {
            header("location:record.php");
          }
      }
    }else{
      echo "enter the username and password ";
    }
?>	   
