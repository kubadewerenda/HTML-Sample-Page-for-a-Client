<!DOCTYPE html>
<html lang="pl">
    <head>
        <title>Diamond care - Detailing</title>
        <link rel="shortcut icon" href="css/img/logo.png">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> 
        <link rel="stylesheet" type="text/css" href="css/styledet.css">       
    </head>
    <body>
        <?php require_once __DIR__ . '/components/Header/header.php'; ?>
        
        <main class="container-fluid container-7xl">
            <!-- LEAD -->
            <section class="row margin-top">
            <article class="col-md-8 offset-md-2 text-center">
                <h2 class="h2home-left">Specjalizacja: lampy & folie PPF</h2>
                <p class="p-sr">
                Skupiamy się na regeneracji i personalizacji lamp oraz ochronie lakieru foliami PPF klasy premium.
                Jakość, precyzja i pełna odpowiedzialność za efekt.
                </p>
            </article>
            </section>

            <!-- 1) LAMPY (tekst lewo, foto prawo) -->
            <section id="lampy" class="row margin-items align-items-center">
            <article class="col-md-6 text-center">
                <h2 class="h2home-left">Regeneracja i personalizacja lamp</h2>
                <p class="p1">
                Przywracamy przejrzystość kloszy i skuteczność oświetlenia. Polerowanie, rozklejanie, metalizacja odbłyśników,
                malowanie wnętrza i doposażenia (np. Bi-LED) — wszystko z naciskiem na estetykę i trwałość.
                </p>
            </article>
            <article class="col-md-6 text-center">
                <img src="css/detailingzdj/polerowanie.png" alt="Regeneracja lamp" class="img-fluid rounded-3 shadow-soft">
            </article>
            </section>

            <!-- 2) PPF (foto lewo, tekst prawo) -->
            <section id="ppf" class="row margin-items align-items-center">
            <article class="col-md-6 text-center order-1">
                <img src="css/detailingzdj/oklejanief.png" alt="Folie ochronne PPF" class="img-fluid rounded-3 shadow-soft">
            </article>
            <article class="col-md-6 text-center order-2">
                <h2 class="h2home-right">Folie ochronne PPF</h2>
                <p class="p2">
                Najwyższej klasy ochrona lakieru: odporność na odpryski, UV, sól i chemię. Realizujemy pełne fronty, całe auta
                i elementy szczegółowe, także wykończenia matowe lub przyciemnianie lamp.
                </p>
            </article>
            </section>

            <!-- 3) Korekta + powłoki (tekst lewo, foto prawo) -->
            <section class="row margin-items align-items-center">
            <article class="col-md-6 text-center">
                <h2 class="h2home-left">Korekta lakieru i powłoki ochronne</h2>
                <p class="p1">
                Usuwamy zmatowienia i zarysowania, przywracamy głębię koloru. Zabezpieczamy powłokami (m.in. grafenowymi),
                by lakier dłużej był śliski, łatwy w myciu i odporny na warunki.
                </p>
            </article>
            <article class="col-md-6 text-center">
                <img src="css/detailingzdj/korekta.png" alt="Korekta lakieru" class="img-fluid rounded-3 shadow-soft">
            </article>
            </section>

            <!-- 4) Suchy lód (foto lewo, tekst prawo) -->
            <section class="row margin-items align-items-center">
            <article class="col-md-6 text-center order-1">
                <img src="css/detailingzdj/podwozie.png" alt="Czyszczenie podwozia i komory" class="img-fluid rounded-3 shadow-soft">
            </article>
            <article class="col-md-6 text-center order-2">
                <h2 class="h2home-right">Czyszczenie podwozia i komory (suchy lód)</h2>
                <p class="p2">
                Ekologiczne i skuteczne usuwanie zabrudzeń bez wody i chemii. Idealne jako przygotowanie przed konserwacją,
                aplikacją powłok lub oklejaniem.
                </p>
            </article>
            </section>

            <!-- 5) Skóry (tekst lewo, foto prawo) -->
            <section class="row margin-items align-items-center">
            <article class="col-md-6 text-center">
                <h2 class="h2home-left">Renowacja i malowanie skór</h2>
                <p class="p1">
                Odnawiamy i barwimy elementy skórzane — bez widocznych przejść i różnic kolorystycznych. Naturalny wygląd,
                przyjemna faktura i zabezpieczenie na dłużej.
                </p>
            </article>
            <article class="col-md-6 text-center">
                <img src="css/detailingzdj/malowaniesk.png" alt="Renowacja skór" class="img-fluid rounded-3 shadow-soft">
            </article>
            </section>

            <!-- 6) Dodatkowe (foto lewo, tekst prawo) -->
            <section class="row margin-items align-items-center">
            <article class="col-md-6 text-center order-1">
                <img src="css/detailingzdj/przyciemnianiesz.png" alt="Dodatkowe usługi" class="img-fluid rounded-3 shadow-soft">
            </article>
            <article class="col-md-6 text-center order-2">
                <h2 class="h2home-right">Dodatkowe usługi</h2>
                <p class="p2">
                Przyciemnianie szyb, zabezpieczenia detali we wnętrzu (np. folie na ekrany), prace wykończeniowe — drobne dodatki,
                które mocno podnoszą komfort i estetykę.
                </p>
            </article>
            </section>
            <section class="margin-items">
            <div class="d-flex justify-content-center">
                <a class="btn-cta" href="/Cennik.php">Sprawdź ceny!</a>
            </div>
            </section>
        </main>

        <?php require_once __DIR__ . '/components/Footer/footer.php'; ?>    
    </body>
</html>