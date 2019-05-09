<?php
session_start();
 ?>
<?php
include './farmernavbar.php';
?>

<?php
include './dbcon.php';
echo "<br>";



    $studId=  $_SESSION["facId"];
$sql = "SELECT m.`id`, d.name, `Fmessage`, `Dmessage` FROM `Messages` m join dealer d on d.id=m.`did` where m.`fid`=$studId";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo " <table class='table'>    <thead class='thead-light'>
    <tr> <th> DEALER NAME </th> <th> Message </th><th> Reply </th>  </tr>
    </thead>
    ";
    // output data of each row
    while($row = $result->fetch_assoc()) {

$id= $row["id"];
$name= $row["name"];
$Fmessage= $row["Fmessage"];
$Dmessage= $row["Dmessage"];

echo " <tr> <td>$name </td> <td>$Fmessage </td><td>$Dmessage </td>  <td> <a href='giveanswer1.php?qid=$id&dbt=$Dmessage' class='btn btn-info'> Reply </button> </td> </tr>
";

    }

    echo " </table>";
} else {
    echo "No Messages to Load";
}
?>

</body>
</html>
