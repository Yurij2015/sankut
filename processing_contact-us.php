<?php include "includes/functions.php"; ?>
<?php include "includes/dbconnect.php"; ?>
<?php include "includes/functions.php"; ?>
<?php
if (isset($_POST['submit'])) {

    $name = trim(htmlentities($_POST["name"]));
    $email = trim(htmlentities($_POST["email"]));
    $phone_number = trim(htmlentities($_POST["phone_number"]));
    $company_name = trim(htmlentities($_POST["company_name"]));
    $subject = trim(htmlentities($_POST["subject"]));
    $message = trim(htmlentities($_POST["message"]));

    $stmt = $pdo->prepare("INSERT INTO feedback (name, email, phone_number, company_name, subject, message) VALUES (:name, :email, :phone_number, :company_name, :subject, :message)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phone_number', $phone_number);
    $stmt->bindParam(':company_name', $company_name);
    $stmt->bindParam(':subject', $subject);
    $stmt->bindParam(':message', $message);
    $stmt->execute();
    if ($stmt) {
        // Успешно
        $_SESSION["message"] = "Вопрос от $name успешно отправлен!";
        redirect_to("contact-us.php");
    } else {
        // Ошибка
        $_SESSION["message"] = "Ошибка отправления заявки";
        redirect_to("contact-us.php");
    }

}
