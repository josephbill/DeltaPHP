<?php
//define variables to store user input 
$patientName = $patientEmail = $patientDep = $patientInsurance = '';
//define variables t store the error message incase a validation is not met 
$patientNameErr = $patientEmailErr = $patientDepErr = $patientInsuranceErr = '';


//isset function to check whether the submit button has been clicked 
if (isset($_POST['save'])) {
	# code...
    //check for validation 
    if (empty($_POST['patientName'])) {
    	# code...
    	$patientNameErr = "Patient name is required";
    } else {
    	$patientName = $_POST['patientName'];
    	   if (!preg_match("/^[a-zA-Z-' ]*$/",$patientName)) {
          $patientNameErr = "Only letters and white space allowed";
        }
    }

    

        if (empty($_POST['patientDep'])) {
    	# code...
    	$patientDepErr = "Patient visting Department is required";
    } else {
    	$patientDep = $_POST['patientDep'];
    }

        if (empty($_POST['patientInsurance'])) {
    	# code...
    	$patientInsuranceErr = "Patient Insurance cover is required";
    } else {
    	$patientInsurance = $_POST['patientInsurance'];
    }

        if (empty($_POST['patientEmail'])) {
    	# code...
    	$patientEmailErr = "Patient Email is required";
    } else {
    	$patientEmail = $_POST['patientEmail'];
    }




}


    if (!empty($patientNameErr) || !empty($patientEmailErr) || !empty($patientDepErr) || !empty($patientInsuranceErr) ) {
    	# code...
    	echo "submission failed check form details";
    } else {
    	echo "Patient Name " . $patientName . "<br>";
       	echo "Patient Email " . $patientEmail . "<br>";
    	echo "Visting Department " . $patientDep . "<br>";
    	echo "Patient Insurance cover  " . $patientInsurance . "<br>";


    }



?>



<!DOCTYPE html>
<html>
<head>
	<title>Form Handling</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">


</head>
<body>
     <br><br>
	 <div class="container">
	 	<h3 class="page-header" id="heading">FORM HANDLING</h3>
	 	<hr>
	 	<form action="form.php" method="post"> 
	 		<div class="row form-group">
	 			<div class="col">
	 				<input type="text" name="patientName" id="patientName" placeholder="Enter Patients Name" class="form-control">
	 				<p id="errorPara"><?php echo $patientNameErr; ?></p>

	 			</div>
	 			<div class="col">
	 				<input type="email" name="patientEmail" id="patientEmail" placeholder="Enter Patients Email" class="form-control">
	 					 				<p id="errorPara"><?php echo $patientEmailErr; ?></p>

	 			</div>
	 		</div>
	 		<div class="row form-group">
	 			<div class="col">
	 				<select name="patientDep" id="patientDep" class="form-control">
	 					<option>Select Department</option>
	 					<option value="Dental">Dental</option>
	 					<option value="General">General</option>
	 					<option value="Pharmacy">Pharmacy</option>
	 				</select>
	 					 				<p id="errorPara"><?php echo $patientDepErr; ?></p>

	 			</div>
	 			<div class="col">
	 				<select name="patientInsurance" id="patientInsurance" class="form-control">
	 					<option> Select Insurance</option>
	 					<option value="Minet Kenya">Minet Kenya</option>
	 					<option value="NHIF">NHIF</option>
	 				</select>
	 					 				<p id="errorPara"><?php echo $patientInsuranceErr; ?></p>

	 			</div>
	 		</div>
	 		<div class="row form-group">
	 			<div class="col">
	 				<input type="submit" name="save" class="btn btn-success btn-block" value="Upload New Patient">
	 			</div>
	 			<div class="col">
	 	            <input type="reset"   class="btn btn-danger btn-block" value="Reset Form">			
	 			</div>
	 		</div>
	 	</form>
	 </div>


     <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
     <script type="text/javascript" src="bootstrap/js/bootstrap,min.js"></script>
     <script type="text/javascript" src="js/style.js"></script>

</body>
</html>