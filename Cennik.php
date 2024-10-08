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
        <header class="container-fluid">
            <h1 class="coutainer-h1">
                <img class="diamond-napis" src="css/img/diamond.png" alt="#">
                <img class="diamond-logo" src="css/img/logo.png" alt="#">       
            </h1>
            <nav class="navbar navbar-expand-lg navbar-dark margines">
                <a class="navbar-brand " href="Stronaglowna.html"><img src="css/img/logo.png" width="60" height="40" alt="" class="d-inline-block align-bottom"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Przełacznik nawigacji">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mainmenu">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="Stronaglowna.html">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle " href="#" data-bs-toggle="dropdown" role="button" aria-expanded="false" id="submenu" aria-haspopup="true">Oferty</a>
                            <div class="dropdown-menu" aria-labelledby="submenu">
                                <a class="dropdown-item dpi" href="Detailing.html">Detailing</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item dpi" href="Akcesoria.html">Akcesoria</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link activee" href="Cennik.php">Cennik</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Efekty.php">Efekty</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Kontakt.html">Kontakt</a>
                        </li>
                    </ul>
                </div>
              </nav>
        </header>
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
        <footer class="coutainer">
            <section class="text-center">
                <a href="Stronaglowna.html"><img  src="css/img/logo.png" alt="#" width="211" height="168"></a>                                   
            </section> 
                <section class="row">
                    <p class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center"><a href="Kontakt.html"><img src="css/img/phone.png" width="24" height="24" alt="#"></a>+48 664 714 423</p>
                    <p class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center"><a href="Kontakt.html"><img src="css/img/place.png" width="24" height="24" alt="#"></a>Morawica, ul.Diamentowa 5</p>
                    <p class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center"><a href="Kontakt.html"><img src="css/img/email.png" width="24" height="24" alt="#"></a>Diamondcare.kontakt@gmail.com</p>
                </section>
                <section class="text-center">
                    <a href="https://instagram.com/_diamond_care?igshid=MzRlODBiNWFlZA=="><img src="css/img/insta.png" width="24" height="24" alt="#"></a>
                    <a href="https://www.facebook.com/profile.php?id=100089979353049"><img src="css/img/fb.png" width="24" height="24" alt="#"></a>
                </section>
                <section class="row">
                    <p class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center">Copyright © Diamond Care</p>
                    <p class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center">Designed by Jakub Dewerenda</p>
                </section>                              
        </footer>    
    </body>
</html>