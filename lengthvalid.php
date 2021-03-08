<?php
$x = "Joseph";
$checklength = strlen($x);

echo $checklength;

if ($checklength > 4) {
	# code...
	echo "wrong format only 4 characters allowed";
} else {
	echo "data valid";
}
?>