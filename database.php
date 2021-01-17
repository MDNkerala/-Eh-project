<?php
$connection=mysqli_connect('localhost','midhun','midhun@123','MDN') ;

if ($connection === false ){
	die("error".
mysqli_connect_error());

}
echo 'success'
?>
