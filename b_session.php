<?php
session_start();


//isset function to check whether the session were actually set 
if (isset($_SESSION['favColor']) && isset($_SESSION['favCar']) ) {
	# code...
	//retrieve session
	echo "Fav Color " . $_SESSION['favColor'] . "<br>";
		echo "Fav Car " . $_SESSION['favCar'];

}


?>