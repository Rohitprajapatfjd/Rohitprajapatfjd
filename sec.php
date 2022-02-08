 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link id="favicon" rel="icon" type="image/x-icon" href="android-chrome-192x192.png">
  <title>BrickofLp</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="movie/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="movie/bootstrap/js/bootstrap.js">
  <link rel="stylesheet" href="movie/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="">
  
  <style>
    body {
      height: 300px;
    }

    .rohit {
      display: flex;
      justify-content: center;
      align-items: center;
      padding-top: 10px;
    }

    body {
      background-color: aquamarine;
    }

    @media (max-width: 600px) {
      .ja {
        background-color: rgba(54, 14, 233, 0.904);
      }
    }

    .ri {
      margin-top: 100px;
      font-family: Georgia, 'Times New Roman', Times, serif;
      color: black;
    }
  </style>
</head>

<body>
  <nav class=" ja navbar sticky-top navbar-expand-sm navbar-dark bg-dark">

    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="android-chrome-192x192.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
        Brick 0f L.P</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Services
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <div class="roh p-2"> <button class="btn btn-outline-warning"> <a href="sec.php">
              Login</a></button></div>
      </div>
    </div>
  </nav>
  <?php
$_SERVER = "localhost";
$username = "root";
$password = "";
$database = "rohit";

$conn = mysqli_connect($_SERVER,$username,$password,$database);

if (isset($_POST['login'])) {
   $username = mysqli_real_escape_string($conn,$_POST['email']) ;
   $password = $_POST['pass'];
      
  
      $sql = "SELECT id, username, city FROM `brick` WHERE email = '$username' AND pass = '$password'";
     
     
   $result = mysqli_query($conn,$sql) or die("Query Failed.");
   

   if(mysqli_num_rows($result) > 0) {

      while ($rows = mysqli_fetch_assoc($result)) {
         session_start();
         $_SESSION["username"] = $rows['username'];
         $_SESSION["id"] = $rows['id'];
         $_SESSION["city"] = $rows['city'];

            
          
         header("location:index.html");
        
      }
      
   }
   else{
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Oops!</strong>Email or Password was wrong.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
   }

}

?>
<div class="container text-center rohit">
    <form action="" method="post" role ="form" class="my-5">
      <img class="mb-4" src="android-chrome-192x192.png" alt="" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">Please Login in</h1>

      <div class="form-floating">
        <input  type="email" class="form-control" id="email"  name="email" placeholder="Enter Your Email" required>
        <label for="email">Email</label>
      </div>
      <div class="form-floating">
        <input type="pass" class="form-control"  id="pass" placeholder="Password" name="pass" require>
        <label for="pass">Password</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <input class="w-100 btn btn-lg btn-primary " type="submit" name="login" value="login">
      <label for="login"></label>
    </form>
  </div>
  
  <div class=" ri text-center"> <b> © 2017–2023 Brick of L.P Company, Inc. All rights reserved</b></div>


 
</body>

</html>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>