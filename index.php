<?php
$page = (isset($_GET["page"]))? $_GET["page"] : "home";

switch($page) {
    case "home" : $template = "produits.php";
    break;
    
    case "produit" : $template = "produit.php";
    break;
    default : $template = "produits.php";
}


?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<?php require "$template" ?>


 <script src="script.js"></script>   
</body>
</html>