<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Marika Guardi</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
    <link rel="stylesheet" type="text/css" href="css/stile.css">
    <?php if (basename($_SERVER['PHP_SELF']) === 'index.php'): ?>
        <link rel="stylesheet" type="text/css" href="css/stile-index.css">
    <?php else: ?>
        <link rel="stylesheet" type="text/css" href="css/stile-progetto.css">
    <?php endif; ?>
</head>

<body>
    <header>
        <nav id="hamburger-menu" class="hamburger-menu">
            <a href="#hamburger-menu" class="label-controllo" title="Apri menu">
                <span></span>
            </a>
            <a href="#main" class="label-controlloChiuso" title="Chiudi menu">
                <span></span>
            </a>
            <a href="index.php" class="logo" title="Torna alla home"><img src="img/logo.png" alt="logo" width="40"></a>
            <ul id="menu">
                <li><a class="vociMenu" href="index.php#home" title="Vai alla sezione Home">Home</a></li>
                <li><a class="vociMenu" href="index.php#chi-sono" title="Vai alla sezione Chi sono">Chi sono</a></li>
                <li><a class="vociMenu" href="index.php#portfolio" title="Vai alla sezione Portfolio">Servizi</a></li>
            </ul>
        </nav>
    </header>
    <main id="main">