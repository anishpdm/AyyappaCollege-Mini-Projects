<?php
session_start();
 ?>

<?php
include './adminnavbar.php';
?>

<?php

include './dbcon.php';




  echo "<br>";


    $sql = "SELECT  ff.name,`title`, `msg`,Date FROM `Posts` p JOIN faculty ff ON ff.id=p.`fid` ";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {

      echo " <div class='container' style='background-color: #f1c40f'>
      <br>
<div class='row'>

<div class='col col-sm-2'>



</div>

<div class='col col-sm-8'> ";


      // output data of each row
      while($row = $result->fetch_assoc()) {

  $name= $row["name"];
  $title= $row["title"];
  $msg= $row["msg"];
  $Date= $row["Date"];

  



      echo "

      <div class='card text-center '>
        <div class='card-header'>
        $name
        </div>
        <div class='card-body'>
          <h5 class='card-title'>$title</h5>
          <p class='card-text'>$msg.</p>

        </div>
        <div class='card-footer text-muted'>
          $Date
        </div>
      </div>

      <br><br>
       ";







      }




       echo "</div>

      <div class='col col-sm-2'> </div>


       </div>

            </div>



            ";

      echo " </table> </form> ";
  } else {
      echo "No Posts to Load. Follow a Faculty First!!! ";
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

  </body>
</html>
