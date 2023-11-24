<?php foreach ($templateParams["articoli"] as $articolo) : ?>

    <article>
        <header>
            <!-- alt empty perché è un immagine di tipo decorativo -->
            <img src="<?php echo UPLOAD_DIR . $articolo["imgarticolo"]; ?>" alt="">
            <h2>
                <?php echo $articolo["titoloarticolo"]; ?>
                <p>
                    <?php echo $articolo["dataarticolo"]; ?> - <?php echo $articolo["nome"]; ?>
                </p>
            </h2>
        </header>
        <section lang="zxx">
            <p>
                <?php echo $articolo["anteprimaarticolo"]; ?>
            </p>
        </section>
        <footer>
            <a href="#">Leggi tutto</a>
        </footer>
    </article>

<?php endforeach; ?>