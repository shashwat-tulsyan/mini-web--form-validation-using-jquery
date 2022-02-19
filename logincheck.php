<?php
   include("connect.php");
    session_start();


 if(isset($_POST['submit']))
     {
 
      $email1 =$_POST['email'];
      $pass1=$_POST['pass'];
      //$name=$_GET['username'];
    
      $sqlget= "select * from userinfo where email = '$email1' && pass='$pass1' ";
      //$select="select * from userinfo";
      $query1 = mysqli_query($con , $sqlget);
      $num =mysqli_num_rows($query1);
      $fetching =mysqli_fetch_assoc($query1);



      if($num==1)
      {
        $_SESSION['email2']=$fetching['name'];  

        //echo $_SESSION['email2'];
         
         ?>
         <script>
           window.location.href="userpage.php";
         </script>
         <?php
      }
      
      else{
       ?>
          <script>
            alert("invalid emailid or password");
            window.location.href="login.php";
      </script>
          <?php
      }
      
 
    } 
   ?>