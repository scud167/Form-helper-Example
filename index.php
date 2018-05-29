<?php
    require 'form.php';
    $form = new form();
?>
<!doctype html>
<html lang="fr">
    <head>
    <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

        <title>Creation d'un helper (form) en PHP</title>
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-light bg-light">
                <span class="navbar-brand mb-0 h1">Creation d'un helper de formulaire (Bootstrap 4)</span>
            </nav>
            <form action="index.php" method="post">
                <?php echo $form->mail('monEmail', 'Votre Email:', 'Entrez Votre adresse mail', 'Nous ne partagerons pas votre mail.');?>
                <?php echo $form->password('monMotDePasse', 'Votre mot de passe:', 'Mot de passe');?>
                <?php echo $form->select('monSelect', 'Select seul', array(1,2,'trois','4'));?>
                <?php echo $form->multipleSelect('monMultipleSelect', 'Select Multiple', array(1,2,'trois','4'));?>
                <?php echo $form->textarea('maTextArea', 'Zone de Texte', 4);?>
                <?php echo $form->file('monFichier', 'Fichier', 'Taille Max: 4 Mo');?>
                <?php echo $form->input('monAge', 'number', 'Age', array('class' => 'form-control'));?>
                
            </form>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>
