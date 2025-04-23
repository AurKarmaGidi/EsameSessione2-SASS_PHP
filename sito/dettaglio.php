<?php 
require_once 'functions.php';

if (!isset($_GET['id'])) {
    header('Location: index.php');
    exit;
}

$progetto = getProjectById($_GET['id']);

if (!$progetto) {
    header('Location: index.php');
    exit;
}
?>

<?php renderHeader(); ?>

<section class="project-detail">
    <div class="container">
        <h1><?php echo $progetto['titolo']; ?></h1>
        
        <div class="project-images">
            <img src="<?php echo $progetto['immagine']; ?>" alt="<?php echo $progetto['titolo']; ?>">
            <p><?php echo $progetto['descrizione']; ?></p>
            
            <?php if (isset($progetto['immagini_aggiuntive'])): ?>
                <?php foreach ($progetto['immagini_aggiuntive'] as $img): ?>
                    <img src="<?php echo $img; ?>" alt="<?php echo $progetto['titolo']; ?>">
                <?php endforeach; ?>
            <?php endif; ?>
            
            <?php if (isset($progetto['dettagli'])): ?>
                <div class="project-info">
                    <h2>Dettagli del progetto</h2>
                    <p><?php echo $progetto['dettagli']; ?></p>
                </div>
            <?php endif; ?>
        </div>
        
        <a href="index.php#portfolio" class="cta-button" title="Torna alla lista dei progetti">Torna ai progetti</a>
    </div>
</section>

<?php renderFooter(); ?>