<?php
  session_start();
  if ($_SESSION['name'] && $_SESSION['password']){  
?>

<?php  
include 'connection.php';
if (isset($_POST['done'])) {
	
$name=$_POST["name"];
$collage=$_POST["collage"];
$age=$_POST["age"];
$phone=$_POST["phone"];
$gender=$_POST["gender"];
$subject=$_POST["subject"];
$subject1 = implode(',', $subject);
$course=$_POST["course"];
$course1=implode(' ', $course);

foreach ($subject as $subvalue) {
	echo "$subvalue<br>";
}
foreach ($course as $cvalue) {
	echo "$cvalue<br>";
}

$image=$_FILES['image'];
$imagename=uniqid().$image['name'];

$imageerror=$image['error'];

$imagetemp=$image['tmp_name'];

$fileexec=explode('.', $imagename);
$filecheck=strtolower(end($fileexec));
$fileextstored=array("jpg","png","jpge");

	$destination = 'upload/'.$imagename;
	move_uploaded_file($imagetemp,$destination);
 
	$q= "INSERT INTO student(name, collage, age, phone, gender, subject, course, image) VALUES ('$name','$collage','$age','$phone','$gender','$subject1','$course1','$destination')";
	$query=mysqli_query($connection,$q);
	if ($query) {
      header("location:display.php");
	}
	else {
		echo "error".$query."<br>".mysqli_error($connection);
	}

  
}
?>
<?php
}
else{
     header('location:index.php');
  }
  ?>
