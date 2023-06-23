<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/a6f6ded435.js" crossorigin="anonymous"></script>
    <style type="text/css">
        body{
            background-image: url(imge/R.jpeg);
            background-size: 100% 790px;
            background-repeat: no-repeat;
            }
        .contain{
            width:300px;
            height:500px;
            text-align: center;
            color: navy;
            background-color:darkturquoise;
            font-family: cursive;
            /* height: 700 px; */
            transform:translate(-50%,-50%);
            position: absolute;
            top:50%;
            left:50%;

        }
        .contain>.text{
            
            margin-top: 50px;
            
            position: relative;

        }
        .in1{
            border: none;
        
            font-size: 20px;
            margin-top: 40px;
            display: block;
            text-align: center;
            margin-left: 20px;
            outline: none;
            background-color:darkturquoise;
        }
        p{
            margin-top: 26px;
            font-size: 18px;
        }
        p span{
color: aqua;
        }
        .i{
            width: 250px;
            height: 44px;
            color: black;
            border: none;
            font-size: 22px;
            border-radius: 20px;

        }
        .i:hover{
            border:1px solid aqua;
            color: white;
            background-color: black;

        }
        span>a{
            font-size: 24px;
            border: solid red 1px;
            background-color: black;
            text-decoration: none;
            border-radius: 20px;
        }
        .in1:hover{
            border: solid 1px navajowhite;
            font-style:chiller;
            border-radius: 20px;
            background-color: darkgreen;


        }
        a:hover{
            background-color: rgb(226, 100, 201);
            color:black;
            border: 1px solid blueviolet;
            border-radius: 20px;
            width: 200px;
            height: 30px;
            }

.fg:hover{
    border: ridge 1px black ;
    background-color: rgb(122, 202, 233);
    border-radius:20px;
        }
 

    </style>
</head>
<body>
    

    <div class="contain">
        <div class="text">
            <form method="post">
            <i class="fa-solid fa-chess-bishop fa-beat fa-xl" style="text-align: left;"></i>
            <h1><i class="fa-solid fa-chess-bishop fa-beat fa-xl"></i>login</h1>
            <input type="text" placeholder="enter mail" class="in1" name="unm">
            <input type="password" placeholder="enter password" name="passw" class="in1">
            <p class="fg">forgot password</p>
            <input type="submit" value="login" name="s" class="i">
            <p>not a member</p>
            <span><a href="new.html">sign up</a></span>
</form>
        </div>
    </div>
</body>
</html>
<?php

extract($_POST);
if(isset($s))
{
   if(!empty($unm) and !empty($passw))
   {

   
    $link= mysqli_connect(hostname:"localhost",username:"root",password:"",database:"ict_project");
    $qry="select user_name,userid,imgurl from user_detail where user_name='$unm' and user_pwd='$passw' ";
    $resultset= mysqli_query($link,$qry);
    $count=mysqli_num_rows($resultset);
    $r=mysqli_fetch_assoc($resultset);
    $name=$r["user_name"];
    $id=$r["userid"];
    $imgurl=$r["imgurl"];
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
    header("location:../log.php");
}
   }
  
    else{
        echo "fields can not be blank";
    }
   
    }

?>
 