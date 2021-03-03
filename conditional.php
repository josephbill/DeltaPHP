	<?php
	// conditional statements 
	//if statement : if the condition true code gets executed 
	$x = "Joseph";
	$y = 20;
	if ($x == "Joseph") {
		# code...
		echo "the value is joseph <br>";
	}

	//if...else / else block will be executed if the condition is false 
	$z = 20;

	if ($z == 40) {
		# code...
		echo "true<br>";
	} else {
		echo "false<br>";
	}

	//if...elseif...else  / to set multiple conditions 
	$b = 100;
	if ($b == 20) {
		# code...
		echo "20<br>";
	} elseif ($b == 30) {
		# code...
		echo "30<br>";
	} elseif ($b == 50) {
		# code...
		echo "50<br>";
	} else {
		echo "number not in range<br>";
	}

	//switch

	$a = "100";

	switch ($a) {
		case '40':
			# code...
		    echo "allowed 40";
			break;
			case '43':
			# code...
			echo "allowed 43";
			break;
			case '45':
			# code...
			echo "allowed 45";
			break;
		
		default:
			# code...
		    echo "allowed 56";
			break;
	}



	$role = "teacher" ;

	switch ($role) {
			case 'student':
				# code...
			echo "dashboard student";
				break;

			case 'teacher' :
			header('Location: second.php');
		    break;

		    case 'admin':
		    	# code...
		    echo "dashboard admin";
		    	break;
		default:
			# code...
		    echo "guest view";
			break;
	}


	?>