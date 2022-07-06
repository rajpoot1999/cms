<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fontawesome-all.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12" style="min-height: 40px; background-color:yellowgreen;color:white;text-align:center;font-size:20px;">
        CRUD(Create ,Read,Update,Delete) in Php by Using Mysql
        </div>
        </div>
 <!---FORM--->
 <div class="row">
     <div class="col-sm-2"></div>
    
     <div class="col-sm-8">
     <h4 style="text-align:center;">Display Record of All Users</h4>
     <table class="table table-border-responsive">
         <tr>
         <th>Id</th>
     <th>Name</th>
     <th>Email</th>
     <th>Profile</th>
     <th>Insert</th>
     <th>Delete</th>
     <th>Update</th>
</tr>
<?php
$con=mysqli_connect("localhost","root","","mydb");
if($con==true)
{
    $sql="select*from user";
    $r=mysqli_query($con,$sql);
    if(mysqli_num_rows($r)>0)
    {
        while($rs=mysqli_fetch_assoc($r))
        {
            echo"<tr>
            <td>".$rs["id"]."</td>
            <td>".$rs["Name"]."</td>
            <td>".$rs["Emali"]."</td>
            <td> <img src='profile/".$rs["Profile"]." width='90px' height='90px' class='img img-responsive'>'</td>
            <td><a href='phpcrud.php'><span class='fa-fa-pencil' style='color:blue;font-size:20px;'>Insert </span></a></td>
            
            </tr>";
        }
    }
}
else
{
    mysqli_error($con);
}

?>

     </table>
     </div>

     <div class="col-sm-2"></div>
 </div>
       

<!---footer--->
        <div class="row">
            <div class="col-sm-12" style="min-height: 40px; background-color:yellowgreen;color:white;text-align:center;font-size:20px;">
       Copyright &copy:BHEEMSEN SINGH
        </div>
        </div>

     
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>