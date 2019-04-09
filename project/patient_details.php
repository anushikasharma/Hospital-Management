<!DOCTYPE html>  
<html lang="en"> 
<?php include("func.php");?>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
</head> 
<title>
    Patient Details 
</title>
<body>
<div class="jumbotron" style="background: url('img2.png') no-repeat; background-size: cover; height: 300px"></div>
<div class="container">
    <div class="card">
            <div class="card-body" style="background-color:#3498DB; color: #ffffff;">
                <div class="row">
                <div class="col-md-0">
                   <a href="adminpanel.php" class="btn btn-light">
                       Go Back
                   </a></div>
              <div class="col-md-3"><h3> Patient Details </h3></div>
              <div class="col-md-8">

         <form class="form-group" action="patient_search.php" method="POST">
             <div class="row">
                <div class ="col-md-10">
                    <input type="text" name="search" class="form-control"  placeholder="enter contact"></div>

                <div class="col-md-2">                    
                    <input type="submit" name="patient_search_submit" class="btn btn-light" value="search"></div></div>

            


         </form>








          </div>
       </div> </div>
           
            <div class="card-body" style="background-color:#3498DB; color: #ffffff;">

<table class="table table-hover" >
  <thead>
    <tr>
      
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email id</th>
     <th scope="col">Contact</th>
     <th scope="col">Doctor Appointment</th>

    </tr>
  </thead>
  <tbody>
    <?php get_patient_details(); ?>
  </tbody>
</table>





</div>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>


</body>    
</html>