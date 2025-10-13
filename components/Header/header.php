<?php
    $current = basename($_SERVER['SCRIPT_NAME']);
    $isActive = fn($files) => in_array($current, (array)$files) ? 'active' : '';
?>
<header class="container-fluid hero">
    <h1 class="container-h1">
        <img class="diamond-napis" src="/css/img/diamond.png" alt="Diamond Care">
        <img class="diamond-logo" src="/css/img/logo.png" alt="Diamond Care logo">
    </h1>

    <nav class="navbar navbar-expand-lg navbar-dark margines">
        <a class="navbar-brand" href="/index.php">
        <img src="/css/img/logo.png"  alt="Diamond Care" class="header-sm-logo d-inline-block align-bottom">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu"
                aria-controls="mainmenu" aria-expanded="false" aria-label="Przełącznik nawigacji">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainmenu">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link nav-underline <?= $isActive(['index.php']) ?>" href="/index.php">Home</a>
            </li>
            <li class="nav-item"><a class="nav-link nav-underline <?= $isActive(['Detailing.php']) ?>" href="/Detailing.php">Oferty</a></li>
            <li class="nav-item"><a class="nav-link nav-underline <?= $isActive(['Cennik.php']) ?>" href="/Cennik.php">Cennik</a></li>
            <li class="nav-item"><a class="nav-link nav-underline <?= $isActive(['About.php']) ?>" href="/About.php">O nas</a></li>
            <li class="nav-item"><a class="nav-link nav-underline <?= $isActive(['Efekty.php']) ?>" href="/Efekty.php">Realizacje</a></li>
            <li class="nav-item"><a class="nav-link nav-underline <?= $isActive(['Kontakt.php']) ?>" href="/Kontakt.php">Kontakt</a></li>
        </ul>
        </div>
    </nav>
</header>
