<?php
    $para = "matheus.eloim@gmail.com";
    $assunto = "Inscrição no Site";
    $nome = $_REQUEST['nome'];
    $fone = $_REQUEST['fone'];
    $email = $_REQUEST['email'];
    $curso = $_REQUEST['curso'];
    $msg =  $_REQUEST['assunto'];

    $corpo = "<strong>Inscrição no Site</strong> <br><br>";
    $corpo .= "<strong>Nome: </strong> $nome";
    $corpo .= "<strong>Fone: </strong> $fone";
    $corpo .= "<strong>E-mail: </strong> $email";
    $corpo .= "<strong>Curso de Interesse: </strong> $curso";

    $header .= "Content-Type: text/html; charset = utf8\n"; 
    $header .= "From: $email Reply-to: $email\n"; 

    @mail($para,$assunto,$corpo,$header);

    header("location:enfermagem.php?msg=enviado");




?>''