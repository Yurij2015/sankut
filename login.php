<?php
session_start();
if($_SESSION['admin']){
    header("Location: admin.php");
    exit;
}
$admin = 'admin';
$pass = 'a029d0df84eb5549c641e04a9ef389e5';
if ($_POST['submit']) {
    if ($admin == $_POST['user'] AND $pass == md5($_POST['pass'])) {
        $_SESSION['admin'] = $admin;
        header("Location: admin.php");
        exit;
    } else $wrong_p_or_l = "Неправильный логин или пароль!";
}
?>
<?php $title = "Auth"; ?>
<?php include "includes/header.php" ?>
<li><a href='index.php'>Главная</a></li>
<li><a href='about-us.php'>О компании</a></li>
<li><a href='services.php'>Услуги</a></li>
<li><a href='portfolio.php'>Примеры</a></li>
<li><a href='order.php'>Заказать</a></li>
<li><a href='contact-us.php'>Контакты</a></li>" ?>
</ul>
</div>
</div> <!--container-->
</nav> <!--nav-->
</header> <!--header-->
<section class='container text-center'>
    <div class='container'>
        <div class='center'>
            <h2>Авторизация на сайте</h2>
            <b class="wrong_p_or_l"> <?php echo $wrong_p_or_l; ?></b>
            <form method="post">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="form-group">
                        <label>Логин:<br>
                            <input type="text" name="user">
                        </label></div>
                    <div class="form-group">
                        <label>Пароль:<br>
                            <input type="password" name="pass">
                        </label></div>
                    <div class="form-group">
                        <label>
                            <input type="submit" name="submit" class="btn btn-primary btn-lg" value="Войти">
                        </label>
                    </div>
                </div>
            </form>
        </div>
    </div><!--/.container-->
</section><!--/#order-->
<?php include "includes/footer.php" ?>
