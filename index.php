<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8" />
        <title>Diamond care</title>
        <link rel="shortcut icon" href="/css/img/logo.png" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="/css/styleg.css" />
    </head>
    <body>
        <?php require_once __DIR__ . '/components/Header/header.php'; ?>

        <main class="container-fluid container-7xl">
            <section class="row margin-items">
                <article class="col-md-6 text-center">
                <h2 class="h2home">Zadbaj o swoje auto</h2>
                <p class="p1">Nie masz czasu na dbanie o swój pojazd? Oddaj go nam, a się nim zaopiekujemy!</p>
                </article>
            </section>

            <section class="row margin-items">
                <article class="col-md-6 offset-md-6 text-center">
                <h2 class="h2home-right">Doświadczenie</h2>
                <p class="p2">
                    Jesteśmy zespołem DIAMOND CARE i mamy przyjemność pracować w branży detailingowej od wielu lat. Nasze
                    doświadczenie w tej dziedzinie jest bogate i z pasją dzielimy się naszą wiedzą oraz umiejętnościami z
                    klientami, którzy zaufali nam i opiece nad swoimi samochodami. Podczas kariery naszej firmy mieliśmy okazję
                    pracować nad różnymi rodzajami samochodów, od zwykłych codziennych po ekskluzywne i klasyczne modele.
                    Każdego klienta i każdy samochód traktujemy indywidualnie, dbając o najmniejsze detale i zapewniając
                    kompleksową pielęgnację.
                </p>
                </article>
            </section>

            <section class="row margin-items">
                <article class="col-md-6 text-center">
                <h2 class="h2home">Rekomendacje</h2>
                <p class="p1">
                    Jesteśmy niezawodną firmą zajmującą się detailingiem. Nasz profesjonalizm, dokładność i pasja do detali
                    sprawiają, że każdy samochód wygląda jak nowy. Dzięki naszym usługom Twój samochód zyska nieskazitelny
                    blask, który przyciągnie spojrzenia na każdej drodze.
                </p>
                </article>
            </section>

            <section class="row">
                <article class="col-12 col-lg-6 text-center">
                <input type="button" class="przycisk" onclick="location.href='Cennik.php';" value="SPRAWDŹ CENY" />
                </article>
                <article class="col-12 col-lg-6 text-center">
                <input type="button" class="przycisk" onclick="location.href='Kontakt.php';" value="SKONTAKTUJ SIĘ Z NAMI" />
                </article>
            </section>
        </main>

        <?php require_once __DIR__ . '/components/Footer/footer.php'; ?>
    </body>
</html>
