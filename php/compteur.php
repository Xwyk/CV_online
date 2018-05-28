<?php
session_start();
if(file_exists('compteur.txt')){
        $compteur_f = fopen('compteur.txt', 'r+');
        $compte = fgets($compteur_f);
}
else{
        $compteur_f = fopen('compteur.txt', 'a+');
        $compte = 0;
}
if(!isset($_SESSION['compteur_de_visite'])){
        $_SESSION['compteur_de_visite'] = 'visite';
        $compte++;
        fseek($compteur_f, 0);
        fputs($compteur_f, $compte);
}
fclose($compteur_f);
?>