 <!--what the means of get and post method in html_entity_decode;-->




 <!doctype html>
 <html lang="en">

 <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

     <title>Form without Store Value</title>
 </head>

 <body>
     <!--Here I use navbar from boostrap-->
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <a class="navbar-brand" href="#">Form</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav mr-auto">
                 <li class="nav-item active">
                     <a class="nav-link" href="/Work/28_form.php">Home <span class="sr-only">(current)</span></a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="#">Link</a>
                 </li>
                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Dropdown
                     </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item" href="#">Action</a>
                         <a class="dropdown-item" href="#">Another action</a>
                         <div class="dropdown-divider"></div>
                         <a class="dropdown-item" href="#">Something else here</a>
                     </div>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                 </li>
             </ul>
             <form class="form-inline my-2 my-lg-0">
                 <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                 <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
             </form>
         </div>
     </nav>

     <?php
     // connection to database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "form";
            //  $conn = new mysqli($servername, $username, $password, $database);
            $conn = mysqli_connect($servername, $username, $password, $database);
            $name = "";  // initialize the variables with empty string
            $email = "";
            $des = "";
    
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $des = $_POST['des'];
    
             } 

            if (!$conn) {
                die("Sorry we failed to connect: " . mysqli_connect_error());
            } else {

                // submit these to a database query
                //  $sql = "INSERT INTO contacts (name, email, des) VALUES ('$name','$email','$des')";
                $sql = "INSERT INTO contacts (`Name`, `Email`, `Consern`, `JD`) VALUES ( '$name', '$email', '$des', current_timestamp())";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">success!
            <strong>Your Entry is Done.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
                } else {

                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">Error!
                <strong>Our Server Down! Try Again for sometimes!!!.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
                }
            }
       


   ?>
     <!--//submit to database-->




     <!--Form code start-->
     <div class="container mt-3">
         <form action="/work/28_form.php" method="post">
             <div class="form-group">
                 <label for="email">Name</label>
                 <input type="text" name="name" class="form-control" id="name" aria-describedby="name" placeholder="Enter name">
                 <small id="name" class="form-text text-muted">We'll never share your Name with anyone else.</small>
             </div>
             <div class="form-group">
                 <label for="email">Email address</label>
                 <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                 <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
             </div>

             <div class="form-group">
                 <label for="des">Descreption</label>
                 <textarea class="form-control" name="des" id="des" cols="30" rows="10"></textarea>
             </div>

             <button type="submit" class="btn btn-primary">Submit</button>
         </form>
     </div>

     <!-- Optional JavaScript -->
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
 </body>

 </html>