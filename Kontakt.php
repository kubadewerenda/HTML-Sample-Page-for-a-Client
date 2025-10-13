<!DOCTYPE html>
<html lang="pl">
    <head>
        <title>Diamond care - Kontakt</title>
        <link rel="shortcut icon" href="css/img/logo.png">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> 
        <link rel="stylesheet" type="text/css" href="css/stylekon.css">       
    </head>
    <body>
        <?php require_once __DIR__ . '/components/Header/header.php'; ?>
        
        <main class="container-fluid container-7xl">
            <section class="row margin-k">
                <article class="col-md-8 offset-md-2">
                    <h2 class="h2home-sr">ZAPRASZAMY!</h2>
                    <p class="p-sr">Twoje auto zasługuje na luksusową pielęgnację. Diamond Care to firma, która pozwoli Ci odzyskać pierwotny blask Twojego pojazdu.<br>Skontaktuj się z nami już teraz i umów na naszą usługę detailingu!</p>
                </article>
            </section>
            <section class="row border-kon margin-k">
                <article class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 text-center">
                    <iframe src="https://www.google.com/maps?q=Wiejska%2032,%20Lublin&output=embed" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </article>
                <article class="col-12 col-sm-5 col-md-4 col-lg-4 col-xl-4">
                    <section class="row">
                        <p class="p-kon"><a href="Kontakt.html"><img src="css/img/phone.png" width="24" height="24" alt="#"></a>+48 664 714 423</p>
                        <p class="p-kon"><a href="Kontakt.html"><img src="css/img/place.png" width="24" height="24" alt="#"></a>Lublin, ul.Wiejska 32</p>
                        <p class="p-kon"><a href="Kontakt.html"><img src="css/img/email.png" width="24" height="24" alt="#"></a>Diamondcare.kontakt@gmail.com</p>
                    </section>                    
                </article>
            </section>
            <section class="row margin-items">
                <article class="col-md-6 offset-md-6 text-center">
                    <h2 class="h2home-right">Godziny otwarcia</h2>
                    <p class="p2">Poniedziałek-Sobota:8.00-16.00<br>Niedziela:10.00-15.00</p>
                </article>
            </section>
            <section class="row margin-uz">
                <p class="p-kon col-12 text-center">Używamy kosmetyków i narzędzi tylko najwyższej klasy.</p>
            </section>
            <section class="row">
                <article class="col-md-8 offset-md-2">
                    <form method="post" class="formularz" action="mail.php">
                        <h2 class="h2-form">Napisz do nas</h2>
                        <input type="text" class="form-in" placeholder="Imię" name="imie" required>
                        <input type="email" class="form-in" placeholder="E-Mail" name="email" required>
                        <input type="text" class="form-in" placeholder="Numer telefonu" name="tel" required><br><br>
                        <textarea rows="1"  class="form-in" placeholder="Jak możemy ci pomóc?" name="wiadomosc"></textarea>
                        <input type="submit" class="form-but form-send" value="Wyslij wiadomości">
                    </form>
                </article>
            </section>            
        </main>

        <?php require_once __DIR__ . '/components/Footer/footer.php'; ?>      
    </body>
</html>