<?php
session_start();

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>LoginPage</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing:border-box;
        }
        
        a{
          text-decoration:none;
          color: wheat;
        }
        a:hover{color: white;}
        .login
        {
            width:50%;
            margin:auto;
            background: rgba(0, 0, 0,0.2);
            padding:2rem;
            border-radius:0.8rem;
        }
    </style>
  </head>
  <body>
   <section class="main-nav">
      <nav class="navbar navbar-light bg-dark p-3">
      <form class="container-fluid justify-content-start">
      <button class="btn btn-success me-2" type="button"><a href="firstpage.php">Home</a></button>
      <button class="btn btn-success me-2" type="button"><a href="register.php">Register</a></button>
      <button class="btn btn-success me-2" type="button"><a href="login.php">Login</a></button>
    </form>
    </nav>

    </div>

    <div class="login mt-5">
      <div>
      <form method="POST" action="logincheck.php">   
    <div class="input-group mb-3">
    <span class="input-group-text " id="addon-wrapping">Email</span>
    <input type="email" class="form-control" name="email" placeholder="Enter your full name" aria-label="Username" aria-describedby="addon-wrapping">
    </div> 
    <div class="input-group mb-3">
    <span class="input-group-text" id="addon-wrapping">Password</span>
    <input type="password" class="form-control" name="pass" placeholder="Enter your E-mail" aria-label="Username" aria-describedby="addon-wrapping">
    </div> 
    
    <div class="butt text-center mt-4"> 
    <input type="submit" class="btn btn-success" name="submit" value="Login"/>
    </div>
     </form>
      </div>

    </div>


   </section>

   
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  </body>
</html>