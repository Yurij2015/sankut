<?php include "includes/session.php"; ?>
<?php include "includes/dbconnect.php"; ?>
<?php $title = "Admin"; ?>
<?php include "includes/header.php" ?>
<li><a href="index.php">Главная</a></li>
<li><a href="about-us.php">О компании</a></li>
<li><a href="services.php">Услуги</a></li>
<li><a href="portfolio.php">Примеры</a></li>
<li><a href="order.php">Заказать</a></li>
<li><a href="contact-us.php">Контакты</a></li>
</ul>
</div>
</div><!--/.container-->
</nav><!--/nav-->

</header><!--/header-->

<section id="admin" class="container text-center">

    <div class="container">
        <div class="center">
            <h2>Административная панель</h2>
            <p class="lead">Просмотр заявок и заказов</p>

            <div class="list-group">
                <a href="list_of_orders.php" class="list-group-item" target="_blank">
                    Заявки</a>
                <a href="list_of_feeds.php" class="list-group-item" target="_blank">
                    Вопросы</a>
            </div>

        </div>


    </div><!--/.container-->


</section><!--/#order-->
<?php include "includes/footer.php" ?>
