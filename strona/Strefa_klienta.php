<!DOCTYPE html>
<html>

<head>
	<title>Jakub Kotliński</title>
	<link rel="stylesheet" href="Strefa_klienta.css">
	<meta charset="UTF-8">
</head>

<body>
	<div class="container">
        <div class="item1">
            <div class="main"><a class="link1" href="index.html"><img class="home" src="https://image.flaticon.com/icons/png/512/69/69524.png"></a></div>
            <div class="name"><h1>Sklep z Grami - Jakub Kotliński</h1></div>
            <div class="name"><h3>Strefa klienta</h3></div>
        </div>
        <div class="item2">
            <div class="input">
                <?php
                    require("connection.php");
                    echo("<form action='Strefa_klienta.php'>
                        <input type='text' name='imie' placeholder='imie'>
                        <br>
                        <br>
                        <input type='text' name='nazwisko' placeholder='nazwisko'>
                        <input type='submit' value='sprawdź'>
                    </form>
                    ");
                    error_reporting(0);
                    echo("<br>");
                    if ($_GET["imie"]=='Jakub' && $_GET["nazwisko"]=='Kotlinski')
                    {
                        $sql2 = "SELECT imie, nazwisko, nazwa FROM osoby, spis_produktow, zamowienia WHERE osoby.id=zamowienia.id_klient AND spis_produktow.id=zamowienia.id_produktu ORDER BY(osoby.id)";

                        $result1 = $conn->query( $sql2 );

                        echo("<table class='moja_tabela'>");

                        echo("<tr class= 'row'>
                                <th class='col'>imie</th>
                                <th class='col'>nazwisko</th>
                                <th class='col'>nazwa</th>
                            </tr>");

                        While( $row = $result1->fetch_assoc() )
                        {
                            echo("<tr class='row'>");
                            echo("
                            <td class='col'>".$row['imie']."</td><td class='col'>".$row['nazwisko']."
                            </td><td class='col'>".$row['nazwa']."</td>");
                            echo("</tr>");
                        }

                        echo("</table>"); 

                        $conn->close(); 
                    
                    }
                    elseif (isset($_GET["imie"]) && isset($_GET["nazwisko"]))
                    {
                        
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

                        $conn->close(); 

                    }
                ?>
            </div>
            <div class="kalku">
            <table>
                <tr>
                    <td><button id="num1" class="num" value="1">1</button></td>
                    <td><button id="num2" class="num" value="2">2</button></td>
                    <td><button id="num3" class="num" value="3">3</button></td>
                </tr>
                <tr>
                    <td><button id="num4" class="num" value="4">4</button></td>
                    <td><button id="num5" class="num" value="5">5</button></td>
                    <td><button id="num6" class="num" value="6">6</button></td>
                </tr>
                <tr>
                    <td><button id="num7" class="num" value="7">7</button></td>
                    <td><button id="num8" class="num" value="8">8</button></td>
                    <td><button id="num9" class="num" value="9">9</button></td>
                </tr>
                <tr>
                    <td><button id="num0" class="num" value="0">0</button></td>
                    <td><button id="dod" class="num" value="+">+</button></td>
                    <td><button id="odj" class="num" value="-">-</button></td>
               </tr>
                <tr>
                    <td><button id="pom" class="num" value="*">*</button></td>
                    <td><button id="pod" class="num" value="/">/</button></td>
                    <td><button id="row" class="num" value="=">=</button></td>
                    <td><button id="wyc" class="num" value="C">C</button></td>
                </tr>
            </table>
            <div id="ekrany">
            <div id="ekr" class="ekr1"></div>
            <div id="ekrznak" class="ekr2"></div>
            <div id="ekrliczba" class="ekr3"></div>
            <div id="ekrwynik" class="ekr4"></div>
            </div>
            
            
        </div>
        <script src="script.js"></script>
            
        </div>
    </div>
</body>
</html>