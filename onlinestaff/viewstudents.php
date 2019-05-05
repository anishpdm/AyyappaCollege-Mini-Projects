<?php
include './adminnavbar.php';
?>

<?php
include './dbcon.php';
echo "<br>";
$sql = "SELECT `id`, `name`, `dept`, `college` FROM `student` WHERE 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo " <table class='table'>    <thead class='thead-light'>
    <tr> <th>NAME </th> <th>DEPT </th><th>COLLEGE </th>  </tr>
    </thead>
    ";
    // output data of each row
    while($row = $result->fetch_assoc()) {

$name= $row["name"];
$dept= $row["dept"];
$college= $row["college"];


echo " <tr> <td>$name </td> <td>$dept </td><td>$college </td> </tr>
";

    }

    echo " </table>";
} else {
    echo "No Faculties";
}
?>
    
</body>
</html>