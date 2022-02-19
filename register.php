<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Registerpage</title>
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
        .registration
        {
            width:50%;
            margin:auto;
            background: rgba(0, 0, 0,0.2);
            padding:2rem;
            border-radius:2rem;
        }
       
        
</style>
  </head>
  <body>
   <section class="main-nav col-xl-12">
      <nav class="navbar navbar-light bg-dark p-3">
      <form class="container-fluid justify-content-start">
      <button class="btn btn-success me-2" type="button"><a href="firstpage.php">Home</a></button>
      <button class="btn btn-success me-2" type="button"><a href="register.php">Register</a></button>
      <button class="btn btn-success me-2" type="button"><a href="login.php">Login</a></button>
    </form>
    </nav>
     <div class="registration mt-5">
     <div class="back">
     <form id="fid" method="POST" action="register1.php">   
    <div class="input-group mb-3">
    <span class="input-group-text " id="addon-wrapping">Name</span>
<input type="text" class="form-control" name="username" id="username" placeholder="Enter your full name"
 aria-label="Username" aria-describedby="addon-wrapping" autocomplete="off">
    </div> 
    <span id="f1" class="text-danger"></span>
    <div class="input-group mb-3">
    <span class="input-group-text" id="addon-wrapping">Email</span>
    <input type="email" class="form-control" name="email" id="email" placeholder="Enter your E-mail" 
    aria-label="Username" aria-describedby="addon-wrapping" autocomplete="off">
    </div> 
    <span id="f2" class="text-danger"></span>

    <div class="input-group mb-3">
    <span class="input-group-text" id="addon-wrapping">Age</span>
    <input type="number" class="form-control" name="age" id="age" placeholder="Enter Your age" aria-label="Username" aria-describedby="addon-wrapping" autocomplete="off">
    </div> 
    <span id="f3" class="text-danger"></span>

    <div class="input-group mb-3">
    <span class="input-group-text" id="addon-wrapping">Salary</span>
    <input type="text" class="form-control" name="salary" id="salary" placeholder="Enter your Salary" aria-label="Username" aria-describedby="addon-wrapping" autocomplete="off">
    </div> 
    <span id="f4" class="text-danger"></span>

    <div class="input-group mb-3">
    <span class="input-group-text" id="addon-wrapping">Password</span>
    <input type="password" class="form-control" name="pass" id="pass" placeholder="Password" aria-label="Username" aria-describedby="addon-wrapping" autocomplete="off">
    </div>
    <span id="f5" class="text-danger"></span>
 
    <div class="input-group mb-3">
    <span class="input-group-text" id="addon-wrapping">Confirm Password</span>
    <input type="password" class="form-control" name="cpass" id="cpass" placeholder="Password should be same" aria-label="Username" aria-describedby="addon-wrapping" autocomplete="off">
    </div>
    <span id="f6" class="text-danger"></span>

    <div class="butt text-center mt-4"> 
    <input type="submit" name="submit" class="btn btn-success" value="registration" id="info">
    </div>
     </form>
    </div>


    </div>

   </section>


<script type="text/javascript">

  $(document).ready(function(){

    $("#f1").hide();
    $("#f2").hide();
    $("#f3").hide();
    $("#f4").hide();
    $("#f5").hide();
    $("#f6").hide();

    var error_fname = true;
    var error_email = true;
    var error_age = true;
    var error_salary = true;
    var error_password = true;
    var error_cpassword = true;


  $("#username").keyup(function(){
            check_fname();
         });

  $("#email").keyup(function(){
            check_email();
         });

  $("#age").keyup(function(){
            check_age();
      });
  $("#salary").keyup(function(){
            check_salary();
      }); 

  $("#pass").keyup(function(){
            check_pass();
      });       
      $("#cpass").keyup(function(){
            check_cpass();
      }); 


         function check_fname()
         {
           var getname =$('#username').val()
           var pattern = /^[a-zA-Z][a-zA-Z\s]+$/;
           if(getname.length=="")
           {
             $('#f1').show();
             $('#f1').html("Name is required");
             $('#f1').focus();
             error_fname=false;
             return false;
           }
           else
           {
            $('#f1').hide();
           }
           if(!pattern.test(getname))
           {
            $('#f1').show();
             $('#f1').html("Name is invalid");
             $('#f1').focus();
             error_fname=false;
             return false;
           }else
           {
            $('#f1').hide();

           }
           if((getname.length<3)||(getname.length>20))
           {
             $('#f1').show();
             $('#f1').html("Name should be between 3 to 20 alphabets");
             $('#f1').focus();
             error_fname=false;
             return false;
           }
           else
           {
            $('#f1').hide();
           }
      }
      function check_email()
         {
          var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
           var getmail =$('#email').val()
           if(getmail.length=="")
           {
             $('#f2').show();
             $('#f2').html("please inter your mail");
             $('#f2').focus();
             error_email=false;
             return false;
           }
           else
           {
            $('#f2').hide();
           }
           if(!pattern.test(getmail))
           {
            $('#f2').show();
             $('#f2').html("Invalid email-id ");
             $('#f2').focus();
             error_email=false;
             return false;
           }
         }

         function check_age()
         {
           var getage =$('#age').val()
           if(getage.length=="")
           {
             $('#f3').show();
             $('#f3').html("Age Required");
             $('#f3').focus();
             error_age=false;
             return false;
           }
           else
           {
            $('#f3').hide();
           }
           if(getage.length>2)
           {
             $('#f3').show();
             $('#f3').html("In-valid age");
             $('#f3').focus();
             error_age=false;
             return false;
           }
           else
           {
            $('#f3').hide();
           }
         }

         function check_salary()
         {
           var getsal =$('#salary').val()
           if(getsal.length=="")
           {
             $('#f4').show();
             $('#f4').html("Salary Required");
             $('#f4').focus();
             error_salary=false;
             return false;
           }
           else
           {
            $('#f4').hide();
           }
         }
  
    
         function check_pass()
         {
           var pattern =/^[a-zA-Z0-9!@#$%^&*]{6,16}$/;
           var getpass =$('#pass').val()
           if(getpass.length=="")
           {
             $('#f5').show();
             $('#f5').html("password is required");
             $('#f5').focus();
             error_pass=false;
             return false;
           }
           else
           {
            $('#f5').hide();
           }
           if(!pattern.test(getpass))
          {
            $('#f5').show();
             $('#f5').html("password should be strong use UPPER and LOWER CASE and SPECIAL symbols too");
             $('#f5').focus();
             error_pass=false;
             return false;
          }
          else
           {
            $('#f5').hide();
           }
           if((getpass.length<9)||(getpass.length>20))
           {
             $('#f5').show();
             $('#f5').html("password should be between 9 to 20 alphabets");
             $('#f5').focus();
             error_pass=false;
             return false;
           }
           else
           {
            $('#f5').hide();
           }


           }

           function check_cpass()
         {
           var getpass =$('#pass').val()
           var getcpass =$('#cpass').val()

           if(getcpass.length=="")
           {
             $('#f6').show();
             $('#f6').html("password is required");
             $('#f6').focus();
             error_cpass=false;
             return false;
           }
           else
           {
            $('#f5').hide();
           }
           if(getcpass!=getpass)
           {
            $('#f6').show();
             $('#f6').html("password is not same");
             $('#f6').focus();
             error_cpass=false;
             return false;
           }
           else
           {
            $('#f6').hide();
           }

           if((getpass.length<3)||(getpass.length>20))
           {
             $('#f6').show();
             $('#f6').html("password should be between 3 to 20 alphabets");
             $('#f6').focus();
             error_cpass=false;
             return false;
           }
           else
           {
            $('#f6').hide();
           }


           }

      
           $("#info").click(function(){

           error_fname = true;
           error_email = true;
           error_age = true;
           error_salary = true;
           error_password = true;
           error_cpassword = true;

    check_fname();
    check_email();
    check_age();
    check_salary();
    check_pass();
    check_cpass();

if((error_fname==true)&&(error_email==true)&&(error_age==true)&&(error_salary==true)&&(error_password==true)&&(error_cpassword==true))
  {
    //window.location = "login.php";
    return true;

  }
  else
  {
    return false;
  }

});








  });





</script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>