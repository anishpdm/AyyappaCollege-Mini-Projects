<?php
session_start();
 ?>

<?php
include './studNavbar.php';
?>

<form method="POST">


<table class="table">
  <tr>
    <td>
Faculty name or Subject
    </td>

    <td>
<input type="text" name="fname" class="form-control" placeholder="Enter Faculty name or Subject " required />
    </td>
  </tr>

  <tr>

    <td></td>
    <td>
<button type="submit" name="searchbtn" class="btn btn-info">SEARCH</button>
    </td>
  </tr>
</table>
    </form>
  </body>
</html>

<?php

include './dbcon.php';
if(isset($_POST['searchbtn']))

{

  $Fname=$_POST["fname"];


  echo "<br>";
    $sql = "SELECT `id`, `name`, `dept`, `college`, `unvsty`, `mainsub` FROM `faculty` WHERE name like '%$Fname%' or mainsub like '%$Fname%'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {

      echo " <form method='POST'> <table class='table'>    <thead class='thead-light'>
      <tr> <th>NAME </th> <th>DEPT </th><th>COLLEGE </th><th>UNVSTY </th> <th>MAIN SUBJECT </th> </tr>
      </thead>
      ";
      // output data of each row
      while($row = $result->fetch_assoc()) {
  $id= $row["id"];
  $name= $row["name"];
  $dept= $row["dept"];
  $college= $row["college"];
  $unvsty= $row["unvsty"];
  $mainsub= $row["mainsub"];

    $studId=  $_SESSION["studId"];

      echo " <tr> <td>$name </td> <td>$dept </td><td>$college </td><td>$unvsty </td> <td>$mainsub </td> ";

   $sql1 = "SELECT * FROM `Followers` WHERE `F_Id`=$id and `S_Id`=$studId ";
 $result1 = $conn->query($sql1);

 if ($result1->num_rows > 0) {


   echo "<td> <Button name='Unfollowbtn' class='bth btn-info' value='$id'> UnFollow </Button> </td>
      </tr>
     ";

 }
 else{


   echo "<td> <Button name='followbtn' class='bth btn-info' value='$id'> Follow </Button> </td>
      </tr>
     ";
 }





      }

      echo " </table> </form> ";
  } else {
      echo "No Faculties";
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
