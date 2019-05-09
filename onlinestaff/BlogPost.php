<?php
session_start();
 ?>

<?php
include './facNavbar.php';
?>

<form method="POST">


<table class="table">


      <?php


echo "

<tr>
<td>Title </td>


<td>
<input type='text' name='title' class='form-control'  />
</td>

 </tr>


  <tr>
<td>Message to Post </td>


<td>
<textarea name='msg' class='form-control'  rows='5' cols='4' required> </textarea>
 </td>

   </tr>


   <tr>

     <td></td>
     <td>
 <button  type='submit' name='searchbtn' class='btn btn-info'>POST MESSAGE</button>
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
  $title=$_POST["title"];


    $studId=  $_SESSION["facId"];
    $msg=$_POST["msg"];


    $sql = "INSERT INTO `Posts`( `fid`, `title`, `msg`, `Date`) VALUES  ($studId,'$title','$msg',now() ) ";
  $result = $conn->query($sql);

  if($result===TRUE){
echo "<script> alert('Message Posted Succesfully') </script>";

echo "<script> window.location.href='BlogPost.php'</script>";


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
