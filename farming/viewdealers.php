<?php
include './adminnavbar.php';
?>

<?php
include './dbcon.php';
echo "<br>";
$sql = "SELECT `id`, `name`, `address`, `phoneno`, `mailId`, `uname`, `passwd`, `status` FROM `dealer` ";
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


echo " <tr> <td>$name </td> <td>$address </td><td>$phoneno </td> <td>$mailId </td> </tr>
";

    }

    echo " </table>";
} else {
    echo "No Faculties";
}
?>
    
</body>
</html>