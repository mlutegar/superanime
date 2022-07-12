<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;

    require_once('vendor/autoload.php');

    date_default_timezone_set('America/Sao_Paulo');

    define('GUSER', 'pereiradorsi@gmail.com');
    define('GPWD', 'xwsgkvozzytlwlxu');

    function send($usuario){
        $mail = new PHPMailer;

        $mail->isSMTP();
        $mail->SMTPDebug = SMTP::DEBUG_OFF; 
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;
        $mail->SMTPAuth = true;
        $mail->Username = GUSER;
        $mail->Password = GPWD;

        $mail->setFrom('superanime@gmail.com', 'Superanime|Contato');
        $mail->addAddress($usuario->email); 
        $mail->Subject = 'Envio de contato com sucesso!'; 

        $mail->msgHTML(constroiMensagem($usuario->nome, $usuario->comentario));
        $mail->AltBody = "Olá {$usuario->nome}, sua mensagem foi enviada com sucesso!";

        $response = $mail->send();
        if($response)
        {
                $log_file = fopen('log_email.log', 'a');
                $date = date('Y-m-d H:i');
                fwrite($log_file, "Email enviado: {$usuario->email} - {$date}\r\n\r\n");
                fclose($log_file);
                redirect('success', 'Foi gerado uma nova senha e enviada para seu email');
        }

        if(!$response)
        {
                $log_file = fopen('log_email.log', 'a');
                $date = date('Y-m-d H:i');
                fwrite($log_file, "{$mail->ErrorInfo}\r\n{$usuario->email}\r\n{$date}\r\n\r\n");
                fclose($log_file);
                redirect('danger', 'Ocorreu uma falha ao enviar a mensagem');
        }
    }

    function constroiMensagem($nome, $comentario){
        return   "<!DOCTYPE html>"
            . "<html lang='pt-br'>"
                . "<head>"
                    . "<meta charset='UTF-8'>"
                    . "<meta http-equiv='X-UA-Compatible' content='IE=edge'>"
                    . "<meta name='viewport' content='width=device-width, initial-scale=1.0'>"
                    . "<title>Envio de mensagem contato</title>"
                . "</head>"
                . "<body>"
                    . "<h1>Envio de mensagem para <strong>Superanime</strong></h1>"
                    . "<div>"
                        . "<h3>Olá {$nome}, sua mensagem '{$comentario}' foi enviada com sucesso! Em breve receberá nossa resposta. :)</h3>"
                    . "</div>"
                . "</body>"
                . "</html>";
    }

    function redirect($msg){
        setcookie('notify', $msg, time() + 10, "superanime/contato.php", 'localhost');
        header("location: contato.php");
        exit;
    }
