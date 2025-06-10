<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'grossvladlen0@gmail.com';
    $mail->Password = 'mrkcofqxjiriwqfv'; // Замените на пароль приложения!
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;
    $mail->CharSet = "UTF-8";
    $mail->isHTML(true);
    $mail->setFrom('grossvladlen0@gmail.com', 'My Site');
    $mail->addAddress('born-1965@mail.ru');

    $data = $_POST;
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $data = $_GET;
    }

    $honeypotName = 'hp_' . substr(md5(rand()), 0, 8); // Генерируем случайное имя

    if (!empty($data)) {

        // Honeypot check:
        if (!empty($data[$honeypotName])) {
            echo 'Warning, spam!'; // Или просто exit;
            exit;
        }


        $mail->Subject = trim($data["project_name"]);
        $body = trim($data["form_subject"]) . '<br>';
        $body .= '- Имя: ' . htmlspecialchars($data['name']) . '<br>';
        $body .= '- Телефон: ' . htmlspecialchars($data['phone']) . '<br>';
        $body .= '- Email: ' . htmlspecialchars($data['email']) . '<br>';
        $body .= '- Сообщение: ' . htmlspecialchars($data['message']) . '<br>';
        $formcheck = isset($data['formcheck']) ? 'Yes' : 'No';
        $body .= '- Formcheck: ' . $formcheck;
        $mail->Body = $body;

        // ... ваша дополнительная логика проверки на спам ...

        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Сообщение отправлено';

    } else {
        echo "No data received.";
    }

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    echo "Mailer Error Detail: " . $e->getMessage();
}
?>
