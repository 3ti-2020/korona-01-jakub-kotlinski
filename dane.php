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
        $dbname = "jakub_kotliński";

        $conn = new mysqli($servername, $username, $password, $dbname);

        echo("<table>");
    
        $sql = "SELECT * FROM klienci";
        $result = $conn->query( $sql );
        echo("<tr>
        <th>Id</th>
        <th>Imie</th>
        <th>Nazwisko</th>
        ");

        While( $row = $result->fetch_assoc() )
    {
        echo("<tr>");
        echo ( "<td>".$row['id']."</td><td>".$row['imie']."</td><td>".$row['nazwisko']
        "</td>");
        echo("</tr>");
    }



        echo("</table>");
    ?>
</body>
</html>