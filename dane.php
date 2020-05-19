<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="index.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "jakub_kotlinski";

        $conn = new mysqli($servername, $username, $password, $dbname);

        echo("<table>");
    
        $sql = "SELECT imie, nazwisko, uprawnienia FROM `osoby`, `uprawnienia` WHERE id_uprawnienia=uprawnienia.id";
        $result = $conn->query( $sql );
        echo("<tr>
        <th>Imie</th>
        <th>Nazwisko</th>
        <th>Uprawnienia</th>
        ");

        While( $row = $result->fetch_assoc() )
    {
        echo("<tr>");
        echo ( "<td>".$row['imie']."</td><td>".$row['nazwisko']."</td><td>".$row['uprawnienia'].
        "</td>");
        echo("</tr>");
    }

        echo("</table>");
        echo("<br>");
        echo("<table>");
    
        $sql = "SELECT * FROM spis_produktow";
        $result = $conn->query( $sql );
        echo("<tr>
        <th>Id</th>
        <th>Nazwa</th>
        <th>Ilość w magazynie</th>
        <th>Ilość sprzedanych</th>
        ");

        While( $row = $result->fetch_assoc() )
    {
        echo("<tr>");
        echo ( "<td>".$row['id']."</td><td>".$row['nazwa']."</td><td>".$row['ilosc_magazyn']."</td><td>".$row['ilosc_sprzedarz'].
        "</td>");
        echo("</tr>");
    }



        echo("</table>");
    ?>
</body>
</html>