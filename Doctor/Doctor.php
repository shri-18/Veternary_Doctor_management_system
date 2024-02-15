<html>
<?php
   $servername="localhost";
   $username="root";
   $password="";
   $database="Doctor";
   $conn=mysqli_connect($servername,$username,$password,$database);
   $i=0;
   if($_SERVER["REQUEST_METHOD"]=="POST")
   {
    $i=$i+1;
    $FirstName=$_POST['FirstName'];
    $LastName=$_POST['LastName'];
    $contact=$_POST['contact'];
    $address=$_POST['address'];
    $sql="INSERT INTO `records` (`srno`,`first`, `last`,`phone`,`address`) VALUES ('$i','$FirstName', '$LastName','$contact','$address');";
    $result=mysqli_query($conn,$sql);
   }
   ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Doctors Choice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="Home.php">Doctors Choice</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/phpt/Doctor/Home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Visits.php">Visits</a>
                    </li>
                    








                </ul>
            </div>
    </nav>
    <div class="container my-4">
        <form action="/phpt/Doctor/customer.php" method="post">
            <h2>Book Your Slot Here</h2>
            <div class="mb-3 my-3">
                <label for="FirstName" name="FirstName" class="form-label">First Name</label>
                <input type="text" name="FirstName" class="form-control">
                <div id="firstname" class="form-text"></div>
            </div>
            <div class="mb-3 my-3">
                <label for="LastName" name="LastName" class="form-label">Last Name</label>
                <input type="text" name="LastName" class="form-control">
                <div id="lastname" class="form-text"></div>
            </div>

            <div class="mb-3 my-3">
                <label for="contacte" name="contact" class="form-label">Contact Number</label>
                <input type="text" name="contact" class="form-control">
                <div id="contact" class="form-text"></div>
            </div>
            <div class="mb-3 my-3">
                <label for="address" name="address" class="form-label">Address</label>
                <input type="text" name="address" class="form-control">
                <div id="address" class="form-text"></div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</html>