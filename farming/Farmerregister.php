<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
    html, body {
        height: 100%;
        margin: 0;
        padding: 0 0;
    }

    .container-fluid {
        height: 100%;
        display: table;
        width: 100%;
        padding-right: 0;
        padding-left: 0;
    }

    .row-fluid {
        height: 100%;
        display: table-cell;
        vertical-align: middle;
        width: 100%;
    }

    .centering {
        float: none;
        margin: 0 auto;
    }
</style>
<body>

<div class="container-fluid">

        <div class="row-fluid">
            <div class="offset3 span6 centering">
            <div class="row">
            <div class="col col-sm-4">
            </div>
          
            <div class="col col-sm-4">

            <center>   <h3>Online Staff Portal</h3> </center>
            <center><h6>Famers Registration</h6></center>
            <form method="POST">
<table class="table">

<tr>
<td>Name</td>
<td><input type="text" name="name" class="form-control" required></td>
</tr>


<tr>
<td>Address</td>
<td><input type="text" name="addr" class="form-control" required></td>
</tr>


<tr>
<td>Phone</td>
<td><input type="text" name="Phone" class="form-control" required></td>
</tr>


<tr>
<td>E-mail</td>
<td><input type="email" name="email" class="form-control" required></td>
</tr>


<tr>
<td>Username</td>
<td><input type="text" name="uname" class="form-control" required></td>
</tr>

<tr>
<td>Password</td>
<td><input type="password" name="pass" class="form-control" required></td>
</tr>

<tr>
<td>Confirm Password</td>
<td><input type="password" name="cpass" class="form-control" required></td>
</tr>

<tr>
<td></td>
<td>

 </td>
</tr>
</table>

<center><h5> <Button name="but" class="btn btn-success">REGISTER</Button></h5></center>
<center> <a href="studentlogin.php">Students Click Here to LogIn</a>  </center>
<center> <a href="facultylogin.php">Faculty Click Here to LogIn</a>  </center>


</form>
            </div>
            </span>

            <div class="col col-sm-4"></div>
            </div>
            </div>
        </div>
    </div>


    
</body>
</html>


<?php
include './dbcon.php';

if(isset($_POST['but'])){
   $uname=$_POST['uname'];
   $pass=$_POST['pass'];

   $name=$_POST['name'];
   $Phone=$_POST['Phone'];
   $addr=$_POST['addr'];
   $email=$_POST['email'];
   

   $sql = "INSERT INTO `farmer`(`name`, `address`, `phoneno`, `emailid`, `uname`, `passwd`, `status`)
    VALUES('$name','$addr','$Phone','$email','$uname','$pass',0)";
$result = $conn->query($sql);

if ($result===TRUE) {

        echo "<script> alert('Registered Succesfully') </script>";
        echo "<script> window.location.href='Farmerlogin.php' </script>";

} else {
    echo "<script> alert('Invalid Credentials') </script>";
}

}
?>