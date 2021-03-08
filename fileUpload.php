<!DOCTYPE html>
<html>
<head>
	<title>File Upload</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<div class="container" style="margin-top: 10px;">

		<form action="upload.php" method="post" enctype="multipart/form-data"> 
	   <label style="margin-bottom: 5px;">Enter Username</label> 
	   <input type="text" name="username" id="username" class="form-control">


	   <label style="margin-bottom: 5px;">Select Image</label> 
	   <input type="file" name="imageUpload" id="imageUpload" class="form-control">

	   <input type="submit" name="save" id="save" class="btn btn-success form-control">

		</form>




		
	</div>

</body>
</html>