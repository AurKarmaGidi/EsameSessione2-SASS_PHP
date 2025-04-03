<footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>Contatti</h3>
                <p>Email: <?php echo $dati['contatti']['email']; ?></p>
                <p>Tel: <?php echo $dati['contatti']['telefono']; ?></p>
            </div>
            <div class="footer-section">
                <h3>Social</h3>
                <div class="social-links">
                    <?php foreach ($dati['contatti']['social'] as $social): ?>
                        <a href="<?php echo $social['url']; ?>"><?php echo $social['nome']; ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="footer-section">
                <h3>Indirizzo</h3>
                <p><?php echo $dati['contatti']['indirizzo']; ?></p>
            </div>
        </div>
    </footer>
</body>
</html>