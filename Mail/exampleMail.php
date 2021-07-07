<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

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
    $mail->setFrom('aralixuy@gmail.com', 'Aralix');
    $mail->addAddress('aralixuy@gmail.com');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Nueva Solicitud de Contacto';
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
                                            <p style="width: 80%; margin: 20px auto; font-family: Comfortaa; color: #555;">
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis
                                                facere totam provident? Ipsam accusamus quia placeat tempora sit
                                                vitae natus enim cumque, aut perferendis illo voluptates corrupti
                                                hic excepturi incidunt.
                                            </p>
                                            <p style="width: 80%; margin: 20px auto; font-family: Comfortaa; color: #555;">
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis
                                                facere totam provident? Ipsam accusamus quia placeat tempora sit
                                                vitae natus enim cumque, aut perferendis illo voluptates corrupti
                                                hic excepturi incidunt.
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
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>