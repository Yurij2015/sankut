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
        </div>

        <div class="row contact-wrap">
            <div class="status alert alert-success" style="display: none"></div>
            <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
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
                        <label>Номер телефона *</label>
                        <input type="number" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label>Вид услуги *</label>
                        <select type="text" class="form-control" name="servises">
                            <option value="для дома">Мебель для дома</option>
                            <option value="для офиса">Мебель для офиса</option>
                            <option value="ремонт">Ремонт мебели</option>
                            <option value="перетяжка">Перетяжка мебели</option>
                            <option value="другое">Другое</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Вид мебели *</label>
                        <select type="text" name="object" class="form-control" required="required">
                            <option value="диван">Диван</option>
                            <option value="кресло">Кресло</option>
                            <option value="стул">Стул</option>
                            <option value="стол">Стол</option>
                            <option value="кровать">Кровать</option>
                            <option value="шкаф">Шкаф</option>
                            <option value="полка">Полка</option>
                            <option value="тумба">Тумба</option>
                            <option value="комплект">Комплект</option>
                            <option value="другое">Другое</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Пожелания</label>
                        <textarea name="message" id="message" class="form-control"
                                  rows="8"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Заказать
                        </button>
                    </div>
                </div>
            </form>
        </div><!--/.row-->
    </div><!--/.container-->


</section><!--/#order-->
<?php include "includes/footer.php" ?>
