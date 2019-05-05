<?php
include './adminnavbar.php';
?>

<?php
include './dbcon.php';
echo "<br>";
$sql = "SELECT `id`, `name`, `dept`, `college`, `unvsty`, `mainsub` FROM `faculty` WHERE 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo " <table class='table'>    <thead class='thead-light'>
    <tr> <th>NAME </th> <th>DEPT </th><th>COLLEGE </th><th>UNVSTY </th> <th>MAIN SUBJECT </th> </tr>
    </thead>
    ";
    // output data of each row
    while($row = $result->fetch_assoc()) {

$name= $row["name"];
$dept= $row["dept"];
$college= $row["college"];
$unvsty= $row["unvsty"];
$mainsub= $row["mainsub"];

echo " <tr> <td>$name </td> <td>$dept </td><td>$college </td><td>$unvsty </td> <td>$mainsub </td> </tr>
";

    }

    echo " </table>";
} else {
    echo "No Faculties";
}
?>
    
</body>
</html>