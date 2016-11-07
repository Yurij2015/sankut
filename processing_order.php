<?php include "includes/session.php"; ?>
<?php include "includes/dbconnect.php"; ?>
<?php include "includes/functions.php"; ?>
<?php
if (isset($_POST['submit'])) {

    $name = trim(htmlentities($_POST["name"]));
    $email = trim(htmlentities($_POST["email"]));
    $phone_number = trim(htmlentities($_POST["phone_number"]));
    $furniture = trim(htmlentities($_POST["furniture"]));
    $service = trim(htmlentities($_POST["service"]));
    $wishes = trim(htmlentities($_POST["wishes"]));

    $stmt = $pdo->prepare("INSERT INTO orders (name, email, phone_number, furniture, service, wishes) VALUES (:name, :email, :phone_number, :furniture, :service, :wishes)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phone_number', $phone_number);
        $stmt->bindParam(':furniture', $furniture);
    $stmt->bindParam(':service', $service);
    $stmt->bindParam(':wishes', $wishes);
    $stmt->execute();
    if ($stmt) {
        // Успешно
        $_SESSION["message"] = "Заявка на имя $name успешно добавлена!";
        redirect_to("order.php");
    } else {
        // Ошибка
        $_SESSION["message"] = "Ошибка отправления заявки";
        redirect_to("order.php");
    }

}
