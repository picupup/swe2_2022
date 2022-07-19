<?php
require_once("../private/dbconnection.inc.php");
$conn = new mysqli($host, $user, $password, $database);
if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
} else {
$sql = "select * from itc_kunden";
$result = mysqli_query($conn, $sql);

    echo"<table>
    <tr>
        <th>id</th>
        <th>Vorname</th>
        <th>Nachname</th>
        <th>Geschlecht</th>
        <th>Geburtsdatum</th>
        <th>Geschäftlich/Privat</th>
        <th>AdressID</th>
    </tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['vorname']."</td>
                <td>".$row['nachname']."</td>
                <td>".$row['geschlecht']."</td>
                <td>".$row['gbdatum']."</td>
                <td>".$row['art']."</td>
                <td>".$row['adresse']."</td>
            </tr>";
    };
    echo"</table>";



    // $sql = "SELECT * from itc_kunden WHERE";



    // $stmt = $conn->prepare($sql);
    // $stmt->bind_param("s,s,s,s,s,i", $nachname, $geschlecht, $gbdatum, $art, $adresse);
    // $stmt->execute();
    // $stmt->store_result();
    // $stmt->bind_result($id, $vorname, $nachname, $geschlecht, $gbdatum, $art, $adresse);
    // $stmt->fetch();
    // $stmt->close();

    // echo "<table>";
    // echo "<tr>";
    // echo "<th>KundenID</th>";
    // echo "<td>" . $id . "</td>";
    // echo "<th>Vorname</th>";
    // echo "<td>" . $vorname . "</td>";
    // echo "<th>Nachname</th>";
    // echo "<td>" . $nachname . "</td>";
    // echo "<th>Geschlecht</th>";
    // echo "<td>" . $geschlecht . "</td>";
    // echo "<th>Geburtsdatum</th>";
    // echo "<td>" . $gbdatum . "</td>";
    // echo "<th>Geschäftlich oder Privat</th>";
    // echo "<td>" . $art . "</td>";
    // echo "<th>AdressID</th>";
    // echo "<td>" . $adresse . "</td>";
    // echo "</tr>";
    // echo "</table>";
}
?>