<?php
$json_data = file_get_contents('data/portfolio.json');
$dati = json_decode($json_data, true);
$progetto = $dati['portfolio'][2]; // Per progetto3.php usiamo il terzo progetto
?>

<?php include 'includes/header.php'; ?>

<section class="portfolio" id="portfolio">
    <h2><?php echo $progetto['titolo']; ?></h2>
    <div class="portfolio-grid">
        <div class="portfolio-item">
            <img src="img/img1.jpg" alt="<?php echo $progetto['titolo']; ?>">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit...</p>
            <img src="img/img2.png" alt="<?php echo $progetto['titolo']; ?>">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit...</p>
            <img src="img/img3.jpg" alt="<?php echo $progetto['titolo']; ?>">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit...</p>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>