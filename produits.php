<?php
require_once "tab.php";

foreach($articles as $indice => $article) : ?>

<div class="article">
<a href="produit.php">
    <ul>
            <li><h1><?=$article["produit"]?></h1></li>
            <li><img src="<?=$article["image"]?>"></li>
            <li><?=$article["type"]?></li>
            <li><?=$article["description"]?></li>
            <li><?=$article["prix"]?></li>
            <li><?=$article["stock"]?></li>
            
    </ul>
    </div>
    <?php endforeach?>