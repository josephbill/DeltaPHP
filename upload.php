<?php
//variable to store path to folder for uploads 
$target_dir = "uploads/";
//variable to store the path of the file
$target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);
//getting extension of file 
$imageType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$username  = '';
$fileToUpload = '';
$uploadOk = 1;


//capturing and displaying users input 
//check if the submit button has been clicked 
if (isset($_POST["save"])) {
	# code...
	$username = $_POST["username"];
	$fileToUpload = $_FILES["imageUpload"]["tmp_name"];
	$check = getimagesize($fileToUpload);

	if (!$check === false) {
		# code...
		    echo "File is an image - " . $check["mime"] . "<br>";
		    $uploadOk = 1;
		    echo $username;
	} else {
		echo "file was not uploaded";
		$uploadOk = 0;
	} 
    
}

//move file to folder 
  if ($uploadOk == 0) {
  	# code...
  	echo "file cannot be uploaded";
  } else {
  	if (move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $target_file)) {
  		# code...
  		echo "Image has been uploaded";
  	} else {
  		echo "Image has not been uploaded";
  	}
  }




?>