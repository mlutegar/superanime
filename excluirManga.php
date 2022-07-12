<?php
    require_once('repository/MangaRepository.php');
    session_start();
    
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $manga = fnLocalizaMangaPorId($_SESSION['id']);
    $conteudo = $manga->conteudo;

    $msg = "";
    if(fnDeleteManga($_SESSION['id'], $conteudo)){
        $msg = "Sucesso ao deletar";
    } else {
        $msg = "Falha ao deletar";
    }

    unset($_SESSION['id']);

    $page = "listagem-de-mangas.php";
    setcookie('notify', $msg, time() + 10, "/superanime/{$page}", 'localhost');
    header("location: {$page}");
    exit;