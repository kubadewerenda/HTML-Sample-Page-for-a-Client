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
                        $imie = $_POST['imie'];
                        $email = $_POST['email'];
                        $wiadomosc = $_POST['wiadomosc'];
                        $tel = $_POST['tel'];

                        $to = "diamondcare.kontakt@gmail.com";

                        $subject = "Zapytanie Diamond Care";
                        $txt= "Imię: ". $imie . "\r\n Email: ". $email . "\r\n Telefon: ". $tel ."\r\n Wiadomość: ". $wiadomosc;
                        $headers = "Od: noreply@diamondcare.com";
                        if($email!=NULL){
                            mail($to,$subject,$txt,$headers);
                        }
                    ?>
            <section class="po">
                <article class="">
                    <h2>Dziekujemy za wiadomość!</h2>
                    <?php
                        echo "<p>Witaj ".$imie.", skontaktujemy się z tobą jak najszybciej. Oczekuj odpowiedzi pod adresem e-mail: ".$email.".<br>Pozdrawiamy Diamond Care.</p>";
                    ?>
                </article>               
            </section>
            <a class="po__close" href="Kontakt.html"><img src="css/img/x.png" alt="" width="32" height="32"></a>
        </body>
    </html>
                