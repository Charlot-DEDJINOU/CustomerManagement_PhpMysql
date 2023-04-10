<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/Page.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrainement</title>
    <script type="text/javascript"></script>
</head>
<?php
    require_once 'fonction.php' ;
?>
<body>
    <div class="container-app">
        <span>Cahier de compte</span>
        <div class="content">
            <div class="item content1">
               <a href="page1.php">Ajouter</a>
               <a href="page2.php">Lister</a>
               <a href="page3.php">Payer/Monnaie</a>
               <a href="page4.php">Rechercher</a>
               <a href="page5.php">Sommer</a>
            </div>
            <div class="item content2">
                <p class="sommer"> On vous doit au totalement après avoir enlevé ce que vous devez aux autres une somme de <span class="prix"><?= sommer() ;?></span> Fcfa<p>
            </div>
        </div>
    </div>
</body>
</html>