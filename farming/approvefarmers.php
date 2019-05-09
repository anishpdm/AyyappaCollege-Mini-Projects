<?php
include './adminnavbar.php';
?>

<?php
include './dbcon.php';
echo "<br>";
$sql = "SELECT `id`, `name`, `address`, `phoneno`, `emailid`, `uname`, `passwd`, `status` FROM `farmer` WHERE  status=0 ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "  <form method='POST'> <table class='table'>    <thead class='thead-light'>
    <tr> <th>NAME </th> <th>address </th><th>phoneno </th> <th>Email </th> <th> Approve Action </th>  <th> Reject Action </th>  </tr>
    </thead>
    ";
    // output data of each row
    while($row = $result->fetch_assoc()) {

$name= $row["name"];
$address= $row["address"];
$phoneno= $row["phoneno"];

$mailId= $row["emailid"];

$id= $row["id"];


echo " <tr> <td>$name </td> <td>$address </td><td>$phoneno </td> <td>$mailId </td>
<td> <Button type='submit' name='aprbtn' value='$id' class='btn btn-success'> Approve </Button </td>
<td> <Button type='submit' name='regbtn' value='$id' class='btn btn-warning'> Reject </Button </td>
</tr>
";

    }

    echo " </table> </form> ";
} else {
    echo "No Farmers";
}
?>

</body>
</html>


<?php

include './dbcon.php';
if(isset($_POST['aprbtn']))

{

  $Id=$_POST["aprbtn"];




    $sql = "UPDATE `farmer` SET `status`=1 WHERE `id`=$Id";
  $result = $conn->query($sql);

  if($result===TRUE){
echo "<script> alert('Farmer Approved Succesfully') </script>";

echo "<script> window.location.href='approvefarmers.php'</script>";


  }
  else{
echo $conn->error;

  }



}



if(isset($_POST['regbtn']))

{

  $Id=$_POST["regbtn"];




    $sql = "UPDATE `farmer` SET `status`=-1 WHERE `id`=$Id";
  $result = $conn->query($sql);

  if($result===TRUE){
echo "<script> alert('Farmer Rejected Succesfully') </script>";

echo "<script> window.location.href='approvefarmers.php'</script>";


  }
  else{
echo $conn->error;

  }



}



 ?>
