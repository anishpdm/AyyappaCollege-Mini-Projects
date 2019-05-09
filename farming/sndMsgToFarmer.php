<?php
session_start();
 ?>
<?php
include './dealernavbar.php';
?>

<?php
include './dbcon.php';
echo "<br>";



    $studId=  $_SESSION["Did"];
$sql = "SELECT m.`id`, d.name, `Fmessage`, `Dmessage` FROM `Messages` m join farmer d on d.id=m.`fid` where m.`did`=$studId";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo " <table class='table'>    <thead class='thead-light'>
    <tr> <th> Farmer NAME </th> <th> Message </th><th> Reply </th>  </tr>
    </thead>
    ";
    // output data of each row
    while($row = $result->fetch_assoc()) {

$id= $row["id"];
$name= $row["name"];
$Fmessage= $row["Fmessage"];
$Dmessage= $row["Dmessage"];

echo " <tr> <td>$name </td> <td>$Fmessage </td><td>$Dmessage </td>  <td> <a href='giveanswer2.php?qid=$id&dbt=$Fmessage' class='btn btn-info'> Reply </button> </td> </tr>
";

    }

    echo " </table>";
} else {
    echo "No Messages to Load";
}
?>

</body>
</html>
