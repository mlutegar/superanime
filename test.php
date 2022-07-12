<?php
    require_once('repository/MangaRepository.php');
    require_once('util/base64.php');

    $conteudo = $_FILES['conteudo']['tmp_name'];
    $conteudo_name = $_FILES['conteudo']['name'];

    $dir = "C:/xampp/htdocs/projeto/Senac/PHP/superanime/upload/";
    $path = $dir.$conteudo_name;

    move_uploaded_file( $conteudo, $path );    

    echo "osia";