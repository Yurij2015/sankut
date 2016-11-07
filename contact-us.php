<?php include "includes/session.php"; ?>
<?php include "includes/dbconnect.php"; ?>
<?php $title = "Контакты"; ?>
<?php include "includes/header.php" ?>
<li><a href="index.php">Главная</a></li>
<li><a href="about-us.php">О компании</a></li>
<li><a href="services.php">Услуги</a></li>
<li><a href="portfolio.php">Примеры</a></li>
<li><a href="order.php">Заказать</a></li>
<li  class="active"><a href="contact-us.php">Контакты</a></li>
</ul>
</div>
</div><!--/.container-->
</nav><!--/nav-->

</header><!--/header-->


<section id="contact-info">
    <div class="container">
        <div class="center">
            <h2>Обратная связь</h2>
            <p class="lead">Если у Вас есть вопросы, которые не связаны из заказом услуги, заполните форму и отправьте ее. <br>Наши специалисты прочитают и ответят на Ваши вопросы.</p>
            <p class="lead">Заказ можно оформить здесь - <a href="order.php">Страница заказа</a></p>
            <h2><?php echo message(); ?></h2>
        </div>
        <div class="row contact-wrap">
            <div class="status alert alert-success" style="display: none"></div>
            <form class="contact-form" name="contact-form" method="post" action="processing_contact-us.php">
                <div class="col-sm-5 col-sm-offset-1">
                    <div class="form-group">
                        <label>Имя *</label>
                        <input type="text" name="name" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label>Email *</label>
                        <input type="email" name="email" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label>Номер телефона</label>
                        <input type="text" class="form-control" name="phone_number">
                    </div>
                    <div class="form-group">
                        <label>Название компании</label>
                        <input type="text" class="form-control" name="company_name">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Тема *</label>
                        <input type="text" name="subject" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label>Сообщение *</label>
                        <textarea name="message" required="required" class="form-control"
                                  rows="8"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-lg">Отправить сообщение
                        </button>
                    </div>
                </div>
            </form>
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#contact-page-->
<?php include "includes/footer.php" ?>
