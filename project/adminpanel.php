<!DOCTYPE>  
<html lang="en"> 
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
</head> 
<title>
	GEEKY SHOWS
</title>
<body>
<div class="jumbotron" style="background: url('img2.png') no-repeat; background-size: cover; height: 300px"></div>
<div class="container-fluid">
	<div class="row">
		
		<div class="col-md-3">
		<div class="list-group">
			<a href="" class="list-group-item active" style="background-color:#3498DB; color: #ffffff; border-color: #3498DB">Patients </a>
			<a href="patient_details.php" class="list-group-item ">Patient Details </a>
		
			<a href="" class="list-group-item ">Payment/Checkout </a>


		</div>
		<hr> 

		<div class="list-group">
			<a href="staff.php" class="list-group-item active" style="background-color:#3498DB; color: #ffffff; border-color: #3498DB>Staff </a>
			<a href="" class="list-group-item ">Staff</a>
            <a href="staff_details.php" class="list-group-item ">Staff Details </a>

			<a href="" class="list-group-item ">Add New Staff</a>
			<a href="" class="list-group-item ">Remove Staff Members </a>
      </div>
      </div>

 		<div class="col-md-8">
        <div class="card">
        	<div class="card-body" style="background-color:#3498DB; color: #ffffff;"></div>
        	<h3> Book an appointment </h3>
        	<div class="card-body">
        		<form class="form-group" action="func.php" method="POST" >
        		<label>First Name:</label>	
        		<input type="text" name="fname"class="form-control"><br>

        		<label>Last Name:</label>	
        		<input type="text" name="lname"class="form-control"><br>

        		<label>Email ID:</label>	
        		<input type="text" name="email"class="form-control"><br>

        		<label>Contact:</label>	 
        		<input type="text" name="contact"class="form-control"><br>

        		<label>Doctor Appointment:</label>
        		<select class="form-control" name="docapp">
        			<option value="Dr Sharma from 6pm to 8pm" >
        			Dr Sharma from 6pm to 8pm</option>
        			<option value="Dr Shetty from 4pm to 8pm" >
        			Dr Sharma from 4pm to 8pm</option>
        		</select><br>	
        		<input type="submit" class="btn btn-primary" name="pat_submit" value="Enter Appointment">



        			
        		</form>
        		










        	</div>
        </div>
          </div>

		<div class="col-md-1"></div>
    </div>
	</div> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>


</body>    
</html>