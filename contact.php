<?php


    include_once('vendor/phpmailer/phpmailer/src/PHPMailer.php');
    include_once('vendor/phpmailer/phpmailer/src/SMTP.php');

    $mail = new PHPMailer\PHPMailer\PHPMailer(TRUE);

    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Username = 'iagosilvany@gmail.com';
        $mail->Password = ''; # password goes here

        $mail->setFrom($email, $name); // por restrições do Google, o e-mail pode chegar com o remetente iagosilvany@gmail.com
        $mail->AddReplyTo($email, $name); // mas pelo menos ao responder, podemos direcioná-los ao e-mail correto
        $mail->addAddress('iagosilvany@hotmail.com', 'Iago Oliveira');
        $mail->Subject = 'Novo contato no T-Evan!';
        $mail->Body = 'Chegou um novo contato no site T-Evan, confira:<br><br>'.$msg;
        $mail->IsHTML(true);

        $mail->send();
        die(json_encode(['status' => 'ok']));
    } catch (Exception $e) {
        echo $e->getMessage();
    }
?>
