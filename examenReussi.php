<?php
session_start();
include "./include/header.php";
?>
<style>
    .ts{
        height: 100vh;
        display:flex;
        
        margin: auto;
        
    }
    .ts h1{
       
        margin: auto;
        margin-top: 20%;
    }
</style>
<div class="ts w-75 text-center  m-auto">
    <h1 class=" text-black fs-2 w-50 ">vos réponse sont bien enregistré !
        <a class="btn btn-success  " href="./index.php"> Revenir à la page d'accueuil !</a>
    </h1>
</div>