<?php
   session_start();
   if ($_SESSION['name']&&$_SESSION['password']) {
   
 ?>
<?php
 include 'connection.php';

if (isset($_POST['submit'])) {
	
$name=$_POST["name"];
$collage=$_POST["collage"];
$age=$_POST["age"];
$phone=$_POST["phone"];
$subject=$_POST["subject"];
$subject1 = implode(',', $subject);
$course=$_POST["course"];
$course1=implode(' ', $course);
$id= $_GET['id'];
$q="UPDATE `student` SET `name`='$name',`collage`='$collage',`age`='$age',`phone`='$phone',`subject`='$subject1',`course`='$course1' WHERE 'id'='$id'";
 $query=mysqli_query($connection,$q);
 if ($query) {
 	header('location:display.php');
 }
 else{
 	echo"error";
 }


}
?>
<?php
}
else{
     header('location:index.php');
  }
  ?>