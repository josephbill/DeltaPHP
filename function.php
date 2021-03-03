<?php  

function sumOfTwo($x,$y){
   echo $x + $y;
}



sumOfTwo(10,10);
echo "<br>";
sumOfTwo(20,10);

	function strictWith(int $a = 20, int $b = 30){
       echo $a + $b;
	}	


if (isset($_POST['save'])) {
	# code
     strictWith();

}


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <form action="function.php" method="post">
    		<button style="background-color: purple; color: white" name="save">Click me</button>


    </form>



</body>
</html>