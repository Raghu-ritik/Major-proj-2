<?php

session_start();
$email_address= !empty($_SESSION['email'])?$_SESSION['email']:'';
if(!empty($email_address))
{
  header("location:dashboard.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>cafeteen-Admin Panel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="./assets/uploadImage/Logo/favicon.png" type="image/x-icon">
  <!--bootstrap4 library linked-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <!--custom style-->
  <style type="text/css">
   .registration-form{
      /* background: #f7f7f7; */
      padding: 20px;
     
      margin: 100px 0px;
      background: inherit;
    backdrop-filter: blur(10px);
    }
    .err-msg{
      color:red;
    }
    .registration-form form{
      border: 1px solid transparent;
      padding: 10px;
      background: inherit;
    backdrop-filter: blur(20px);
    }
  </style>
</head>
<body>

<div class="container-fluid" style="background-image: url('assets/myimages/back.jpg');
      background-color: #ffffff;background-size:cover;min-height:100vh">
 <div class="row">
   <div class="col-sm-4">
   </div>
   <div class="col-sm-4">
    
    <!--====registration form====-->
    <div class="registration-form">
      <h4 class="text-center">Admin Panel</h4>
      <p class="text-success text-center"></p>

      <form action="../dashboard.php" method="post">
       
        
        <!--// Email//-->
        <div class="form-group">
            <label>Email:</label>
            <input type="text" class="form-control"  placeholder="Enter Email" name="email" value="">
            <p class="err-msg">
                
            </p>
        </div>
        
        <!--//Password//-->
        <div class="form-group">
            <label>Password:</label>
            <input type="password" class="form-control"  placeholder="Enter Password" name="password">
            <p class="err-msg">
                 
            </p>
        </div>

        
        <button type="submit" class="btn btn-secondary" name="login">Login</button>
      </form>
    </div>
   </div>
   <div class="col-sm-4">
   </div>
 </div>
  
</div>

</body>
</html>