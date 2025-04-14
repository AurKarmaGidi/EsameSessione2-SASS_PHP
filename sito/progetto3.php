<?php 
require_once 'functions.php';
$dati = loadPortfolioData();
$progetto = $dati['portfolio'][2]; // Terzo progetto
?>

<?php renderHeader(); ?>

<section class="project-detail">
    <div class="container">
        <h1><?php echo $progetto['titolo']; ?></h1>
        
        <div class="project-images">
            <img src="img/img1.jpg" alt="<?php echo $progetto['titolo']; ?>">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit...</p>
            <img src="img/img2.png" alt="<?php echo $progetto['titolo']; ?>">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit...</p>
            <img src="img/img3.jpg" alt="<?php echo $progetto['titolo']; ?>">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit...</p>
        </div>
        
        <a href="index.php#portfolio" class="cta-button" title="Torna alla lista dei progetti">Torna ai progetti</a>
    </div>
</section>

<?php renderFooter(); ?>