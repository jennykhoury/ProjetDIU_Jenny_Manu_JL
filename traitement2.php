    <?php
    $user = isset($_POST['nomUtilisateur']) ? htmlspecialchars($_POST['nomUtilisateur']) : '';
    echo('
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8" />
            <title>Traitement</title>
        </head>
    <body>
       <h3>Votre nom est : '.$user.' </h3>
    </body>
    </html>');
    ?>

