<!DOCTYPE html>  
<html lang="en"> 

<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
</head> 
<title>
    Patient Details 
</title>
<body>
<?php
include("func.php");
if(isset($_POST['patient_search_submit']))
{
	$contact=$_POST['search'];
	$query="select * from doctorapp where contact='$contact' ";
	echo "<div class='container-fluid' style='margin-top:10px';>
	 <div class 'card'>
	 <div class='card-body'>
	 <a href='patient_details.php' class='btn btn-light'>Go Back</a></div>

	
	<img src='img2.png' class='card-img-top' style='background-size: cover; height: 350px;'> 



    <div class='card-body'
	style='background-color:#3498DB; color: #ffffff;'>

<table class='table table-hover' >
  <thead>
    <tr>
      
      <th scope='col'>First Name</th>
      <th scope='col'>Last Name</th>
      <th scope='col'>Email id</th>
     <th scope='col'>Contact</th>
     <th scope='col'>Doctor Appointment</th>

    </tr>
  </thead>
  <tbody>
 
";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{
	$fname=$row['fname'];
	$lname=$row['lname'];
	$email=$row['email'];
	$contact=$row['contact'];
	$docapp=$row['docapp'];
	echo "<tr>
	<td>$fname</td>
	<td>$lname</td>
	<td>$contact</td>
    <td>$email</td>
    <td>$docapp</td>
	";
}
echo"</tbody></table></div></div></div>";
}


?>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>


</body>    
</html>













