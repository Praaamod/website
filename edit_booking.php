<?php
include 'connection.php';
if(isset($_GET['submit']))
{
  $a=$_GET['id1'];
  $b=$_GET['fname'];
  $c=$_GET['lname'];
  $d=$_GET['address'];
  $e=$_GET['phone'];
  $f=$_GET['email'];
  $g=$_GET['number'];
  $query="update booking set first_name='$b', last_name='$c', address='$d', contact='$e', email='$f', nob='$g' where id='$a'";
  $run=mysqli_query($conn,$query);
  if($run)
  {
    header("location:update-reservation.php");
  }
  else
  {
    echo "<script>window.alert('Unable to update');</script>";
  }
  }
  else
  {
     header("location:view_post.php");
  }
mysqli_close($conn);

      ?>