<?php
   $servername="localhost";
   $username="root";
   $password="";
   $database="veternarey";
   $conn=mysqli_connect($servername,$username,$password,$database);
   $name= $_GET['name'];
   // get id through query string
 $sql="delete from records where first='$name'";
 $del = mysqli_query($conn,$sql); // delete query

if($del)
{
  $message = "Your Visit is successful And Record deleted successfully!!!!!";
                echo "<script type='text/javascript'>alert('$message');</script>";	

}
else
{
  $message = "Data is not deleted //Try Again!!!!!";
  echo "<script type='text/javascript'>alert('$message');</script>";	

}
   ?>