<?php include "includes/session.php"; ?>
<?php include "includes/dbconnect.php"; ?>
<?php $title = "Feedback"; ?>
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
            <p class="lead">Список вопросов</p>
        </div>
        <?php

        class Show_feeds
        {
            public $id_feedback;
            public $name;
            public $email;
            public $phone_number;
            public $company_name;
            public $subject;
            public $message;

            public function info()
            {
                return "<tr><td>{$this->id_feedback}</td> <td>{$this->name}</td><td>{$this->email}</td><td>{$this->phone_number}</td><td>{$this->company_name}</td><td>{$this->subject}</td><td>{$this->message}</td></tr>";
            }
        }

        echo "<table class='table table-bordered table-responsive table-striped table-hover'><th>№</th><th>Клиент</th><th>Email</th><th>Телефон</th><th>Компания</th><th>Тема мебели</th><th>Сообщение</th>";
        $sql = "SELECT id_feedback, name, email, phone_number, company_name, subject, message FROM feedback";
        $reception = $pdo->query($sql);
        $rows = $reception->fetchAll(PDO::FETCH_CLASS, "Show_feeds");
        foreach ($rows as $reception) {
            echo $reception->info();
        }
        echo "</table>";
        ?>

    </div><!--/.container-->


</section><!--/#order-->
<?php include "includes/footer.php" ?>
