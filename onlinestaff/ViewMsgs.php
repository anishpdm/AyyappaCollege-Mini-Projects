<?php
session_start();
 ?>
<?php
include './studNavbar.php';
?>

<?php
include './dbcon.php';
echo "<br>";



    $studId=  $_SESSION["studId"];
$sql = "SELECT   f.name,`S_Msg`, `F_Msg`, `S_Date`, `F_Date` FROM `Communication` c JOIN faculty f ON f.id=c.`F_Id` WHERE c.`S_Id`=$studId";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo " <table class='table'>    <thead class='thead-light'>
    <tr> <th> Faculty NAME </th> <th> Doubt </th><th> Answer </th><th> Asked Date </th> <th> Answered Date </th> </tr>
    </thead>
    ";
    // output data of each row
    while($row = $result->fetch_assoc()) {

$name= $row["name"];
$S_Msg= $row["S_Msg"];
$F_Msg= $row["F_Msg"];
$S_Date= $row["S_Date"];
$F_Date= $row["F_Date"];

echo " <tr> <td>$name </td> <td>$S_Msg </td><td>$F_Msg </td><td>$S_Date </td> <td>$F_Date </td> </tr>
";

    }

    echo " </table>";
} else {
    echo "No Messages to Load";
}
?>

</body>
</html>
