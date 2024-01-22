<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получение данных из формы
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    // Токен вашего телеграм-бота
    $telegram_bot_token = "6984080800:AAEnNG9cKA2DW55X1hiddgB4bSXQ5aRxGJg";

    // ID вашего чата в Телеграм
    $telegram_chat_id = "-1002095101302";

    // Составление сообщения
    $message = "Новый лид:\nИмя: $name\nТелефон: $phone";

    // Отправка сообщения в Телеграм
    file_get_contents("https://api.telegram.org/bot$telegram_bot_token/sendMessage?chat_id=$telegram_chat_id&text=$message");

    // Дополнительные действия, если необходимо

    // Перенаправление пользователя после отправки формы
    header("Location: success.html");
    exit();
} else {
    // Если запрос не является POST-запросом, перенаправьте пользователя на домашнюю страницу или другую страницу
    header("Location: index.html");
    exit();
}
?>
