<?php
$json_data = file_get_contents('data/portfolio.json');
$dati = json_decode($json_data, true);
?>

<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="hero" id="home">
    <div class="hero-content">
        <h1><?php echo $dati['home']['titolo']; ?></h1>
        <p><?php echo $dati['home']['sottotitolo']; ?></p>
        <a href="#contact" class="cta-button"><?php echo $dati['home']['testo_bottone']; ?></a>
    </div>
</section>

<!-- Chi sono Section -->
<section class="about" id="chi-sono">
    <div class="about-content">
        <div class="profile-card">
            <img src="img/foto-profilo.jpg" alt="Marika Guardi">
            <h3>Marika Guardi</h3>
            <p class="title">Full Stack Web Developer</p>
        </div>
        
        <div class="about-text">
            <h2>Chi sono</h2>
            <p>Con oltre 5 anni di esperienza nel settore, lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis nihil iusto recusandae nam modi, quaerat molestiae magni, doloremque expedita laborum architecto vel! Ratione magnam quaerat enim fuga et similique culpa?.</p>
            
            <div class="skills">
                <span>HTML/CSS</span>
                <span>JavaScript</span>
                <span>PHP</span>
                <span>React</span>
                <span>MySQL</span>
            </div>
            
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos officiis ratione temporibus fuga placeat tempore hic veniam sapiente eius commodi dolorem, porro nostrum repellendus ullam sint libero voluptates deserunt explicabo?</p>
            
            <a href="#contact" class="cta-button">Contattami</a>
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
                    <a href="<?php echo $progetto['link']; ?>"><h3><?php echo $progetto['titolo']; ?></h3></a>
                    <p><?php echo $progetto['descrizione']; ?></p>
                    <a href="#contact" class="cta-button">Richiedi info</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- Contact Section -->
<section class="contact" id="contact">
    <h2>Contattami</h2>
    <form class="contact-form" action="salva_contatto.php" method="post">
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="subject">Argomento</label>
            <select id="subject" name="subject" required>
                <option value="" disabled selected>Seleziona un argomento</option>
                <option value="consulenza">Consulenza</option>
                <option value="preventivo">Preventivo</option>
                <option value="collaborazione">Collaborazione</option>
                <option value="altro">Altro</option>
            </select>
        </div>
        <div class="form-group">
            <label for="message">Messaggio</label>
            <textarea id="message" name="message" required></textarea>
        </div>
        <button type="submit" class="cta-button">Invia</button>
    </form>
</section>

<?php include 'includes/footer.php'; ?>