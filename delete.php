<?php
$connection=mysqli_connect("localhost","root","","xwisdom_tvet_school");
$dele=$_GET['y'];
$delete="DELETE FROM users WHERE User_id='$dele'";
$query=mysqli_query($connection,$delete);
if($query==1)
{
	include'display_trade.php';
}
else
{
	echo "data wos not deleted";
}
?>