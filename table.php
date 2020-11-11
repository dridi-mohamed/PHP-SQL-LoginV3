<!DOCTYPE html>
<html>

<head>
    <title>Table with database</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            /* fonte*/
            color: black;
            font-family: monospace;
            font-size: 25px;
            text-align: left;
        }
        /* in thy top*/
        th {
            background-color: black;
            color: white;
        }
        /* first */
        tr:nth-child(even) {
            background-color: whitesmoke;
        }
    </style>
</head>

<body>

<center> <h3> Novocall Databes Tables  </h3> </center>

<br>
<table>
        <tr>
            <th>Id</th>
            <th>firsname</th>
            <th>lastname</th>
            <th></th>
            <th>Login</th>
            <th>Passwor</th>
            <th>Data inscrption</th>
        </tr>




<?php
$servername = "192.168.1.212";
$username = "root";
$password = "root";
$dbname = "test";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$tab_name = $_POST['showtab'];

$sql = "SELECT id, firstname, lastname,login_name,pass,reg_date  FROM $tab_name";
$result = $conn->query($sql);
// DIPLAY SQL TABLE NAME AND THE DB NMAE
echo '<h1>' . 'Tablename: ' .$tab_name. '</h1>';
echo '<h1>' . 'Database: ' .$dbname. '</h1>'.'<br>';
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {

echo "<tr><td>" . $row["id"]. "</td><td>" . $row["firstname"] . "</td><td>"
. $row["lastname"]. "</td><td>"."</td><td>" . $row["login_name"]. "</td><td>".$row["pass"]."</td><td>".$row["reg_date"]."</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();

?>
           
</table>
</body>

</html>