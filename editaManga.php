<?php
    require_once('repository/MangaRepository.php');
    require_once('util/base64.php');
    
    $id = filter_input(INPUT_POST, 'idManga', FILTER_SANITIZE_NUMBER_INT);
    $anime = filter_input(INPUT_POST, 'anime', FILTER_SANITIZE_SPECIAL_CHARS);
    $volume = filter_input(INPUT_POST, 'volume', FILTER_SANITIZE_NUMBER_INT);
    $autor = filter_input(INPUT_POST, 'autor', FILTER_SANITIZE_SPECIAL_CHARS);
    $editora = filter_input(INPUT_POST, 'editora', FILTER_SANITIZE_SPECIAL_CHARS);
    $sumario = filter_input(INPUT_POST, 'sumario', FILTER_SANITIZE_SPECIAL_CHARS);

    $titulo = ("{$anime} - Vol.{$volume}");
    $capa = converterBase64($_FILES['capa']);
    $conteudo = converterBase64($_FILES['conteudo']);


    $manga = fnLocalizaMangaPorId($id);

    if(empty($_FILES['capa'])) {
        $capa = $manga -> capa;
    }

    if(empty($_FILES['conteudo'])) {
        $conteudo = $manga -> conteudo;
    }

    $msg = "";
    if(fnUpdateManga($id, $titulo, $anime, $volume, $autor, $editora, $sumario, $capa, $conteudo)) {
        $msg = "Sucesso ao editar";
    } else {
        $msg = "Falha ao editar";
    }

    $_SESSION['id'] = $id;
    $page = "formulario-edita-manga.php";
    setcookie('notify', $msg, time() + 10, "superanime/{$page}", 'localhost');
    header("location: {$page}"); 
    exit;