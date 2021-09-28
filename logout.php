<?php

include "./include/header.php";
if ($_GET["logout"]) {
    session_start();
    session_destroy();

    header("Location:login.php");
}
