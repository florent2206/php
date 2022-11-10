<?php
session_start();
if(isset($_SESSION['user'])){
    $res="Vous êtes ".$_SESSION['user'];
    $res=$res."<a href=deco.php>Déconnexion";
}

