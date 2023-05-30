<?php
    $conn = mysqli_connect('localhost','root','','egzamin3');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Wycieczki i urlopy</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='styl3.css'>
</head>
<body>
    <section class="baner">
        <h1>BIURO PODROZY</h1>
    </section>
    <section class="lewy">
        <h2>KONTAKT</h2>
        <a href="mailto:biruo@wycieczki.pl">napisz do nas</a>
        <p>telefon: 555666777</p>
    </section>
    <section class="s">
        <h2>GALERIA</h2>
        <?php
            $zapytanie = "SELECT nazwaPliku,podpis from zdjecia order by podpis";
            $result = mysqli_query($conn,$zapytanie);
            while($row = mysqli_fetch_assoc($result)){
                echo  '<img src="img/'.$row['nazwaPliku'].'" alt="'.$row['podpis'].'" class="galeriaImg"/>'; 
            }

        ?>
    </section>
    <section class="prawy">
        <h2>PROMOCJE</h2>
        <table>
            <tr>
                <td>Jesien</td>
                <td>Grupa 5+</td>
                <td>Grupa 10+</td>
            </tr>
            <tr>
                <td>5%</td>
                <td>10%</td>
                <td>15%</td>
            </tr>
        </table>
    </section>
    <section class="dane">
        <h2>LISTA WYCIECZEK</h2>
        <?php
            $zapytanie2 = "SELECT id,dataWyjazdu,cel,cena from wycieczki Where dostepna = 1";
            $result2 = mysqli_query($conn,$zapytanie2);
            while($row2 = mysqli_fetch_assoc($result2)){
                echo $row2['id'].' '.$row2['dataWyjazdu'].' '.$row2['cel'].' '.$row2['cena'].'<Br>' ; 
            }
        ?>
    </section>
    <footer class="footer">
        <p>Strone wykonal: ja</p>
    </footer>
</body>
<script src='main.js'></script>
</html>
<?php
    mysqli_close($conn);
?>