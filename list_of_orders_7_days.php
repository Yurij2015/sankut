<?php include "includes/session.php"; ?>
<?php include "includes/dbconnect.php"; ?>
<?php $title = "Orders"; ?>
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
            <p class="lead"><a href="list_of_orders.php">Назад</a></p>
            <p class="lead">Список заказов за последние 7 дней</p>
        </div>

        <?php

        class Show_orders_7d
        {
            public $id;
            public $name;
            public $email;
            public $phone_number;
            public $name_of_service;
            public $name_of_furniture;
            public $wishes;

            public function info()
            {
                return "<tr><td>{$this->id}</td> <td>{$this->name}</td><td>{$this->email}</td><td>{$this->phone_number}</td><td>{$this->name_of_service}</td><td>{$this->name_of_furniture}</td><td>{$this->wishes}</td></tr>";
            }
        }

        echo "<table class='table table-bordered table-responsive table-striped table-hover'><th>№</th><th>Клиент</th><th>Email</th><th>Телефон</th><th>Услуга</th><th>Вид мебели</th><th>Пожелания</th>";
        $sql = "SELECT id, name, email, phone_number, service.name_of_service, furniture.name_of_furniture, wishes FROM orders, furniture, service WHERE service.id_service = orders.service and furniture.id_furniture = orders.furniture and  date > NOW() - INTERVAL 7 DAY";
        $reception = $pdo->query($sql);
        $rows = $reception->fetchAll(PDO::FETCH_CLASS, "Show_orders_7d");
        foreach ($rows as $reception) {
            echo $reception->info();
        }
        echo "</table>";
        ?>

    </div><!--/.container-->


</section><!--/#order-->
<?php include "includes/footer.php" ?>
