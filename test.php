<?php
    require_once('repository/MangaRepository.php');
    $id = 19;

    $manga = fnLocalizaMangaPorId($id);

    echo $manga -> conteudo;

