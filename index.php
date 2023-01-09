<style>
  body {
    background-color: lightblue; /* couleur de fond bleue claire */
  }

  img {
    width: 80%; /* largeur de l'image à 80% de la largeur de la page */
    border: 5px solid black; /* ajoute une bordure rouge de 5 pixels de large */
  }

  a {
    display: inline-block; /* affiche le bouton comme un élément en ligne */
    border: 5px solid green; /* ajoute une bordure verte de 5 pixels de large */
    background-color: black; /* couleur de fond verte claire */
    color: white; /* couleur blanche pour le texte */
    padding: 15px 30px; /* ajoute une marge intérieure de 15 pixels en haut et en bas, et de 30 pixels à gauche et à droite */
    text-decoration: none; /* retire le soulignement des liens */
  }
</style>


<?php

$directory = 'images/';
$images = scandir($directory);

$total = count($images) - 2; // retire le répertoire courant et le répertoire parent
$i = isset($_GET['i']) ? (int)$_GET['i'] : 0; // récupère l'index de l'image courante

if (in_array($images[$i], ['.', '..'])) $i = 1; // s'assure que l'index est valide

// affiche l'image courante
echo '<center><img src="'.$directory.$images[$i].'" alt=""><center>';

// affiche les liens de navigation
if ($i > 0) echo '<a href="?i='.($i - 1).'">Précédent</a>';
if ($i < $total - 1) echo '<a href="?i='.($i + 1).'">Suivant</a>';

?>
