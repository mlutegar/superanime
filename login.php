<?php 
    require_once('repository/MangaRepository.php'); 
    $notificacao = filter_input(INPUT_GET, 'notify', FILTER_SANITIZE_SPECIAL_CHARS);
?>
<!doctype html>
<html lang="pt_BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
  </head>
  <body>

    <fieldset class="space_login">
        <legend>Login</legend>
        <form action="loginSistema.php" method="post" class="form">
          <div class="form_group">
            <label for="emailId" class="form_label">E-mail</label>
            <input type="email" name="email" id="emailId" class="form_field" placeholder="Informe o e-mail">
          </div>  
          <div class="form_group">
            <label for="senhaId" class="form_label">Senha</label>
            <input type="password" name="senha" id="senhaId" class="form_field" placeholder="Informe a senha">
          </div>

          <div class="btt">
            <button type="submit" class="btn btn-dark">Login</button>
          </div>
        </form>
    </fieldset>
    
  </body>
</html>