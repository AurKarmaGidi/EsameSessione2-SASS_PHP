<?php 
require_once 'functions.php';
$dati = loadPortfolioData();

// Recupera i dati del form se presenti
$form_data = $_SESSION['form_data'] ?? [];
$form_errors = $_SESSION['form_errors'] ?? [];
unset($_SESSION['form_data']);
unset($_SESSION['form_errors']);
?>

<?php renderHeader(); ?>

<!-- Hero Section -->
<section class="hero" id="home">
    <div class="hero-content">
        <h1><?php echo $dati['home']['titolo']; ?></h1>
        <p><?php echo $dati['home']['sottotitolo']; ?></p>
        <a href="#contact" class="cta-button" title="Vai alla sezione Contatti"><?php echo $dati['home']['testo_bottone']; ?></a>
    </div>
</section>

<!-- Chi sono Section -->
<section class="about" id="chi-sono">
    <div class="about-content">
        <div class="profile-card">
            <img src="<?php echo $dati['about']['foto']; ?>" alt="Marika Guardi">
            <h3>Marika Guardi</h3>
            <p class="title">Full Stack Web Developer</p>
        </div>
        
        <div class="about-text">
            <h2>Chi sono</h2>
            <p><?php echo $dati['about']['descrizione']; ?></p>
            
            <div class="skills">
                <span>HTML/CSS</span>
                <span>JavaScript</span>
                <span>PHP</span>
                <span>Sass</span>
                <span>MySQL</span>
            </div>
            
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos officiis ratione temporibus fuga placeat tempore hic veniam sapiente eius commodi dolorem, porro nostrum repellendus ullam sint libero voluptates deserunt explicabo?</p>
            
            <a href="#contact" class="cta-button" title="Vai alla sezione Contatti">Contattami</a>
        </div>
    </div>
</section>

<!-- Portfolio Section -->
<section class="portfolio" id="portfolio">
    <h2>Servizi</h2>
    <div class="portfolio-grid">
        <?php foreach ($dati['portfolio'] as $progetto): ?>
            <div class="portfolio-item">
                <img src="<?php echo $progetto['immagine']; ?>" alt="<?php echo $progetto['titolo']; ?>">
                <div class="portfolio-item-content">
                    <a href="dettaglio.php?id=<?php echo $progetto['id']; ?>" title="Vai alla pagina del progetto <?php echo $progetto['titolo']; ?>"><h3><?php echo $progetto['titolo']; ?></h3></a>
                    <p><?php echo $progetto['descrizione']; ?></p>
                    <a href="dettaglio.php?id=<?php echo $progetto['id']; ?>" class="cta-button" title="Vai alla pagina del progetto">Vedi dettagli</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- Contact Section -->
<section class="contact" id="contact">
    <h2>Contattami</h2>
    <form class="contact-form" action="salva_contatto.php" method="post" novalidate>
        <?php if (isset($_GET['success'])): ?>
            <div class="form-success">Il tuo messaggio è stato inviato correttamente!</div>
        <?php endif; ?>
        
        <?php if (!empty($form_errors)): ?>
            <div class="form-error">Correggi i seguenti errori:</div>
        <?php endif; ?>
        
        <div class="form-group <?php echo isset($form_errors['name']) ? 'has-error' : ''; ?>">
            <label for="name">Nome</label>
            <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($form_data['name'] ?? ''); ?>" required>
            <?php if (isset($form_errors['name'])): ?>
                <span class="error-message"><?php echo $form_errors['name']; ?></span>
            <?php endif; ?>
        </div>
        
        <div class="form-group <?php echo isset($form_errors['email']) ? 'has-error' : ''; ?>">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($form_data['email'] ?? ''); ?>" required>
            <?php if (isset($form_errors['email'])): ?>
                <span class="error-message"><?php echo $form_errors['email']; ?></span>
            <?php endif; ?>
        </div>
        
        <div class="form-group <?php echo isset($form_errors['subject']) ? 'has-error' : ''; ?>">
            <label for="subject">Argomento</label>
            <select id="subject" name="subject" required>
                <option value="" disabled <?php echo empty($form_data['subject']) ? 'selected' : ''; ?>>Seleziona un argomento</option>
                <option value="consulenza" <?php echo ($form_data['subject'] ?? '') === 'consulenza' ? 'selected' : ''; ?>>Consulenza</option>
                <option value="preventivo" <?php echo ($form_data['subject'] ?? '') === 'preventivo' ? 'selected' : ''; ?>>Preventivo</option>
                <option value="collaborazione" <?php echo ($form_data['subject'] ?? '') === 'collaborazione' ? 'selected' : ''; ?>>Collaborazione</option>
                <option value="altro" <?php echo ($form_data['subject'] ?? '') === 'altro' ? 'selected' : ''; ?>>Altro</option>
            </select>
            <?php if (isset($form_errors['subject'])): ?>
                <span class="error-message"><?php echo $form_errors['subject']; ?></span>
            <?php endif; ?>
        </div>
        
        <div class="form-group <?php echo isset($form_errors['message']) ? 'has-error' : ''; ?>">
            <label for="message">Messaggio</label>
            <textarea id="message" name="message" required><?php echo htmlspecialchars($form_data['message'] ?? ''); ?></textarea>
            <?php if (isset($form_errors['message'])): ?>
                <span class="error-message"><?php echo $form_errors['message']; ?></span>
            <?php endif; ?>
        </div>
        
        <button type="submit" class="cta-button">Invia</button>
    </form>
</section>

<?php renderFooter(); ?>