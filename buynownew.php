<?php
session_start();
if(!isset($_SESSION['id']))
{
    echo "Hello...";
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script type="text/javascript">
          function myfunc()
        {
              alert('Thanks for choosing.Our team will  get in touch with u shortly');
        }
      
        </script>
    <title>Document</title>
</head>
<body>
    <form method="post">
    <div class="container-fluid">
    <table class="table table-striped table-dark my-auto">
     <tr>
        <th colspan="2" class="text-center" align="center">billing address</th>
     </tr>
     <tr>
        <td>usename</td><td><input type="text" name="username" value='<?php echo" $_SESSION[username]"?>' readonly></td></tr>
        <tr>
        <td>Good Name</td><td><input type="text" name="name" required></td></tr> <tr>
        <td> phone number</td><td><input type="text" name="mobile" required></td></tr>
        <tr><td>Arrival address</td><td><input type="text" name="address" required></td></tr>
    <tr>  <td>pincode</td><td><input type="number" name="pin" required></td></tr>
   <tr><td>select service</td> <td><select name="service" style="width:121px;" required>
     <?php
      if($_GET['id']==1) 
      {
       echo"   <option>tap-repair</option>
               <option>lekage</option>
              <option>minor-fitting</option>
              <option>motor-replacement</option>
              <option>drain-blockage</option>
              <option>other_service</option>
     ";

    }
    elseif($_GET['id']==2)
    {
        echo"   <option>cleaning</option>
                <option>garden</option>
               <option>hall</option>
             ";
    }
      elseif($_GET['id']==3)
      {
          echo"   <option>paint</option>
                  <option>garden</option>
                 <option>hall</option>
              ";
   
     }
     elseif($_GET['id']==4)
     {
         echo"   <option>wood</option>
                 <option>garden</option>
                <option>hall</option>
             ";
     } 
     elseif($_GET['id']==5)
     {
         echo"   <option>electronics</option>
                 <option>AC-Repair</option>
                <option>Cooler-Repair</option>
                <option>Fan_Repair</option>
                <option>Induction/option>
                <option>Inverter</option>
                <option>Iron</option>
                <option>Wiring</option>
                <option>Microwave</option>
                <option>Mixer-Grinder</option>
                <option>Refrigeretor</option>
                <option>RO-Purifier</option>
                <option>Switch_Boards</option>
                <option>Waching-machine</option>
                <option>other-service</option>
             ";
     } 
     elseif($_GET['id']==6)
     {
         echo"   <option>dis</option>
                 <option>garden</option>
                <option>hall</option>
             ";
     } 
     else{
    //   echo"  <option>please choose correct options;</option>";
                      header("location:project.php");
                    
     }
     ?>
         </select></td></tr>
        <tr><td><input type="submit" name="sbtn"></td></tr>
      </table>
      </div> 
    </form>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<?php

extract($_POST);
if (isset($sbtn))
{
  
   $link= mysqli_connect(hostname:"localhost",username:"root",password:"",database:"ict_project");
   $qry="insert into orders values('$username','$name','$mobile','$address','$pin','$service')";
   mysqli_query($link,$qry);
   mysqli_close($link);
  //  echo"done";
   
//    echo"<script> myfunc();</script>";

//    header('location:elc.html');
//    echo"<script> myfunc();</script>";

 echo'
     <section class="vh-100" style="background-color: #eee;">
            <div class="container py-5 h-100">
    
              <div class="row">
              <div class="col-md-4">
                <p class="lead fw-normal ">Your order has been taken</p>
                <p class="text-muted small">by <?php date(time); ?> DHFL on 21 Jan, 2020</p>
              </div>
              </div>
              <div class="row">
              <div class="col-x-sm-6 text-center mx-auto">
                <button class="btn btn-outline-primary" type="button">Track order details</button>
              </div>
              <div class="col-x-sm-6 text-center  mx-auto">
            <a href="project.php"  <button class="btn btn-outline-primary" type="button">continue shoping</button></a>
            </div>
            </div>
          
            </div>
      

    </section> ';

   
    echo"<script> myfunc();</script>";

}
?>

</body>
</html>