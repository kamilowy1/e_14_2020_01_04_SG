<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Gromady kręgowców</title>
    <link rel="stylesheet" href="style12.css">
</head>
<body>
    <div id="menu">
     <a href="gromada-ryby.html" class="odnosnik">gromada ryb</a>
     <a href="gromada-ptaki.html" class="odnosnik">gromada ptaków</a>
     <a href="gromada-ssaki.html" class="odnosnik">gromada ssaków</a>
    </div>
        <div id="logo">
         <h2>GROMADY KRĘGOWCÓW</h2>
        </div>
          <div id="lewy">
<?php
// utworznienie zmiennych polaczeniowych 

$server = 'localhost';
$user = 'root';
$passwd = '';
$dbname = 'baza1';

$conn = mysqli_connect($server,$user,$passwd,$dbname);

/*
if(!$conn){
    die ("fatal error:".mysqli_error($conn));
} echo "jest okej";
*/

$sql = "SELECT `id`, `Gromady_id`, `gatunek`, `wystepowanie` FROM `zwierzeta` WHERE `Gromady_id`='4' OR `Gromady_id`='5';";
$zapytanie = mysqli_query($conn,$sql);

while($wynik = mysqli_fetch_row($zapytanie)){
    echo "<p>". $wynik[0]. " " .$wynik[2]. "</p>";
    echo "<br>";
    echo "<p>". "Występowanie:". $wynik[3].",". " gromada ";
    if($wynik[1]==4){
        echo "ptaki";
    } else echo "ssaki";
    echo "</p>";
    echo "<br>";
    echo "<hr>";
}

?>
          </div>
             <div id="prawy">
              <h1>PTAKI</h1>
              <ol>
<?php

$sql2 = "SELECT `gatunek`, `obraz` FROM `zwierzeta` WHERE `Gromady_id`='4';";
$zapytanie2 = mysqli_query($conn,$sql2);

while($wynik2 = mysqli_fetch_row($zapytanie2)){
    echo  "<li>"."<a href='$wynik2[1]'>". $wynik2[0]."</li>" . "</a>";
}

mysqli_close($conn);
?>
              </ol>
              <img src="sroka.jpg" alt="Sroka zwyczajna, gromada ptaki">
             </div>
                <div id="stopka">
                Stronę o kręgowcach przygotował: 000000000
                </div>
</body>
</html>