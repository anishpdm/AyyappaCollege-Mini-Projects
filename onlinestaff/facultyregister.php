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
            <center><h6>Student Registration</h6></center>
            <form method="POST">
<table class="table">

<tr>
<td>Name</td>
<td><input type="text" name="name" class="form-control" required></td>
</tr>


<tr>
<td>Dept</td>
<td><input type="text" name="dept" class="form-control" required></td>
</tr>


<tr>
<td>College</td>
<td><input type="text" name="colg" class="form-control" required></td>
</tr>

<tr>
<td>University</td>
<td><input type="text" name="unv" class="form-control" required></td>
</tr>

<tr>
<td>Main Subject</td>
<td><input type="text" name="mainsub" class="form-control" required></td>
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

<center><h5> <Button name="but" class="btn btn-success">LOGIN</Button></h5></center>
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

   $unv=$_POST['unv'];
   $mainsub=$_POST['mainsub'];
   $name=$_POST['name'];
   $colg=$_POST['colg'];
   $dept=$_POST['dept'];

   $sql = "INSERT INTO `faculty`( `name`, `dept`, `college`, `unvsty`, `mainsub`, `uname`, `pswd`)
    VALUES('$name','$dept','$colg', '$unv', '$mainsub', '$uname','$pass')";
$result = $conn->query($sql);

if ($result===TRUE) {

        echo "<script> alert('Registered Succesfully') </script>";
        echo "<script> window.location.href='studentlogin.php' </script>";

} else {
    echo "<script> alert('Invalid Credentials') </script>";
}

}
?>