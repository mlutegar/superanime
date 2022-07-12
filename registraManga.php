<?php
    require_once('repository/MangaRepository.php');
    require_once('util/base64.php');

    $anime = filter_input(INPUT_POST, 'anime', FILTER_SANITIZE_SPECIAL_CHARS);
    $volume = filter_input(INPUT_POST, 'volume', FILTER_SANITIZE_NUMBER_INT);
    $autor = filter_input(INPUT_POST, 'autor', FILTER_SANITIZE_SPECIAL_CHARS);
    $editora = filter_input(INPUT_POST, 'editora', FILTER_SANITIZE_SPECIAL_CHARS);
    $sumario = filter_input(INPUT_POST, 'sumario', FILTER_SANITIZE_SPECIAL_CHARS);

    $titulo = ("{$anime} - Vol.{$volume}");

    $capa = converterBase64($_FILES['capa']);
    $conteudo = $_FILES['conteudo']['tmp_name'];
    $conteudo_name = "{$titulo}.zip";

    $dirAbs = "C:/xampp/htdocs/projeto/Senac/PHP/superanime/upload/";
    $dirRel = "upload/";
    $pathAbs = $dirAbs.$conteudo_name;
    $pathRel = $dirRel.$conteudo_name;

    move_uploaded_file($conteudo, $pathAbs);    

    if(empty($autor)) {
        $autor = "Desconhecido";
    }
    if(empty($editora)) {
        $editora = "Desconhecido";
    }
    if(empty($sumario)) {
        $sumario = "Sem sumario";
    }

    if(empty($capa) || empty($pathRel) || empty($anime) || empty($volume)) {
        $msg = "Preencher todos os campos primeiro.";
    } else {
        if(fnAddManga($titulo, $anime, $volume, $autor, $editora, $sumario, $capa, $pathRel)) {
            $msg = "Sucesso ao adicionar o Manga no site";
        } else {
            $msg = "Falha ao adicionar o Manga no site";
        }
    }

    $page = "formulario-cadastro-manga.php";
    setcookie('notify', $msg, time() + 10, "superanime/{$page}", 'localhost');
    header("location: {$page}");
    exit;