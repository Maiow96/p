<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $username=$_SESSION['username'];
    $get_user="select * from 'user' where username='$username'";
    $result=mysqli_query($con,$get_user);
    $row_fetch=mysqli_fetch_assoc($result);
    $uid=$row_fetch['user_id'];

?>




    <h1>all orders</h1>
<table class="table table-bordered mt-5">
    <thead> <tr>
        <td>product</td>
        <td>date</td>
   
    </tr>
    </table>
</thead>
    <tbody>
        <?php
        $get_order="select * from 'user_order' where uid =$user_id";
        $resultor=mysqli_query($con,$get_order);
        while($row_orders=mysqli_fetch_assoc($resultor))
        {
             $pro=$row_orders['proname'];
             $ordate=$row_orders['pro_date'];
            
             echo"<tr>
             <td>$pro</td>
             <td>$ordate</td>
             </tr>";
          }
        ?>
 
    </tbody>
</table>
</body>
</html>