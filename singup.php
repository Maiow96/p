<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <section class="h-100 bg-dark">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
              <div class="card card-registration my-4">
                <div class="row g-0">
                  <div class="col-xl-6 d-none d-xl-block">
                    <img src=""
                      alt="Sample photo" class="img-fluid"
                      style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                  </div>
                  <div class="col-xl-6">
                    <div class="card-body p-md-5 text-black">
                      <h3 class="mb-5 text-uppercase">Registration form</h3>
                      <div class="form-outline mb-4">
                        <input type="text" id="form3Example8" class="form-control form-control-lg" name="user_name" required/>
                        <label class="form-label" for="form3Example8">user</label>
                      </div>
                      <div class="row">
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <input type="text" id="form3Example1m" class="form-control form-control-lg" name="name" required/>
                            <label class="form-label" for="form3Example1m">First name</label>
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <input type="text" id="form3Example1n" class="form-control form-control-lg"name="lastname" required />
                            <label class="form-label" for="form3Example1n" >Last name</label>
                          </div>
                        </div>
                      </div>
      
                      <div class="row">
                        <!-- <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <input type="text" id="form3Example1m1" class="form-control form-control-lg" name="mother" required/>
                            <label class="form-label" for="form3Example1m1">Mother's name</label>
                          </div>
                        </div> -->
                        <div class="col mb-4">
                          <div class="form-outline">
                            <input type="tel" id="form3Example1n1" class="form-control form-control-lg" name="phone" required />
                            <label class="form-label" for="form3Example1n1">Mobile no.</label>
                          </div>
                        </div>
                      </div>
      
                      <div class="form-outline mb-4">
                        <input type="text" id="form3Example8" class="form-control form-control-lg" name="add" required/>
                        <label class="form-label" for="form3Example8">Address</label>
                      </div>
      
                      <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
      
                        <h6 class="mb-0 me-4">Gender: </h6>
      
                        <div class="form-check form-check-inline mb-0 me-4">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                            value="female" required />
                          <label class="form-check-label" for="femaleGender">Female</label>
                        </div>
      
                        <div class="form-check form-check-inline mb-0 me-4">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                            value="male" />
                          <label class="form-check-label" for="maleGender">Male</label>
                        </div>
      
                        <div class="form-check form-check-inline mb-0">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender"
                            value="option3" />
                          <label class="form-check-label" for="otherGender">Other</label>
                        </div>
      
                      </div>
      
                      <div class="row">
                        <div class="col-md-6 mb-4">
      
                          <select class="select" required>
                            <option value="st" selected disabled>State</option>
                            <option value="uttar">uttar-Pradesh</option>
                            <!-- <option value="3">Option 2</option>
                            <option value="4">Option 3</option> -->
                          </select>
      
                        </div>
                        <div class="col-md-6 mb-4">
      
                          <select class="select">
                            <option value="c" selected disabled>City</option>
                            <option value="vns">Varanasi</option>
                            <option value="bnda">Banda</option>
                            <option value="vglb">Jhansi</option>
                          </select>
      
                        </div>
                      </div>
      
                      <div class="form-outline mb-4">
                        <input type="date" id="form3Example9" class="form-control form-control-lg" required/>
                        <label class="form-label" for="form3Example9">DOB</label>
                      </div>
      
                      <div class="form-outline mb-4">
                        <input type="number" id="form3Example90" class="form-control form-control-lg" required/>
                        <label class="form-label" for="form3Example90">Pincode</label>
                      </div>
      
                      <div class="form-outline mb-4">
                        <input type="text" id="form3Example99" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example99">Course</label>
                      </div>
      
                      <div class="form-outline mb-4">
                        <input type="email" id="form3Example97" class="form-control form-control-lg" required/>
                        <label class="form-label" for="form3Example97">Email ID</label>
                      </div>
      
                      <div class="d-flex justify-content-end pt-3">
                        <input type="reset" class="btn btn-light btn-lg">
                        <input type="submit" class="btn btn-warning btn-lg ms-2" name="subtn" value="Submit form">
                      </div>
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </section>
      </form>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

<?php
extract($_POST);
if (isset($subtn))
{
  
   $link= mysqli_connect(hostname:"localhost",username:"root",password:"",database:"ict_project");
   $qry="select * from details_items where pro_name='$name'";
  //  $count=mysqli_num_rows($resultset);
     $result= mysqli_query($link,$qry);
   if(mysqli_num_rows($result)>0)
   {
    echo"username already taken";
   }
   else{
   $qrry="insert into details_items(pro_name,pro_cat)values('$name','$lastname' )";
   mysqli_query($link,$qrry);
   mysqli_close($link);
   echo"succesfully registered";
  }
}
?>