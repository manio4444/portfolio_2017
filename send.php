<?php

if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) || $_SERVER['HTTP_X_REQUESTED_WITH'] != 'XMLHttpRequest') exit;

function wynik($status, $wiadomosc) {
    $wynik['wiadomosc'] = $wiadomosc;
    $wynik['status'] = $status;
    echo(json_encode($wynik));
    exit;
}

require 'src/php/class.phpmailer.php';

$config['contact_email'] = 'biuro@studiocitrus.pl';

$_POST = array_map('trim', $_POST);
$_POST['contact_body'] = "<strong>Wiadomość: </strong>".$_POST['contact_body'];

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions

//Recipients
$mail->setFrom($config['contact_email'], 'Marcin Kalinowski');
$mail->addAddress($config['contact_email']);
$mail->addReplyTo($config['contact_email']);
$mail->addCC($_POST['contact_email'], $_POST['contact_name']);

//Content
$mail->isHTML(true); // Set email format to HTML
$mail->Subject = 'Wiadomość z formularza portfolio - Marcin Kalinowski';
$mail->Body = nl2br($_POST['contact_body']);
$mail->CharSet = 'UTF-8';


//zamien potem te langi

/* VALIDATION STEP */
$wiadomosc = null;
if(empty($_POST['contact_name'])) $wiadomosc .=$lang['send_blad_imie'].' ';
if(empty($_POST['contact_email']) || !PHPMailer::ValidateAddress($_POST['contact_email']))  $wiadomosc .=$lang['send_blad_mail'].' ';
if(empty($_POST['contact_body'])) $wiadomosc .=$lang['send_blad_wiadomosc'].' ';
if(empty($_POST['b7b564ab232539533b8a357a5f64dff7']) || !empty($_POST['49f84321e320cba4343bcab725c18149']) ) $wiadomosc .=$lang['send_blad_spam'].' ';
if(!empty($wiadomosc)) wynik(false, $lang['send_niewyslano'].' '.$wiadomosc);


/* SEND AND CATCH EXCEPTIONS */
try {
  $mail->send();
  wynik(true, 'Mail send.');
} catch (Exception $e) {
  wynik(false, 'Mail NOT send. ' . $mail->ErrorInfo);
}
?>
