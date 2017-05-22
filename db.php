<?php
$connect=mysqli_connect('localhost','root','','denovo');
 
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
 
?>