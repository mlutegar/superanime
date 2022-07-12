<?php
    require_once('util/envia-email.php');

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
    $comentario = filter_input(INPUT_POST, 'comentario', FILTER_SANITIZE_SPECIAL_CHARS);

    $usuario = new stdClass();
    $usuario->email = $email;
    $usuario->nome = $nome;
    $usuario->comentario = $comentario;

    send($usuario);