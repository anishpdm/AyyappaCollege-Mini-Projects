<?php
include './adminnavbar.php';
?>

<?php
include './dbcon.php';
echo "<br>";
$sql = "SELECT `id`, `name`, `address`, `phoneno`, `mailId`, `uname`, `passwd`, `status` FROM `dealer` WHERE  status=0 ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo " <form method='POST'> <table class='table'>    <thead class='thead-light'>
    <tr> <th>NAME </th> <th>address </th><th>phoneno </th> <th>Email </th> <th> Approve Action </th>  <th> Reject Action </th>  </tr>
    </thead>
    ";
    // output data of each row
    while($row = $result->fetch_assoc()) {

$name= $row["name"];
$address= $row["address"];
$phoneno= $row["phoneno"];

$mailId= $row["mailId"];

$id = $row["id"];


echo " <tr> <td>$name </td> <td>$address </td><td>$phoneno </td> <td>$mailId </td>
<td> <Button value='$id' type='submit' name='aprbtn' class='btn btn-success'> Approve </Button </td>
<td> <Button value='$id' type='submit' name='regbtn' class='btn btn-warning'> Reject </Button </td>
</tr>
";

    }

    echo " </table> </<form>";
} else {
    echo "No Dealers";
}
?>

</body>
</html>


<?php

include './dbcon.php';
if(isset($_POST['aprbtn']))

{

  $Id=$_POST["aprbtn"];




    $sql = "UPDATE `dealer` SET `status`=1 WHERE `id`= $Id ";
  $result = $conn->query($sql);

  if($result===TRUE){
echo "<script> alert('Dealer Approved Succesfully') </script>";

echo "<script> window.location.href='approvedealers.php'</script>";


  }
  else{
echo $conn->error;

  }



}



if(isset($_POST['regbtn']))

{

  $Id=$_POST["regbtn"];




    $sql = "UPDATE `dealer` SET `status`=-1 WHERE `id`= $Id ";
  $result = $conn->query($sql);

  if($result===TRUE){
echo "<script> alert('Dealer Approved Succesfully') </script>";

echo "<script> window.location.href='approvedealers.php'</script>";


  }
  else{
echo $conn->error;

  }



}



 ?>
