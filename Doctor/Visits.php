<html>
<?php
   $servername="localhost";
   $username="root";
   $password="";
   $database="veternarey";
   $conn=mysqli_connect($servername,$username,$password,$database);
   // get id through query string


    // get id through query string

// $del = mysqli_query($db,"delete from records where srno = '$id'"); // delete query

// if($del)
// {
//     mysqli_close($db); // Close connection
//     header("location:all_records.php"); // redirects to all records page
//     exit;	
// }
// else
// {
//     echo "Error deleting record"; // display error message if not delete
// }
if($_SERVER["REQUEST_METHOD"]=="POST")
   {
    
   }

   ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Doctors Choice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        
        <style>
            body{
               background-color: black;
            }
            </style>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="Visits.php">Doctors Choice</a>
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
    <table class="table table-light table-borderless my-4 mx-4">

        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Contact</th>
                <th scope="col">Address</th>
                <th scope="col">Problem</th>
                <th scope="col">Visited</th>
            </tr>
            <?php
           $sql="SELECT * FROM records";
           $result=mysqli_query($conn,$sql);
           while($row=mysqli_fetch_assoc($result)) // fetch data from database
            //  $name=$row['first'];

{
     echo  ' <tbody>
            <tr>
                <th scope="row">'.$row['first'].'</th>
                <td>'.$row['phone'].'</td>
                <td>'.$row['address'].'</td>
                <td>'.$row['message'].'</td>
                <td><form action="/phpt/Doctor/Delete.php?name='.$row['first'].'" method="POST"><input type="hidden" name="id" ><input type="submit" class="btn btn-sm btn-danger"
                name="submit" value="Delete"></form></td>

            </tr>
            </tbody>';
}
            ?>
        </thead>
    </table>

</html>