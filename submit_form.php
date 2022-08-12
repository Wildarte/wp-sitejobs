<?php

require '../../../wp-config.php';

//$host = get_option("smtp_host");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './vendor/autoload.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'):

    if($_POST['null1'] != "" || $_POST['null2'] != ""):
        echo "5"; //caso preencham os camapos ocultos
    else:

        if(empty($_POST['formName']) || empty($_POST['formLastName']) || empty($_POST['formEmail']) || empty($_POST['formMsg']) || empty($_FILES['formFile'])):
            echo "4"; //caso algum campo obrigatório esteja vazio
        else:

            //$host = get_option('mailserver_url');
            //$username = get_option('mailserver_login');
            //$password = get_option('mailserver_pass');
            //$port = get_option('mailserver_port');

            $host = get_option("show_host");
            $username = get_option("show_smtp_username");
            $password = get_option("show_smtp_senha");
            $port = get_option("show_smtp_porta");
            $smtp_email = get_option("show_smtp_email");
            $smtp_secure = get_option("show_smtp_secure");
            $emailContato = get_option("show_email_contato");
            
            $attachment = $_FILES['formFile'];

            $nome = $_POST['formName'];
            $lastNome = $_POST['formLastName'];
            $email = $_POST['emailSend'];
            $replayTo = $_POST['formEmail'];
            $msg_carta = $_POST['formMsg'];
            //$whatsapp = $_POST['whatsappForm'];
            //$mensagem = $_POST['mensagemForm'];

            $url = 'localhost';
            $toEmail = '';
            $emailServer = 'formulario@'.$url;
            $assunto = "Mensagem do formulário";

            if(empty($host) || empty($username) || empty($password) || empty($port)):
                
                //caso algum dos campos de configuração de servidor de email esteja vazio

                //Create a new PHPMailer instance
                $mail = new PHPMailer();
                
                //$dominio = $_SERVER['SERVER_NAME'];

                $mail->CharSet = 'UTF-8';
                //Set who the message is to be sent from
                $mail->setFrom('from@'.$dominio, 'Mensagem da Vaga');
                //Set who the message is to be sent to
                $mail->addReplyTo($email, $nome);
                //Set the subject line
                $mail->addAddress($emailContato);
                //Set an alternative reply-to address
                $mail->Subject = $assunto;
                //Read an HTML message body from an external file, convert referenced images to embedded,
                //convert HTML into a basic plain-text alternative body

                $mail->addAttachment($attachment['tmp_name'], $attachment['name']);         //Add attachments

                $mail->msgHTML("<html> <h3>Você recebeu uma mensagem do seu site</h3> <p><strong>Nome: </strong> {$nome} </p> <p> <strong>e-mail: </strong> {$email} </p> </html>");

                //send the message, check for errors
                if (!$mail->send()) {
                    echo 'Mailer Error without SMTP: ' . $mail->ErrorInfo;
                } else {
                    echo "1";
                }

            else:

                $mail = new PHPMailer();

                //Server settings
                //$mail->SMTPDebug = 2;
                //$mail->Debugoutput = 'html';
                //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
                $mail->isSMTP();
                if($smtp_secure == "ssl/tls"){                                            //Send using SMTP
                    $mail->Host = "ssl://".$host;                     //Set the SMTP server to send through
                    //echo "smtp_secure é igual a ssl/tls";
                }elseif($smtp_secure == "none"){
                    $mail->Host = $host;
                    //echo "smtp_secure é igual a none";
                }else{
                    $mail->Host = $host;
                    //echo "mail->host é igual a host";
                }
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = $username;                     //SMTP username
                $mail->Password   = $password;                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = $port;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->CharSet = 'UTF-8';
                //Set who the message is to be sent from
                $mail->setFrom($smtp_email, 'Candidato a Vaga - '.$nome.'');
                //Set an alternative reply-to address
                $mail->addReplyTo($replayTo, $nome);
                //Set who the message is to be sent to
                $mail->addAddress($email);
                //Set the subject line
                $mail->Subject = $assunto;
                //Read an HTML message body from an external file, convert referenced images to embedded,
                //convert HTML into a basic plain-text alternative body

                $mail->addAttachment($attachment['tmp_name'], $attachment['name']);         //Add attachments

                $mail->msgHTML("<html> <h3>Candidato a vaga - {$nome}</h3> <p><strong>Nome: </strong> {$nome} {$lastNome} </p> <p> <strong>e-mail: </strong> {$replayTo} </p> 
                <p> <strong>Carta de Apresentação:</strong> {$msg_carta}</p>
                </html>");

                if(!$mail->send()):
                    echo 'Mailer Error with SMTP: ' . $mail->ErrorInfo;
                else:
                    echo "1";
                endif;

            endif;
        
        endif;

    endif;

else:
    echo "<script> window.location.href = '404'; </script>";
endif;




?>