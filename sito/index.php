<?php 
require_once 'functions.php';
$dati = loadPortfolioData();
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
                <span>React</span>
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
                    <a href="<?php echo $progetto['link']; ?>" title="Vai alla pagina del progetto <?php echo $progetto['titolo']; ?>"><h3><?php echo $progetto['titolo']; ?></h3></a>
                    <p><?php echo $progetto['descrizione']; ?></p>
                    <a href="#contact" class="cta-button" title="Richiedi informazioni su questo progetto">Richiedi info</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- Contact Section -->
<section class="contact" id="contact">
    <h2>Contattami</h2>
    <form class="contact-form" action="salva_contatto.php" method="post" novalidate>
        <?php if (isset($_GET['error'])): ?>
            <div class="form-error">Si prega di compilare correttamente tutti i campi</div>
        <?php endif; ?>
        
        <div class="form-group <?php echo isset($_GET['error_name']) ? 'error' : ''; ?>">
            <label for="name">Nome</label>
            <input type="text" id="name" name="name" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>" required>
            <?php if (isset($_GET['error_name'])): ?>
                <span class="error-message">Questo campo è obbligatorio</span>
            <?php endif; ?>
        </div>
        
        <div class="form-group <?php echo isset($_GET['error_email']) ? 'error' : ''; ?>">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>" required>
            <?php if (isset($_GET['error_email'])): ?>
                <span class="error-message"><?php echo $_GET['error_email'] === 'invalid' ? 'Inserisci un indirizzo email valido' : 'Questo campo è obbligatorio'; ?></span>
            <?php endif; ?>
        </div>
        
        <div class="form-group <?php echo isset($_GET['error_subject']) ? 'error' : ''; ?>">
            <label for="subject">Argomento</label>
            <select id="subject" name="subject" required>
                <option value="" disabled selected>Seleziona un argomento</option>
                <option value="consulenza" <?php echo (isset($_POST['subject']) && $_POST['subject'] === 'consulenza') ? 'selected' : ''; ?>>Consulenza</option>
                <option value="preventivo" <?php echo (isset($_POST['subject']) && $_POST['subject'] === 'preventivo') ? 'selected' : ''; ?>>Preventivo</option>
                <option value="collaborazione" <?php echo (isset($_POST['subject']) && $_POST['subject'] === 'collaborazione') ? 'selected' : ''; ?>>Collaborazione</option>
                <option value="altro" <?php echo (isset($_POST['subject']) && $_POST['subject'] === 'altro') ? 'selected' : ''; ?>>Altro</option>
            </select>
            <?php if (isset($_GET['error_subject'])): ?>
                <span class="error-message">Questo campo è obbligatorio</span>
            <?php endif; ?>
        </div>
        
        <div class="form-group <?php echo isset($_GET['error_message']) ? 'error' : ''; ?>">
            <label for="message">Messaggio</label>
            <textarea id="message" name="message" required><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?></textarea>
            <?php if (isset($_GET['error_message'])): ?>
                <span class="error-message">Questo campo è obbligatorio</span>
            <?php endif; ?>
        </div>
        
        <button type="submit" class="cta-button">Invia</button>
    </form>
</section>

<?php renderFooter(); ?>