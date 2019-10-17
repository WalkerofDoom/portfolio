<?php
$con = mysqli_connect('localhost','root','','portfolio');
mysqli_set_charset($con, 'utf8');

if(!$con){
	echo "<pre>";
	echo mysqli_error();
	echo "</pre>";
}
