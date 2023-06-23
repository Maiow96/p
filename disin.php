<?php
session_start();
if(!isset($_SESSION['id']))
{
    echo "Hello...";
    header('location:demo/newlog.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
    <style type="text/css">
     
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6" style="margin-top:200px;text-align: center;"><span class="alert alert-danger" style="font-weight: bolder;font-size:32px;font-style:italic;">Aplliances
                                                                      
            </span></div >
            <div style="margin-top:150px; text-align: center;"class="col"><span class alert alert-danger></span><img src="download (3).jpeg" class="img-fluid img-thumbnail"></div>
        </div>
    </div>
    <section>
      <div style="margin-top: 120px;text-align: center;">  
   <span style="text-align:center; font-family:elephant;font-size: 19px;font-weight:bolder;"><h5>Why to choose us</h5></span></div>
   <div class="container-fluid"style="margin-top:80px; text-align: center;">
    
<div class="row">
  <div class="col-sm-2">
<span class="alert alert-success">Easy to use</span>
</div>
<div class="col-sm-2">
<span class="alert alert-info">low cost</span>
</div>
<div class="col-sm-4">
<span class="alert alert-warning">our experienced technicians</span>
</div>
<div class="col-sm-2">
<span class="alert alert-info">full support</span>
</div>
<div class="col-sm-2">
<span class="alert alert-success">warranty</h2></span>
</div>
</div>
   </div>
   </div> 
    </section>
    <!-- <div class="container"style="margin-top:200px;">
      <h6>Prices</h6>
      <table border="1px" align="center" width="400px">
        <tr><th>prices</th></tr>
        <tr><td>tap repair</td><td>50</td></tr>
        <tr><td>lekage</td><td>79</td></tr>
        <tr><td>bath fitting</td><td>159</td></tr>
        <tr><td>bath fitting</td><td>99</td></tr>
        <tr><td>minnor fittings</td><td>99</td></tr>
        <tr><td>main line filter</td><td>199</td></tr>
        <tr><td>bath fitting</td><td>99</td></tr>
        <tr><td>motor repair</td><td>139</td></tr>
        <tr><td>motor replacement</td><td>199</td></tr>
        <tr><td>water-cooler installatin</td><td>499</td></tr>
        <tr><td>bathroom drain blockage</td><td>139</td></tr>
        <tr><td>shower-installation(ceiling)</td><td>179</td></tr>
        <tr><td>shower-installation(wall)</td><td>129</td></tr>

      </table>
    </div>
    <section> -->
      <!-- <div class="btn-group">
        <button type="button" class="btn btn-danger">tap</button>
        <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="sr-only">lekage</span>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" >price(99 Rs)</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Separated link</a>
        </div>
      </div>

      <div>
        <div class="btn-group">
          <button type="button" class="btn btn-danger">Action</button>
          <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="sr-only">Toggle Dropdown</span>
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </div> -->
        <div class="container-fluid">
<div style="margin-top: 400px;">
  <h1 style="text-align: center;">prices and services</h1>
  <div class="row" style="margin-top: 50px;">
    <div class="col-sm-6" style="margin-left:">
  <ul class="list-group">
    <!-- <li class="list-group-item d-flex justify-content-between align-items-center">
      leakage
      <span class="badge badge-primary badge-pill">Rs-114</span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
      bath fitting
      <span class="badge badge-primary badge-pill">Rs-122</span>
    </li> -->
    <li class="list-group-item d-flex justify-content-between align-items-center">
      Home Disinfection
      <span class="badge badge-primary badge-pill">1</span>
      <!-- <li class="list-group-item d-flex justify-content-between align-items-center">
        motor-replacement
        <span class="badge badge-primary badge-pill">1</span>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          tap-repair
          <span class="badge badge-primary badge-pill">1</span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
       drain blockage
      <span class="badge badge-primary badge-pill">1</span>
</li> -->
<!-- <li class="list-group-item d-flex justify-content-between align-items-center">
service

  <span class="badge badge-primary badge-pill">1</span>
</li> -->

  </ul>
  
</div>  
  
<div class="col-sm-6" style="margin-left:; text-align: justify ; ">           
  <div style="text-align: center; font-size:42px;">
     <h5 style="font-style:chiller;font-size: 32px;">service</h5> 
  </div>
  <p style="text-align: justify; font-style:oblique;">
  Plumbing services is the whole system of piping, fixtures, applications for providing water supply or drainage to the buildings with the use of pipes, control valves, pipe layouts, storage tanks, etc.
</p>

</div>

      </div>
      </div>
  
      </section>
    <div class="container-fluid">
    <div style="margin-top:200px; text-align:center;">
       <h4>faq</h4>
       <div id="accordion">
        <div class="row">
          <div class="col">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Collapsible Group Item #1
              </button>
            </h5>
          </div>
      
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Collapsible Group Item #2
              </button>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Collapsible Group Item #3
              </button>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div id="accordion">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Collapsible Group Item #1
                </button>
              </h5>
            </div>
        
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Collapsible Group Item #2
                </button>
              </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Collapsible Group Item #3
                </button>
              </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    </div>
    </div>
    </div>
    <div class="container d-block mx-auto"  >
      <a href="buynownew.php?id=1" ><button type="button" class=" fixed-bottom btn-danger mx-auto d-block" style="width: 25%; height: 6%; border-radius: 20px;">explore</button></a>
     </div>
    <!-- <div class="row">
    <div class="col">
    <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
      
      
       <a href="#"  class="list-group-item list-group-item-action list-group-item-primary">This is a primary list group item </a>
       <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">This is a secondary list group item</a>
       <a href="#" class="list-group-item list-group-item-action list-group-item-success">This is a success list group item</a>
        <a href="#" class="list-group-item list-group-item-action list-group-item-danger">This is a danger list group item</a>             
        <a href="#" class="list-group-item list-group-item-action list-group-item-warning">This is a warning list group item</a>               
        <a href="#" class="list-group-item list-group-item-action list-group-item-info">This is a info list group item</a>                  
        <a href="#" class="list-group-item list-group-item-action list-group-item-light">This is a light list group item</a>                       
        <a href="#" class="list-group-item list-group-item-action list-group-item-dark">This is a dark list group item</a>                        
      </div>                 
      </div>                     
   <div class="col">
     <div class="list-group">
            
        <a  href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
        <a  href="#" class="list-group-item list-group-item-action list-group-item-primary">This is a primary list    group item </a>
            <a  href="#" class="list-group-item list-group-item-action list-group-item-secondary">This is a secondary  list group item</a>
            <a  href="#" class="list-group-item list-group-item-action list-group-item-success">This is a success  list group item</a>
            <a  href="#" class="list-group-item list-group-item-action list-group-item-danger">This is a danger list group item</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-warning">This is a warning list group item</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-info">This is a info list group item</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-light">This is a light list group item</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-dark">This is a dark list group item</a>
           </div>

      </div>
      </div>
     -->




    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
