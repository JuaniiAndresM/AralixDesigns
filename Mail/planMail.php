<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

$plan = $_POST['Plan'];
$nombre = $_POST['Nombre'];
$gmail = $_POST['Email'];
$celular = $_POST['Telefono'];
$comentario = $_POST['Comentario'];

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'aralixuy@gmail.com';                     //SMTP username
    $mail->Password   = 'aralix2003';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('aralixuy@gmail.com', $nombre);
    $mail->addAddress('aralixuy@gmail.com');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Nueva Solicitud de Plan';
    $mail->Body    = '  <div class="mail" style="max-width: 600px; background: #7200ff;">
                            <table style="width: 100%; background: linear-gradient(120deg, #2a026e, #7200ff); border: none;" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td style="height: 150px; padding: 20px; text-align: center;">
                                        <img src="https://i.imgur.com/z1ugfN1.png" alt="" style="max-width: 300px;" />
                                        <p style="color: white; margin: 5px 0; font-family: Comfortaa;">Agencia de desarrollo de sitios web.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img
                                            style="width: 100%; height: 100px; margin: 0; padding: 0; vertical-align: middle;"
                                            class="vector-top"
                                            src="https://i.imgur.com/UHCg5RQ.png"
                                            alt=""
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="mail-content" style="width: 100%; padding: 40px 0; margin-top: -120px; background: white;">
                                            <h1 style="width: 80%; margin: 20px auto; color: #2a026e; font-family: Comfortaa;">Nueva Solicitud de Plan</h1>
                                            <p style="width: 80%; margin: 20px auto; font-family: Comfortaa; color: #555;">
                                                <b>Plan</b>: ' . $plan . '
                                            </p>
                                            <p style="width: 80%; margin: 20px auto; font-family: Comfortaa; color: #555;">
                                                <b>Nombre</b>: ' . $nombre . '
                                            </p>
                                            <p style="width: 80%; margin: 20px auto; font-family: Comfortaa; color: #555;">
                                                <b>Correo Electronico</b>: ' . $gmail . '
                                            </p>
                                            <p style="width: 80%; margin: 20px auto; font-family: Comfortaa; color: #555;">
                                                <b>Celular / Telefono</b>: ' . $celular . '
                                            </p>
                                            <p style="width: 80%; margin: 20px auto; font-family: Comfortaa; color: #555;">
                                                ' . $comentario . '
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <div class="mail-footer" style="width: 100%; display: flex; justify-content: center; align-items: center; flex-direction: column; text-align: center; background: #161D27;">
                                        <p style="color: #aaa; font-size: 1em; margin: 5px auto; font-family: Comfortaa;">Copyright © 2021 <b style="font-weight: normal; color: white;">Aralix</b>. Todos los derechos reservados.</p>
                                    </div>
                                    </td>
                                </tr>
                            </table>
                        </div>';

    $mail->send();

    $mail = new PHPMailer(true);

    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'aralixuy@gmail.com';                     //SMTP username
    $mail->Password   = 'aralix2003';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('aralixuy@gmail.com', $nombre);
    $mail->addAddress($gmail);

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Nueva Solicitud de Plan';
    $mail->Body    = '  <div class="mail" style="max-width: 600px; background: #7200ff;">
                            <table style="width: 100%; background: linear-gradient(120deg, #2a026e, #7200ff); border: none;" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td style="height: 150px; padding: 20px; text-align: center;">
                                        <img src="https://i.imgur.com/z1ugfN1.png" alt="" style="max-width: 300px;" />
                                        <p style="color: white; margin: 5px 0; font-family: Comfortaa;">Agencia de desarrollo de sitios web.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img
                                            style="width: 100%; height: 100px; margin: 0; padding: 0; vertical-align: middle;"
                                            class="vector-top"
                                            src="https://i.imgur.com/UHCg5RQ.png"
                                            alt=""
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="mail-content" style="width: 100%; padding: 40px 0; margin-top: -120px; background: white;">
                                            <h1 style="width: 80%; margin: 20px auto; color: #2a026e; font-family: Comfortaa;">Nueva Solicitud de Plan</h1>
                                            <h2 style="width: 80%; margin: 20px auto; font-family: Comfortaa; color: #555; font-size: 20px;">
                                                Gracias por confiar en <b>Aralix</b>, te contestaremos a la brevedad.
                                            </h2>
                                            <p style="width: 80%; margin: 20px auto; font-family: Comfortaa; color: #555;">
                                                <b>Plan</b>: ' . $plan . '
                                            </p>
                                            <p style="width: 80%; margin: 20px auto; font-family: Comfortaa; color: #555;">
                                                <b>Nombre</b>: ' . $nombre . '
                                            </p>
                                            <p style="width: 80%; margin: 20px auto; font-family: Comfortaa; color: #555;">
                                                <b>Correo Electronico</b>: ' . $gmail . '
                                            </p>
                                            <p style="width: 80%; margin: 20px auto; font-family: Comfortaa; color: #555;">
                                                <b>Celular / Telefono</b>: ' . $celular . '
                                            </p>
                                            <p style="width: 80%; margin: 20px auto; font-family: Comfortaa; color: #555;">
                                                ' . $comentario . '
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <div class="mail-footer" style="width: 100%; display: flex; justify-content: center; align-items: center; flex-direction: column; text-align: center; background: #161D27;">
                                        <p style="color: #aaa; font-size: 1em; margin: 5px auto; font-family: Comfortaa;">Copyright © 2021 <b style="font-weight: normal; color: white;">Aralix</b>. Todos los derechos reservados.</p>
                                    </div>
                                    </td>
                                </tr>
                            </table>
                        </div>';

    $mail->send();

    
    header("location: Enviado.html");
} catch (Exception $e) {
    header("location: Failed.html");
}

?>