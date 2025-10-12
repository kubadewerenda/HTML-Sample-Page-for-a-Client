<?php
    $current = basename($_SERVER['SCRIPT_NAME']);
    $isActive = fn($files) => in_array($current, (array)$files) ? 'active' : '';
?>
<header class="container-fluid">
    <h1 class="container-h1">
        <img class="diamond-napis" src="/css/img/diamond.png" alt="Diamond Care">
        <img class="diamond-logo" src="/css/img/logo.png" alt="Diamond Care logo">
    </h1>

    <nav class="navbar navbar-expand-lg navbar-dark margines">
        <a class="navbar-brand" href="/index.php">
        <img src="/css/img/logo.png" width="60" height="40" alt="Diamond Care" class="d-inline-block align-bottom">
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

            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle nav-underline <?= $isActive(['Detailing.php','Akcesoria.php']) ?>" href="#" data-bs-toggle="dropdown" role="button" aria-expanded="false" id="submenu" aria-haspopup="true">Oferty</a>
            <div class="dropdown-menu" aria-labelledby="submenu">
                <a class="dropdown-item <?= $isActive(['Detailing.php']) ?>" href="/Detailing.php">Detailing</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item <?= $isActive(['Akcesoria.php']) ?>" href="/Akcesoria.php">Akcesoria</a>
            </div>
            </li>
            <li class="nav-item"><a class="nav-link nav-underline <?= $isActive(['Cennik.php']) ?>" href="/Cennik.php">Cennik</a></li>
            <li class="nav-item"><a class="nav-link nav-underline <?= $isActive(['Efekty.php']) ?>" href="/Efekty.php">Efekty</a></li>
            <li class="nav-item"><a class="nav-link nav-underline <?= $isActive(['Kontakt.php']) ?>" href="/Kontakt.php">Kontakt</a></li>
        </ul>
        </div>
    </nav>
</header>
