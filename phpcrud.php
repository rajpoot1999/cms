<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
     <div class="col-sm-4"></div>
     <div class="col-sm-4" style="min-height: 400px;border:2px solid red;padding:5px;margin:2%">
     <form action="acode.php" method="post" enctype="multipart/form-data">
     <h4 style="text-align:center;">Enter Your valid Details</h4>
    Name
    <input type="text" name="name" class="form-control">
    Email
    <input type="email" name="email" class="form-control">
    Profile
    <input type="file" name="profile" class="form-control">
    <br>
    <br>
    <button class="btn btn-success">Save-Record</button>
    </div>
     </form>
     <div class="col-sm-4"></div>
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