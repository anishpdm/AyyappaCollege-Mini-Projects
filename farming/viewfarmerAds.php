<?php
session_start();
 ?>
<?php
include './dealernavbar.php';
?>

<?php
include './dbcon.php';
echo "<br>";
$sql = "SELECT fa.`id`, f.name, `AdDetails`, `Dealer_Id`, `ExpiryDate` FROM `FarmerAds` fa JOIN farmer f on f.id=fa.`FId` WHERE fa.Dealer_Id=0 and `ExpiryDate`>=CURDATE()";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo " <form method='POST'> <table class='table'>    <thead class='thead-light'>
    <tr> <th> FARMER NAME </th> <th> AD </th><th> Expiry </th>  <th> Approve Action </th>  </tr>
    </thead>
    ";
    // output data of each row
    while($row = $result->fetch_assoc()) {

$name= $row["name"];
$Ad= $row["AdDetails"];
$Expiry= $row["ExpiryDate"];



$id = $row["id"];


echo " <tr> <td>$name </td> <td>$Ad </td><td>$Expiry </td>
<td> <Button value='$id' type='submit' name='aprbtn' class='btn btn-success'> Accept Ad </Button </td>

</tr>
";

    }

    echo " </table> </<form>";
} else {
    echo "No Dealer Ads ";
}
?>

</body>
</html>


<?php

include './dbcon.php';
if(isset($_POST['aprbtn']))

{

  $Id=$_POST["aprbtn"];

$Fid=$_SESSION['Did'];


    $sql = "UPDATE `FarmerAds` SET `Dealer_Id`=$Fid WHERE `id`=$Id";
  $result = $conn->query($sql);

  if($result===TRUE){
echo "<script> alert('Ad Approved Succesfully') </script>";

echo "<script> window.location.href='viewfarmerAds.php'</script>";


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
