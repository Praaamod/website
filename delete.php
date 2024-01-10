<?php
include 'connection.php';
if(isset($_GET['Del']))
{
$bookingid=$_GET['Del'];
$query3="delete from booking where id='".$bookingid."'";
$run=mysqli_query($conn,$query3);
if($run)
{
	header("location:update-reservation.php");
}
else
{
	echo "<script><?php echo 'Not deleted' ?></script>";
}
}
mysqli_close($conn);
?>