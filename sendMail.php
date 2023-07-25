<?php
if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['town'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $town = $_POST['town'];

    $to = 'kovalenkoaliona82@gmail.com'; 
    $subject = 'Новое письмо с формы';
    $message = "Имя: $name\nТелефон: $phone\nГород: $town";
    $headers = "From: 21itzs.kovalenko.a@pdu.by\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    if(mail($to, $subject, $message, $headers)) {
        echo "Письмо успешно отправлено.";
        header("Location: " . "success.html");
        exit();
    } else {
        echo "Ошибка при отправке письма.";
        header("Location: " . "index.html");
        exit();
    }
}

?>

