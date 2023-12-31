<!DOCTYPE html>
<html lang="it">

<head>
    <title><?php echo $templateParams["titolo"]; ?></title>
    <meta charset="UTF-8" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <header>
        <h1>Blog di Tecnologie Web</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="archivio.html">Archivio</a></li>
            <li><a href="contatti.php">Contatti</a></li>
            <li><a href="login.html">Login</a></li>
        </ul>
    </nav>


    <main>
        <?php
        require($templateParams["nome"]);
        ?>
    </main>
    <aside>
        <section>
            <h2>Post Casuali</h2>
            <ul>
                <?php foreach ($templateParams["articolicasuali"] as $articolocasuale) : ?>
                    <li>
                        <img src="<?php echo UPLOAD_DIR . $articolocasuale["imgarticolo"]; ?>" alt="" />
                        <a href="#"><?php echo $articolocasuale["titoloarticolo"]; ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>
        <section>
            <h2>Categorie</h2>
            <ul>
                <?php foreach ($templateParams["categorie"] as $categoria) : ?>
                    <li>
                        <a href="#"><?php echo $categoria["nomecategoria"]; ?></a>
                    </li>
                <?php endforeach; ?>
                <li><a href="#"><abbr title="HyperText Markup Language">HTML</abbr></a></li>
                <li><a href="#"><abbr title="Cascading Style Sheet">CSS</abbr></a></li>
                <li><a href="#"><abbr title="PHP Hypertext Preprocessor">PHP</abbr></a></li>
                <li><a href="#">Javascript</a></li>
                <li><a href="#">Apache</a></li>


            </ul>
        </section>
    </aside>
    <footer>
        <p>Tecnologie Web - A.A. 2023-2024</p>
    </footer>
</body>

</html>