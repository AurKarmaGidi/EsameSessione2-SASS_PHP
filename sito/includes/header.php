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
        <nav class="navbar">
            <div class="navbar-container container">
                <a href="index.php" class="logo" title="Torna alla home">
                    <img src="img/logo.png" alt="logo" width="40">
                </a>
                
                <input type="checkbox" id="menu-toggle">
                <label for="menu-toggle" class="hamburger-lines">
                    <span class="line line1"></span>
                    <span class="line line2"></span>
                    <span class="line line3"></span>
                </label>
                
                <ul class="menu-items">
                    <li><a href="index.php#home" title="Vai alla sezione Home">Home</a></li>
                    <li><a href="index.php#chi-sono" title="Vai alla sezione Chi sono">Chi sono</a></li>
                    <li><a href="index.php#portfolio" title="Vai alla sezione Portfolio">Servizi</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main id="main">