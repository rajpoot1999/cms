<?php
 $name=$_POST["name"];
 $email=$_POST["email"];


$con=mysqli_connect("localhost","root","","mydb");
if($con==true)
{
 
$sql="insert into user (Name,Emali,Profile) values('$name','$email','$filename')";
$x=mysqli_query($con,$sql);
if($x>0)
{
    move_uploaded_file($_FILES["profile"]["tmp_name"],"profile/".$filename);
    echo"<script>alert('record save successfully');window.location.href='fetch.php'</script>";
}
else{
    echo"<script>alert('record not save successfully');window.location.href='fetch.php'</script>";
}
}
else
{
mysqli_error($con);
}