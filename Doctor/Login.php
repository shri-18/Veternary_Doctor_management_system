<!doctype html>
<html lang="en">
<?php
   $servername="localhost";
   $username="root";
   $password="";
   $database="veternarey";
   $conn=mysqli_connect($servername,$username,$password,$database);
   $success=false;
  //  if($conn)
  //  {
  //   echo "Connection was successful";
  //  }
  //  $sql="SELECT*FROM `note`";
  //  $result=mysqli_query($conn,$sql);
  //  $rows=mysqli_fetch_assoc($result);
  //  echo mysqli_num_rows($result);
   if($_SERVER["REQUEST_METHOD"]=="POST")
   {
    $username=$_POST["username"];
    $password=$_POST["password"];
    $sql="select * from login where username='$username' AND password='$password'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    if($num==1)
    {
       $success=true;
       session_start();
       $_SESSION['loggedin']=true;
       $_SESSION['username']=$username;
       header("location:Visits.php");
    }
    else{
        echo"Invalid Credentials";
    }
  }


?>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Doctors Choice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <div class="container-fluid">
    <a class="navbar-brand" href="Login.php">Doctors Choice</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/phpt/Doctor/Home.php">Home</a>
        </li>
    
      </ul>
     
    </div>
  </div>
</nav>
<?php
if($success)
{
    echo"<div class='success alert-success alert-dismissible fade show' role='success'>
    <strong>You are logged in Successfully!</strong> 
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
}
?>
<div class="container-md">
<div class="container my-4">
<form action="/phpt/Doctor/Login.php" method="post">
    <h2>Login Here</h2>
  <div class="mb-3 my-3">
    <label for="username" name="username" class="form-label">Username</label>
    <input type="text" name="username" class="form-control">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="password" name="password" class="form-lable">Password</label>
    <input type="password" name="password" class="form-control">
  </div>
  </div>
  <button type="submit" class="btn btn-primary">signin</button>
</form>
</body>
</html>