<?php include('configAdmin.php');?>

<!doctype html>
<html lang="pt_BR">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário Cadastro de Manga</title>
  </head>

  <body><?php include('navbar.php');?>
    <div class="space aboutus">
      <div class="center">
          <form action="registraManga.php" method="post" enctype="multipart/form-data">
            <div>

              <svg width="100%" height="360" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Capa" preserveAspectRatio="xMidYMid slice" focusable="false">
                  <title>Placeholder</title>
                  <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Capa</text>
              </svg>

              <div class="inline">
                <div class="form_group div2">
                  <label for="capaId">Capa</label>
                  <input type="file" name="capa" id="capaId" required>
                </div>
      
                <div class="form_group div2">
                  <label>Conteudo</label>
                  <input type="file" name="conteudo" id="conteudoId" required>
                </div>
              </div>
    
              <div class="inline">
                <div class="form_group div2">
                  <div style="width: 95%;">
                    <label>Anime</label>
                    <input type="text" name="anime" class="form_field" id="animeId" required>
                  </div>
                </div>
      
                <div class="form_group div2">
                  <label>Volume</label>
                  <input type="number" name="volume" class="form_field" id="volumeId" required>  
                </div>
              </div>
    
              <div class="inline">
                <div class="form_group div2">
                  <div style="width: 95%;">
                    <label>Autor</label>
                    <input type="text" name="autor" class="form_field" id="autorId">            
                  </div>
                </div>
      
                <div class="form_group div2">
                  <label>Editora</label>
                  <input type="text" name="editora" class="form_field" id="editoraId">
                </div>
              </div>
    
              <div class="form_group">
                <label>Sumario</label>
                <textarea name="sumario" class="form_field" rows="8" id="sumarioId"></textarea>
              </div>

              <div class="btt">
                <button type="submit">Enviar</button>
                <div id="notify"><?= isset($_COOKIE['notify']) ? $_COOKIE['notify'] : '' ?></div>
              </div>
            </div>
        </form>
      </div>
    </div>
    <?php include("rodape.php");?>
    <script src="js/base64.js"></script>
  </body>
</html>