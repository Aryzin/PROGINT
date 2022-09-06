<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id'])) {
    echo"<script language='javascript' type='text/javascript'>
            alert('Você não pode acessar esta página porque não está logado!');window.location
            .href='index.php';</script>";
            die();
}


?>