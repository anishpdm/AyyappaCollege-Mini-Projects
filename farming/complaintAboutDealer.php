<?php
include './farmernavbar.php';
?>

<?php
include './dbcon.php';
echo "<br>";
$sql = "SELECT `id`, `name`, `address`, `phoneno`, `mailId` FROM `dealer` WHERE status=1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo " <table class='table'>    <thead class='thead-light'>
    <tr> <th>NAME </th> <th>address </th><th>phoneno </th> <th>Email </th>  </tr>
    </thead>
    ";
    // output data of each row
    while($row = $result->fetch_assoc()) {

$name= $row["name"];
$address= $row["address"];
$phoneno= $row["phoneno"];

$mailId= $row["mailId"];

$id= $row["id"];


echo " <tr> <td>$name </td> <td>$address </td><td>$phoneno </td> <td>$mailId </td> <td><a class='btn btn-primary' href='sndcmplaint1.php?id=$id'> Raise Complaint </a> </td>   </tr>
";

    }

    echo " </table>";
} else {
    echo "No Dealers";
}
?>

</body>
</html>
