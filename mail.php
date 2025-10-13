<!DOCTYPE html>
<html lang="pl">
    <head>
        <title>Dziekujemy za wiadomość</title>
        <link rel="shortcut icon" href="css/img/logo.png">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> 
        <link rel="stylesheet" type="text/css" href="css/stylemail.css">       
    </head>
    <body class="coutainer">
        
                    <?php
                        error_reporting(E_ALL);
                        ini_set('display_errors', 1);

                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            $imie = trim($_POST['imie'] ?? '');
                            $email = trim($_POST['email'] ?? '');
                            $wiadomosc = trim($_POST['wiadomosc'] ?? '');
                            $tel = trim($_POST['tel'] ?? '');

                            if ($imie === '' || !filter_var($email, FILTER_VALIDATE_EMAIL) || $wiadomosc === '') {
                                exit('Błąd: uzupełnij poprawnie imię, e-mail i wiadomość.');
                            }

                            $to = "kubadewerendaa@gmail.com";
                            $subject = "Zapytanie Diamond Care";

                            $txt  = "Imię: {$imie}\r\n";
                            $txt .= "Email: {$email}\r\n";
                            $txt .= "Telefon: {$tel}\r\n";
                            $txt .= "Wiadomość:\r\n{$wiadomosc}\r\n";

                            $headers  = "From: Diamond Care <noreply@diamondcare.com>\r\n"; 
                            $headers .= "Reply-To: {$email}\r\n";
                            $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
                            $headers .= "MIME-Version: 1.0\r\n";

                            $ok = mail($to, $subject, $txt, $headers);

                            if (!$ok) {
                                exit('Nie udało się wysłać (brak/niepoprawna konfiguracja SMTP dla mail()).');
                            }

                            echo 'Wysłano!';
                        }
                    ?>
            <!-- POPUP: sukces wysyłki -->
            <section class="po-overlay po--visible" role="dialog" aria-modal="true" aria-labelledby="po-title">
            <div class="po-modal">
                <button class="po-close" aria-label="Zamknij" onclick="window.location.href='Kontakt.php'">×</button>

                <div class="po-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" width="28" height="28">
                    <path d="M9.5 16.2 5.8 12.5l1.4-1.4 2.3 2.3 6.3-6.3 1.4 1.4-7.7 7.7z" fill="#1a1a1a"/>
                </svg>
                </div>

                <h2 class="po-title" id="po-title">Dziękujemy za wiadomość!</h2>

                <p class="po-text">
                <?php
                    echo "Witaj <strong>{$imie}</strong>, skontaktujemy się z Tobą jak najszybciej. 
                        Oczekuj odpowiedzi pod adresem e-mail: <strong>{$email}</strong>.<br> 
                        Pozdrawiamy — <strong>Diamond Care</strong>.";
                ?>
                </p>

                <div class="po-actions">
                <a href="/index.php" class="btn-cta">Strona główna</a>
                <a href="/Kontakt.php" class="btn-cta btn-cta--ghost">Wyślij kolejną</a>
                </div>
            </div>
            </section>

        </body>
    </html>
                