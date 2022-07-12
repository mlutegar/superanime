<?php include('config.php');?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
</head>
<body> <?php include('navbar.php'); ?>

    <div id="banner">
        CONTATO
    </div>

    <div class="space aboutus">

        <p>FALE CONOSCO</p>

        <div class="center">
            <form action="infoContato.php" method="post">
                <div class="inline" style="margin-bottom: 4%;">
                    <div class="div2">
                        <div class="form_group" style="width: 95%;">
                            <label for="nome" class="form_label">Nome</label>
                            <input type="text" name="nome" class="form_field" placeholder="Nome" required/>
                        </div>
                    </div>
        
                    <div class="form_group div2">
                        <div>
                            <label for="email" class="form_label">E-mail</label>
                            <input type="text" name="email" class="form_field" placeholder="Email" required/>
                        </div>
                    </div>
                </div>
    
                <div class="form_group">
                    <label for="comentario" class="form_label">Mensagem</label><br>
                    <textarea name="comentario" class="form_field" rows="8" cols="40" placeholder="Mensagem" required></textarea>
                </div>

                <div class="btt">
                    <button type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </div>
    
</body> <?php include("rodape.php"); ?>
</html>