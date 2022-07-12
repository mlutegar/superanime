<?php 
    include('config.php');
    require_once('repository/MangaRepository.php');

    $titulo = filter_input(INPUT_GET, 'titulo', FILTER_SANITIZE_SPECIAL_CHARS);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista completa</title>
</head>
<body> <?php include('navbar.php'); ?>

    <div id="banner">
        MANGAS
    </div>

    <div class="space">
            <div style="margin-bottom: 2%;">
                <p>VITRINE</p>
            </div>
        
        <div style="width: 100%; margin-left: 1.5%">
            <form id="formSearchTitulo" class="d-flex" role="search" method="post" action="localiza-manga.php">
                <input style="width: 95%;" id="searchTitulo" class="form-control me-2" size="21" name="titulo" type="search" placeholder="Procurar" aria-label="Search">
            </form>
        </div>

        <?php $qnt = 0; foreach(fnLocalizaJogadorPorTitulo($titulo) as $manga):
            if ($qnt == 0):?>
                <div class="vitrine_linha">
            <?php endif; ?>
                
            <?php if ($qnt <3) :?>
                <div class="vitrine">
                    <div class="vitrine_img">
                        <a href="mangaDetalhe.php?id=<?= $manga->id?>"><img class="cropped" src="<?=$manga->capa?>"></a>
                    </div>
                    <p><?=$manga->titulo?></p>
                    <p><a href="<?= $manga->conteudo?>">Baixe aqui</a></p>
                </div>
            <?php endif; ?>

        <?php if ($qnt == 2): $qnt = -1;?>
            </div>
        <?php endif; $qnt++;?>
            
        <?php endforeach; ?>
    </div>

    <div class="slide">
        
    </div>
    
</body> <?php include("rodape.php"); ?>
</html>