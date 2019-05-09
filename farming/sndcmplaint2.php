<?php
session_start();
 ?>

<?php
include './dealernavbar.php';
?>

<form method="POST">


<table class="table">


      <?php
$Id=$_GET['id'];


echo "

  <tr>
<td>Message  </td>


<td>
<textarea name='msg' class='form-control'  rows='5' cols='4' required> </textarea>
 </td>

   </tr>


   <tr>

     <td></td>
     <td>
 <button value='$Id' type='submit' name='searchbtn' class='btn btn-info'>SEND Complaint</button>
     </td>
   </tr>

  ";

       ?>




</table>
    </form>
  </body>
</html>

<?php

include './dbcon.php';
if(isset($_POST['searchbtn']))

{

  $Id=$_POST["searchbtn"];


    $msg=$_POST["msg"];

$fARMERiD=$_SESSION['Did'];
    $sql = "INSERT INTO `DealerComplaints`( `did`, `fid`, `complaint`, `addedOn`) VALUES(  $fARMERiD ,$Id,'$msg',now()) ";
  $result = $conn->query($sql);

  if($result===TRUE){
echo "<script> alert('Complaint Raised Succesfully') </script>";

echo "<script> window.location.href='complaintAboutFarmer.php'</script>";


  }
  else{
echo $conn->error;

  }



}



 ?>




 <?php
include './dbcon.php';
 if(isset($_POST['followbtn']) ){

     $Id=$_POST['followbtn'];

    $studId=  $_SESSION["studId"];

 $sql="INSERT INTO `Followers`( `F_Id`, `S_Id`) VALUES ( $Id,$studId)";

 $result=$conn->query($sql);

 if($result===TRUE){
    echo "<script> alert('Followed succesfully')</script>";

    echo "<script> window.location.href='searchfaculty.php'</script>";
 }



 }



 if(isset($_POST['Unfollowbtn']) ){

     $Id=$_POST['Unfollowbtn'];

    $studId=  $_SESSION["studId"];
 $sql="DELETE FROM `Followers` WHERE `F_Id`= $Id and `S_Id`= $studId";

 $result=$conn->query($sql);

 if($result===TRUE){
    echo "<script> alert('UnFollowed succesfully')</script>";

    echo "<script> window.location.href='searchfaculty.php'</script>";
 }



 }

 ?>
