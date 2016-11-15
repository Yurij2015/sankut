<?php include "includes/functions.php"; ?>
<?php include "includes/dbconnect.php"; ?>
<?php $title = "Оформить заказ"; ?>
<?php include "includes/header.php" ?>
<li><a href="index.php">Главная</a></li>
<li><a href="about-us.php">О компании</a></li>
<li><a href="services.php">Услуги</a></li>
<li><a href="portfolio.php">Примеры</a></li>
<li class="active"><a href="order.php">Заказать</a></li>
<li><a href="contact-us.php">Контакты</a></li>
</ul>
</div>
</div><!--/.container-->
</nav><!--/nav-->

</header><!--/header-->

<section id="order" class="container text-center">


    <div class="container">
        <div class="center">

            <h2>Оформить заказ</h2>
            <p class="lead">Заполните форму и нажмите кнопку "Заказать".</p>
            <p class="lead">Если есть вопросы не по заказу, Вам сюда - <a href="about-us.php">Обратная связь</a></p>
            <h2><?php echo message(); ?></h2>

        </div>

        <div class="row contact-wrap">
            <div class="status alert alert-success" style="display: none"></div>
            <form class="contact-form" name="contact-form" method="post"
                  action="processing_order.php">
                <div class="col-sm-5 col-sm-offset-1">
                    <div class="form-group">
                        <label>Имя и Фамилия *</label>
                        <input type="text" name="name" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label>Email *</label>
                        <input type="email" name="email" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label>Номер телефона *</label>
                        <input type="text" class="form-control" required="required" name="phone_number">
                    </div>
                    <div class="form-group">
                        <label>Вид услуги *</label>
                        <select type="text" class="form-control" name="service">
                            <option value="1">Мебель для дома</option>
                            <option value="2">Мебель для офиса</option>
                            <option value="5">Ремонт мебели</option>
                            <option value="6">Перетяжка мебели</option>
                            <option value="9">Другое</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Вид мебели *</label>
                        <select type="text" name="furniture" class="form-control"
                                required="required">
                            <option value="1">Диван</option>
                            <option value="2">Кресло</option>
                            <option value="3">Стул</option>
                            <option value="4">Стол</option>
                            <option value="5">Кровать</option>
                            <option value="6">Шкаф</option>
                            <option value="7">Полка</option>
                            <option value="8">Тумба</option>
                            <option value="9">Комплект</option>
                            <option value="10">Другое</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Пожелания</label>
                        <textarea name="wishes" class="form-control"
                                  rows="8"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-lg">Заказать
                        </button>
                    </div>
                </div>
            </form>
        </div><!--/.row-->
    </div><!--/.container-->


</section><!--/#order-->
<?php include "includes/footer.php" ?>
