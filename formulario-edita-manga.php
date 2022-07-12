<?php 
    include('configAdmin.php');
    require_once('repository/MangaRepository.php');
    $id = $_SESSION['id'];
    $manga = fnLocalizaMangaPorId($id);
?>
<!doctype html>
<html lang="pt_BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário Edita Manga</title>
  </head>
  <body> <?php include('navbar.php'); ?>
  <div class="space aboutus">
      <div class="center">
          <form action="editaManga.php" method="post" enctype="multipart/form-data">
            <div>
              <div style="justify-content: center;">
                <img class="cropped-edit" src="<?= $manga->capa ?>" id="imgCapa" class="rounded" alt="Capa do manga">
              </div>

              <div class="inline">
                <div class="form_group div2">
                  <label>Capa</label>
                  <input type="file" name="capa" id="capaId">
                </div>
      
                <div class="form_group div2">
                  <label>Conteudo</label>
                  <input type="file" name="conteudo" id="conteudoId">
                </div>
              </div>

              <div>
                    <input type="hidden" name="idManga" id="mangaId" value="<?= $manga->id ?>"> 
                </div>
    
              <div class="inline">
                <div class="form_group div2">
                  <div style="width: 95%;">
                    <label>Anime</label>
                    <input type="text" name="anime" class="form_field" id="animeId" value="<?= $manga->anime ?>" required>
                  </div>
                </div>
      
                <div class="form_group div2">
                  <label>Volume</label>
                  <input type="number" name="volume" class="form_field" id="volumeId" value="<?= $manga->volume ?>" required>  
                </div>
              </div>
    
              <div class="inline">
                <div class="form_group div2">
                  <div style="width: 95%;">
                    <label>Autor</label>
                    <input type="text" name="autor" class="form_field" value="<?= $manga->autor ?>" id="autorId">            
                  </div>
                </div>
      
                <div class="form_group div2">
                  <label>Editora</label>
                  <input type="text" name="editora" class="form_field" value="<?= $manga->editora ?>" id="editoraId">
                </div>
              </div>
    
              <div class="form_group">
                <label>Sumario</label>
                <textarea name="sumario" class="form_field" rows="8" value="<?= $manga->sumario ?>" id="sumarioId"></textarea>
              </div>

              <div class="btt">
                <button type="submit">Enviar</button>
                <div><a href="listagem-de-mangas.php">Voltar para listagem</a></div>
              </div>
              <div id="notify"><?= isset($_COOKIE['notify']) ? $_COOKIE['notify'] : '' ?></div>
            </div>
        </form>
      </div>
    </div>
    <?php include("rodape.php"); ?>
    <script src="js/base64.js"></script>
  </body> 
</html>