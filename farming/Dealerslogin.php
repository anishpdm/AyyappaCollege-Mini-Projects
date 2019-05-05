
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

            <center>   <h3>Online Farming Portal</h3> </center>
            <center><h6>Dealer LOGIN</h6></center>
            <form method="POST">
<table class="table">
<tr>
<td>Username</td>
<td><input type="text" name="uname" class="form-control"></td>
</tr>

<tr>
<td>Password</td>
<td><input type="password" name="pass" class="form-control"></td>
</tr>

<tr>
<td></td>
<td>

 </td>
</tr>
</table>
<center><h5> <Button class="btn btn-success">LOGIN</Button></h5></center>
<center> <a href="Dealersregister.php">Dealers Registration</a>  </center>

<center> <a href="index.php">Admin Click Here to LogIn</a>  </center>
<center> <a href="Farmerlogin.php">Farmers Click Here to LogIn</a>  </center>

  

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

   $sql = "SELECT `id`, `uname`, `pswd` FROM `Admin` WHERE `uname`='$uname' and `pswd`='$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<script> window.location.href='viewdealerprofile.php' </script>";


    }
} else {
    echo "<script> alert('Invalid Credentials') </script>";
}

}
?>
