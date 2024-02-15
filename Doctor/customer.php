<html>
<?php
   $servername="localhost";
   $username="root";
   $password="";
   $database="veternarey";
   $conn=mysqli_connect($servername,$username,$password,$database);
   $i=0;
   if($_SERVER["REQUEST_METHOD"]=="POST")
   {
   
    $FirstName=$_POST['name'];
    $LastName=$_POST['surname'];
    $contact=$_POST['phon'];
    $address=$_POST['address'];
    $message=$_POST['message'];
    $sql="INSERT INTO `records` (`first`, `last`,`phone`,`address`,`message`) VALUES ('$FirstName', '$LastName','$contact','$address','$message')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        $message = "Your Slot Booked Successfully!!!!!";
        echo "<script type='text/javascript'>alert('$message');</script>";	

    }
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
            <a class="navbar-brand" href="#">Doctors Choice</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="contact.php">Contact Us</a>
                    </li>

                </ul>
            </div>
    </nav>
    <div class="container my-4">
        <div class="container">
            <div class=" text-center mt-5 ">

                <h1>Book Your Slot</h1>


            </div>


            <div class="row ">
                <div class="col-lg-7 mx-auto">
                    <div class="card mt-2 mx-auto p-4 bg-light">
                        <div class="card-body bg-light">

                            <div class="container">
                                <form method="POST" action="/phpt/Doctor/customer.php">



                                    <div class="controls">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_name">Firstname *</label>
                                                    <input id="form_name" type="text" name="name" class="form-control"
                                                        placeholder="Please enter your firstname *" required="required"
                                                        data-error="Firstname is required.">

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_lastname">Lastname *</label>
                                                    <input id="form_lastname" type="text" name="surname"
                                                        class="form-control" placeholder="Please enter your lastname *"
                                                        required="required" data-error="Lastname is required.">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Phon</label>
                                                    <input name="phon" class="form-control"
                                                        placeholder="Please enter your phon number">

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_lastname">Address*</label>
                                                    <input id="form_lastname" type="text" name="address"
                                                        class="form-control"
                                                        placeholder="Please enter your contact info*"
                                                        required="required" data-error="Lastname is required.">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="form_message">Message *</label>
                                                    <textarea id="form_message" name="message" class="form-control"
                                                        placeholder="Write your Problem Here" rows="4"
                                                        required="required"
                                                        data-error="Please, leave us a message."></textarea>
                                                </div>

                                            </div>


                                            <div class="col-md-12">

                                                <input type="submit" class="btn btn-success btn-send  pt-2 btn-block
                            " value="Send Message">

                                            </div>

                                        </div>


                                    </div>
                                </form>
                            </div>
                        </div>


                    </div>
                    <!-- /.8 -->

                </div>
                <!-- /.row-->

            </div>
        </div>

    </div>

</html>