<?php
require_once "tab.php";

$indice = (isset($_GET["art"]))? $_GET["art"] : 0;
$article = $articles[$indice];

?>
<div class="article">
    
    <h1><?=$article["produit"]?></h1>
    <img src="<?=$article["image"]?>">
    <ul>
        <li><?=$article["type"]?></li>
        <li><?=$article["description"]?></li>
        <li><?=$article["prix"]?></li>
        <li><?=$article["stock"]?></li>
    </ul>
    
    <input type="button" value="Ajouter au panier">
    </div>