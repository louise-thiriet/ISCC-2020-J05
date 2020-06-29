        <nav class="navigation">
            <?php 
            if($navigation=='vitrine-accueil'):?>
            <a style="color:#17C1FF" href="http://localhost/ISCC/J05/EX_02/vitrine-accueil.php">Accueil</a>
            <?php else: ?>
            <a href="http://localhost/ISCC/J05/EX_02/vitrine-accueil.php">Accueil</a>
            <?php endif; ?>

            <?php
            if($navigation=='vitrine-programme'):?>
            <a style="color:#17C1FF" href="http://localhost/ISCC/J05/EX_02/vitrine-programme.php">Programme</a>
            <?php else: ?>
            <a href="http://localhost/ISCC/J05/EX_02/vitrine-programme.php">Programme</a>
            <?php endif; ?>

            <?php
            if($navigation=='vitrine-contacts'): ?>
            <a style="color:#17C1FF" href="http://localhost/ISCC/J05/EX_02/vitrine-contacts.php">Contact</a>
            <?php else: ?>
            <a href="http://localhost/ISCC/J05/EX_02/vitrine-contacts.php">Contact</a>
            <?php endif; ?>
        </nav>