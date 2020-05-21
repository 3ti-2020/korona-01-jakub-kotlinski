<?php 

require("connection.php");
$imie = $_GET["imie"];
$nazwisko = $_GET["nazwisko"];

$sql1 = "SELECT `imie`, `nazwisko`, `nazwa` FROM `osoby`, `spis_produktow`, `zamowienia` WHERE `imie`='".$imie."' AND `nazwisko`='".$nazwisko."' AND `osoby`.`id`=`zamowienia`.`id_klient` AND `spis_produktow`.`id`=`zamowienia`.`id_produktu`";


$result = $conn->query( $sql1 );

echo("<table class='moja_tabela'>");

echo("<tr class= 'row'>
        <th class='col'>imie</th>
        <th class='col'>nazwisko</th>
        <th class='col'>nazwa</th>
    </tr>");

While( $row = $result->fetch_assoc() )
{
    echo("<tr class='row'>");
    echo("
    <td class='col'>".$row['imie']."</td><td class='col'>".$row['nazwisko']."
    </td><td class='col'>".$row['nazwa']."</td>");
    echo("</tr>");
}

echo("</table>"); 

//header('Location: /Strefa_klienta.php');

$conn->close(); 

?>