


<!DOCTYPE>  
<html lang="en"> 
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
</head> 
<title>

</title>
<body>

 <?php
$con=mysqli_connect("localhost","root","","hmsdb");
if (isset($_POST['login_submit'])) {
$username=$_POST['username'];
$password=$_POST['password'];	

$query="select * from logintb where username='$username' and password='$password' ";
$result=mysqli_query($con,$query);
if (mysqli_num_rows($result)==1) {
header("Location:adminpanel.php");
}
else{
//header("Location:index.php");
	echo "<script>alert('Error Login.' )</script>";
	echo "<script>window.open('index.php','_self')</script>";



}
}

if(isset($_POST['pat_submit'])) {
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$docapp=$_POST['docapp'];
    $query="insert into doctorapp(fname,lname,email,contact,docapp)values('$fname','$lname','$email','$contact','$docapp')";
    $result=mysqli_query($con,$query);
    if($result)
    {
    	echo "<script> alert('Appointment registered')</script>";
    	echo "<script>window.open('adminpanel.php','_self')</script>";
    }

}
function get_patient_details(){
global $con;
$query="select * from doctorapp";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result)){
		$fname=$row['fname'];
	$lname=$row['lname'];
	$email=$row['email'];
	$contact=$row['contact'];
	$docapp=$row['docapp'];
	echo"<tr>
      
      <td>$fname</td>
      <td>$lname</td>
      <td>$email</td>
      <td>$contact</td>
      <td>$docapp</td>
    </tr>";
}
}










?>


</body>    
</html>