<?php 

$conn=mysqli_connect("localhost","root","","employee");
if($conn==true)
{

	echo "Connected";
}
else
{

	echo "not Connected";
}

?>