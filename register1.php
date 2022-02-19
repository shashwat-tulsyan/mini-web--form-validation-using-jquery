<?php 
include("connect.php");

     // include"connection.php";


if(isset($_POST['submit']))
{

           $name=$_POST['username'];
           $email =$_POST['email'];
           $age =$_POST['age'];
           $salary=$_POST['salary'];
           $pass=$_POST['pass'];
           $cpass=$_POST['cpass'];
           //echo $name;

 $insertquery = "insert into userinfo(name,email,age,salary,pass,cpass)
 values('$name','$email','$age','$salary','$pass','$cpass')";

           $result= mysqli_query($con, $insertquery);
           //header('location:cab.php');
           if($result)
           {
            ?>
            <script>
            alert("register succesfull");
            window.location.href="login.php";

            </script>
            <?php
           }
           else
           {

            ?>
            <script>
            alert("mail is being already used by some-one");
            window.location.href="register.php";

            </script>
            <?php
        }

        }

       ?>