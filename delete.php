<?php
   session_start();
   if ($_SESSION['name']&&$_SESSION['password']) {
   
 ?>

<?php
  include 'connection.php';
  $id=$_GET['id'];
  $q = "DELETE FROM `student` WHERE id=$id";
  $query=mysqli_query($connection,$q);
  if ($query) {
    header('location:display.php'); 
  }
  else{
  	echo "error".$query."<br>".mysqli_error($connection);
  }
?>
<?php
}
else{
     header('location:index.php');
  }
  ?>
