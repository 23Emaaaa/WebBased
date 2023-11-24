<section>
    <h2>
        Autori del Blog
    </h2>
    <table>
        <tr>
            <th id="autore">Autore</th>
            <th id="email">Email</th>
            <th id="argomenti">Argomenti</th>
        </tr>
        <?php foreach ($tamplateParams["autori"] as $autore): ?>
        <tr>
            <th id="<?php echo getIDFromName($autore["nome"]); ?>">
                <?php echo $autore["nome"]; ?>
            <td headers="email <?php echo getIDFromName($autore["nome"]); ?>">
                <?php echo $autore["username"]; ?>
            </td>
            <td headers="argomenti <?php echo getIDFromName($autore["nome"]); ?>">
                <?php echo $autore["argomenti"]; ?>
            </td>
            </th>
        </tr>
        <?php endforeach; ?>
    </table>
</section>