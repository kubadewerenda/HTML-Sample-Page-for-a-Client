<!DOCTYPE html>
<html lang="pl">
    <head>
        <title>Diamond care-Cennik</title>
        <link rel="shortcut icon" href="css/img/logo.png">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> 
        <link rel="stylesheet" type="text/css" href="css/stylecen.css">       
    </head>
    <body class="coutainer">
        <?php require_once __DIR__ . '/components/Header/header.php'; ?>
        
        <main class="container-fluid">
        <section class="row">
                <p class="p-main col-md-8 offset-md-2">Oferujemy usługi detailingowe o doskonałej jakości w konkurencyjnych cenach. Dążymy do zapewnienia klientom optymalnego stosunku jakości do ceny, gwarantując profesjonalną pielęgnację samochodu bez konieczności nadmiernego obciążania portfela. Nasza firma stawia na skuteczne rozwiązania i zadowolenie klientów, dlatego nasze ceny
                     są uczciwe i przystępne. Niezależnie od budżetu, zapewniamy usługi, które spełnią oczekiwania i przekroczą oczekiwania naszych klientów.</p>
            </section>
            <section class="margin-items"> 
                <article>
                    <h2 class="h2home-left">DETAILING</h2>                                        
                </article>
                <article>
                    <table class="tab-cen">
                        <tr>
                            <td>Usługa</td>
                            <td>Cena(netto)</td>
                        </tr>
                        <?php
                            include "plik.php";
                            $zapytanie = "SELECT * FROM detailing;";
                            $wynik = mysqli_query($conn, $zapytanie);
                            if (!$wynik) {
                                echo "Błąd zapytania" . mysqli_error($conn);
                            } else {
                                while ($wiersz = mysqli_fetch_assoc($wynik)) {
                                    echo "<tr><td>" . $wiersz["uslugad"] . "</td><td>" . $wiersz["cenad"] . "</td></tr>";
                                }
                                echo "</table>";
                            }
                            mysqli_close($conn);
                        ?>
                </article> 
            </section>
            <section class="margin-items"> 
                <article>
                    <h2 class="h2home-left">AKCESORIA</h2>                                        
                </article>
                <article>
                    <table class="tab-cen">
                        <tr>
                            <td>Usługa</td>
                            <td>Cena(netto)</td>
                        </tr>
                        <?php
                            include "plik.php";
                            $zapytanie = "SELECT * FROM akces;";
                            $wynik = mysqli_query($conn, $zapytanie);
                            if (!$wynik) {
                                echo "Błąd zapytania" . mysqli_error($conn);
                            } else {
                                while ($wiersz = mysqli_fetch_assoc($wynik)) {
                                    echo "<tr><td>" . $wiersz["uslugaa"] . "</td><td>" . $wiersz["cenaa"] . "</td></tr>";
                                }
                                echo "</table>";
                            }
                            mysqli_close($conn);
                        ?>
                </article>
            </section>
        </main>

        <?php require_once __DIR__ . '/components/Footer/footer.php'; ?>  
    </body>
</html>