<?php
  session_start();
?>
<?php
   include 'connection.php';
   if(isset($_POST['submit'])) {

   	 $name=$_POST['name'];
    $_SESSION['name']=$name;
   	 $password=$_POST['password'];
      $_SESSION['password']=$password;
   	 $reg="/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%&*?\~]).{5,16}/";
   	 
   	 if (preg_match($reg, $password)) {

   	 	$q="INSERT INTO admin(name,password) VALUES ('$name','$password')";
   	 	$query=mysqli_query($connection,$q);
   	 	if ($query) {
        echo "<script> alert('new admin register'); </script>";
        header("location:studentform.php");
	     }
	    else {
		echo "<br>error".$query."<br>".mysqli_error($connection);
	   }  	 	
   	 }
   	 else {
           echo "password invalid";
   }
}
?>