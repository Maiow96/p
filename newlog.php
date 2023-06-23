<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Login page</title>
    <style type="text/css">
      
      * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-image: url('./about/about.jpg');
    background-repeat: no-repeat;
 

}
.login {
    width: 360px;
    height: min-content;
    padding: 20px;
    border-radius: 12px;
    background: #ffffff;
}

.login h1 {
    font-size: 36px;
    margin-bottom: 25px;
}

.login form {
    font-size: 20px;
}

.login form .form-group {
    margin-bottom: 12px;
}

.login form input[type="submit"] {
    font-size: 20px;
    margin-top: 15px;
}

      </style>
  </head>
  
  <div class="login">

<h1 class="text-center">Login in</h1>
<form method="post" 
<form class="needs-validation">
    <div class="form-group was-validated">
        <label class="form-label" for="email">user name</label>
        <input class="form-control" type="text" name="unm" id="user" required>
        <div class="invalid-feedback">
            Please enter your email address
        </div>
    </div>
    <div class="form-group was-validated">
        <label class="form-label" for="password">Password</label>
        <input class="form-control" type="password" name="pwd" id="password" required>
        <div class="invalid-feedback">
            Please enter your password
        </div>
    </div>
    <div class="form-group form-check">
        <input class="form-check-input" type="checkbox" id="check">
        <label class="form-check-label" for="check">Remember me</label>
    </div>
    <input class="btn btn-success w-100" type="submit" name="subtn" value="SIGN IN">

</form>
</form>

</div>


    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
<?php
extract($_POST);
if(isset($subtn))
{
   if(!empty($unm) and !empty($pwd))
   {

   
    $link= mysqli_connect(hostname:"localhost",username:"root",password:"",database:"ict_project");
    $qry="select user_name,userid, from user_detail where user_name='$unm' and user_pwd='$pwd' ";
    $resultset= mysqli_query($link,$qry);
    $count=mysqli_num_rows($resultset);
    $r=mysqli_fetch_assoc($resultset);
    $name=$r["user_name"];
    $id=$r["userid"];
    
    // $val=$name.",".$id;

    // setcookie("MyCookie",$val,time()+(60));
  if($count==0)
  
    echo "invalid";
  
  else if($count!=0)
  {
    session_start();
    $_SESSION['username'] =$name;
    $_SESSION['id'] =$id;
    $_SESSION['imgurl'] =$imgurl;
    header("location:../project.php");
}
   }
  
    else{
        echo "fields can not be blank";
    }
   
    }

?>
 