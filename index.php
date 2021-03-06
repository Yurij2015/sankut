<?php $title = "Главная страница"; ?>
<?php include "includes/header.php" ?>
<li class="active"><a href="index.php">Главная</a></li>
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
<section id="main-slider" class="no-margin">
    <div class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">

            <div class="item active" style="background-image: url(images/slider/bg1.jpg)">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-6">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1">Мастерская мягкой мебели на заказ</h1>
                                <h2 class="animation animated-item-2">У нас Вы можете заказать изготовление дивана или
                                    кресла по индивидуальлному проекту...</h2>
                                <a class="btn-slide animation animated-item-3" href="#">Читать далее</a>
                            </div>
                        </div>

                        <div class="col-sm-6 hidden-xs animation animated-item-4">
                            <div class="slider-img">
                                <img src="images/slider/img1.png" class="img-responsive">
                            </div>
                        </div>

                    </div>
                </div>
            </div><!--/.item-->

            <div class="item" style="background-image: url(images/slider/bg2.jpg)">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-6">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1">Поможем выбрать, оценить и рассставить мебель в
                                    вашем доме или офисе</h1>
                                <h2 class="animation animated-item-2">Наши специалисты помогут подобрать Вам необходимую
                                    мебель для Вашего дома или офиса...</h2>
                                <a class="btn-slide animation animated-item-3" href="#">Читать далее</a>
                            </div>
                        </div>

                        <div class="col-sm-6 hidden-xs animation animated-item-4">
                            <div class="slider-img">
                                <img src="images/slider/img2.png" class="img-responsive">
                            </div>
                        </div>

                    </div>
                </div>
            </div><!--/.item-->

            <div class="item" style="background-image: url(images/slider/bg3.jpg)">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-6">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1">Выбирайте качество от нашей компании и будьте
                                    уверены в наших лучших специалистах</h1>
                                <h2 class="animation animated-item-2">Специалисты и менеджеры с радостью проконсультирут
                                    и посоветуют лучшие решения по вашему вопросу...</h2>
                                <a class="btn-slide animation animated-item-3" href="#">Читать далее</a>
                            </div>
                        </div>
                        <div class="col-sm-6 hidden-xs animation animated-item-4">
                            <div class="slider-img">
                                <img src="images/slider/img3.png" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
    <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
        <i class="fa fa-chevron-left"></i>
    </a>
    <a class="next hidden-xs" href="#main-slider" data-slide="next">
        <i class="fa fa-chevron-right"></i>
    </a>
</section><!--/#main-slider-->

<section id="feature">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>Наши преимущества и особенности</h2>
            <p class="lead">Выбирая наши товары и услуги Вы получите отличное качество и приятное обслуживание. А наши
                мастера выполнят на высшем уровне любую задачу по созданию мебельных конструкций</p>
        </div>


        <div class="row">
            <div class="features">
                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-bullhorn"></i>
                        <h2>О нас говорят</h2>
                        <h3>Качественные услуги и товары о которых не стыдно рассказать</h3>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-comments"></i>
                        <h2>Он-лайн</h2>
                        <h3>Наши консультанты предоставят онлайн-консультацию</h3>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-cloud-download"></i>
                        <h2>Наш прайслист</h2>
                        <h3>Смотрите прайс-лист для ознакомления с нашими товарми и услугами</h3>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-leaf"></i>
                        <h2>Лучшее качество</h2>
                        <h3>Мебель из лучшего дерева и тканей. Только экологичные материалы</h3>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-cogs"></i>
                        <h2>Легко собрать</h2>
                        <h3>Легкособираемая мебель высшего качества на любой вкус</h3>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-heart"></i>
                        <h2>Любимая мебель</h2>
                        <h3>Заказав один раз мебель клиенты нас выбирают навсегда</h3>
                    </div>
                </div><!--/.col-md-4-->
            </div><!--/.services-->
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#feature-->

<section id="recent-works">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>Наши работы</h2>
            <p class="lead">Фотографии нашей мебели. Это то что Мы уже делали, кроме этого, мы можем сделать практически
                любую мебель. На это мы тратим от одно дня до 3 недель</p>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="images/portfolio/recent/item1.png" alt="">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <h3><a href="#">Мебель в коттедж</a></h3>
                            <p>Красивая и изысканная мебель для коттеджного дома за городом</p>
                            <a class="preview" href="images/portfolio/full/item1.png" rel="prettyPhoto"><i
                                    class="fa fa-eye"></i> Посмотреть</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="images/portfolio/recent/item2.png" alt="">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <h3><a href="#">Детская комната</a></h3>
                            <p>Мебель с экологичных материалов для детской комнаты. Любые расцветки</p>
                            <a class="preview" href="images/portfolio/full/item2.png" rel="prettyPhoto"><i
                                    class="fa fa-eye"></i> Посмотреть</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="images/portfolio/recent/item3.png" alt="">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <h3><a href="#">Мебель в комнате </a></h3>
                            <p>Красивый комплект мебели для вашей команты по любому вкусу. Любые цветаy</p>
                            <a class="preview" href="images/portfolio/full/item3.png" rel="prettyPhoto"><i
                                    class="fa fa-eye"></i> Посмотреть</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="images/portfolio/recent/item4.png" alt="">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <h3><a href="#">Детский уголок </a></h3>
                            <p>Детский уголок в ограниченном простанстве. Если у Вас мало места квартире</p>
                            <a class="preview" href="images/portfolio/full/item4.png" rel="prettyPhoto"><i
                                    class="fa fa-eye"></i> Посмотреть</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="images/portfolio/recent/item5.png" alt="">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <h3><a href="#">Кухонный уголок</a></h3>
                            <p>Качественные материалы и оригинальный дизайн прийдутся по вкусу любой хозяйке</p>
                            <a class="preview" href="images/portfolio/full/item5.png" rel="prettyPhoto"><i
                                    class="fa fa-eye"></i> Посмотреть</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="images/portfolio/recent/item6.png" alt="">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <h3><a href="#">Стенка для книг и телевизона </a></h3>
                            <p>Лучшее место для размещения вашего телевизона, а также любимых книг</p>
                            <a class="preview" href="images/portfolio/full/item6.png" rel="prettyPhoto"><i
                                    class="fa fa-eye"></i> Посмотреть</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="images/portfolio/recent/item7.png" alt="">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <h3><a href="#">Для школьника </a></h3>
                            <p>Стол и спальное место для ученика. Еще один вариант оптимизации площади</p>
                            <a class="preview" href="images/portfolio/full/item7.png" rel="prettyPhoto"><i
                                    class="fa fa-eye"></i> Посмотреть</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="images/portfolio/recent/item8.png" alt="">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <h3><a href="#">Детская спальня </a></h3>
                            <p>Красочная детская спальня для двоих деток. Все самое необходимое</p>
                            <a class="preview" href="images/portfolio/full/item8.png" rel="prettyPhoto"><i
                                    class="fa fa-eye"></i> Посмотреть</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#recent-works-->

<section id="services" class="service-item">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>Наши услуги</h2>
            <p class="lead">Наша компания предоставляет широкий перечень услуг на ряду с основной услугой. <br>С
                перечнем услуг можно ознакомиться ниже</p>
        </div>

        <div class="row">

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="images/services/services1.png">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Производство</h3>
                        <p>Современное оборудование для производства мебели</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="images/services/services2.png">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Перетяжка</h3>
                        <p>Качественные ткани для перетяжки мебели</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="images/services/services3.png">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Ремонт</h3>
                        <p>Лучшие мастера. Ремонтируют любую мебель </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="images/services/services4.png">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Дизайн</h3>
                        <p>Профессиональные дизайнеры разработают прекрасный дизайн</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="images/services/services5.png">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Для офиса</h3>
                        <p>Лучшая офисная мебель в городе. Качественные и прочные материалы</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="images/services/services6.png">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Для дома</h3>
                        <p>Красивая мебель для дома которая обеспечит уютную обстановку</p>
                    </div>
                </div>
            </div>
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#services-->

<section id="middle">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 wow fadeInDown">
                <div class="skill">
                    <h2>У нас заказывают</h2>
                    <p>Наши специалисты выполняют большое число работ, среди которые наиболее популярными являются
                        производство мебели для дома и офиса.</p>

                    <div class="progress-wrap">
                        <h3>Для дома</h3>
                        <div class="progress">
                            <div class="progress-bar  color1" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 85%">
                                <span class="bar-width">85%</span>
                            </div>

                        </div>
                    </div>

                    <div class="progress-wrap">
                        <h3>Для офиса</h3>
                        <div class="progress">
                            <div class="progress-bar color2" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 95%">
                                <span class="bar-width">95%</span>
                            </div>
                        </div>
                    </div>

                    <div class="progress-wrap">
                        <h3>Ремонт</h3>
                        <div class="progress">
                            <div class="progress-bar color3" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 80%">
                                <span class="bar-width">80%</span>
                            </div>
                        </div>
                    </div>

                    <div class="progress-wrap">
                        <h3>Перетяжка</h3>
                        <div class="progress">
                            <div class="progress-bar color4" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 44%">
                                <span class="bar-width">44%</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!--/.col-sm-6-->

            <div class="col-sm-6 wow fadeInDown">
                <div class="accordion">
                    <h2>Почему нас выбирают?</h2>
                    <div class="panel-group" id="accordion1">
                        <div class="panel panel-default">
                            <div class="panel-heading active">
                                <h3 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1"
                                       href="#collapseOne1">
                                        Качественные услуги и товары
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </a>
                                </h3>
                            </div>

                            <div id="collapseOne1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <div class="media accordion-inner">
                                        <div class="pull-left">
                                            <img class="img-responsive" src="images/accordion1.png">
                                        </div>
                                        <div class="media-body">
                                            <h4>Качество товаров</h4>
                                            <p>Качественные материалы для производства мебели обеспечивают экологичность
                                                и надежность нашей мебели.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1"
                                       href="#collapseTwo1">
                                        Профессиональные мастера
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </a>
                                </h3>
                            </div>
                            <div id="collapseTwo1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Большой опыт наших мастеров гарантируют ремонт любой сложности на месте. После
                                    оценки повреждений мастер принимает решение о дальнейших действиях, на месте, или в
                                    мастерской будет происходить ремонт.
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1"
                                       href="#collapseThree1">
                                        Отзывчивые консультанты
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </a>
                                </h3>
                            </div>
                            <div id="collapseThree1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Опытные менеджера и консультанты выслушают Вас, обговорят с Вами проблему и
                                    предложат способ оптимального решения поставленных задач.
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1"
                                       href="#collapseFour1">
                                        Бесплатная доставка в офис и дом
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </a>
                                </h3>
                            </div>
                            <div id="collapseFour1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Кроме качественной мебели, профессиональных мастеров и хороших консультантов мы
                                    обеспечиваем доставку купленных товаров на дом или офис. Наши грузчики занесут
                                    мебель куда требуется.
                                </div>
                            </div>
                        </div>
                    </div><!--/#accordion1-->
                </div>
            </div>

        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#middle-->

<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 wow fadeInDown">
                <div class="tab-wrap">
                    <div class="media">
                        <div class="parrent pull-left">
                            <ul class="nav nav-tabs nav-stacked">
                                <li class=""><a href="#tab1" data-toggle="tab" class="analistic-01">Высокая скорость</a>
                                </li>
                                <li class="active"><a href="#tab2" data-toggle="tab"
                                                      class="analistic-02">Визуализация</a></li>
                                <li class=""><a href="#tab3" data-toggle="tab" class="tehnical">Качество</a>
                                </li>
                                <li class=""><a href="#tab4" data-toggle="tab" class="tehnical">Всегда на связи</a></li>
                                <li class=""><a href="#tab5" data-toggle="tab" class="tehnical">В тренде</a></li>
                            </ul>
                        </div>

                        <div class="parrent media-body">
                            <div class="tab-content">
                                <div class="tab-pane fade" id="tab1">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="img-responsive" src="images/tab2.png">
                                        </div>
                                        <div class="media-body">
                                            <h2>Заказывайте у нас</h2>
                                            <p>Вся мебель изготавливается индивидуально. Вы выбираете цвет, материал,
                                                наполнитель, дерево. Средний срок изготовления, всего 3 недели.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade active in" id="tab2">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="img-responsive" src="images/tab1.png">
                                        </div>
                                        <div class="media-body">
                                            <h2>Посмотрите модель</h2>
                                            <p>Создадим 3D визуализацию. Как Ваш диван будет смотреться в Вашем
                                                настоящем или будущем интерьере.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab3">
                                    <p>Дорогие и качественные материалы. Безупречная сборка и высококвалифицированный
                                        персонал.</p>
                                </div>

                                <div class="tab-pane fade" id="tab4">
                                    <p>Мы всегда готовы ответить на все ваши вопросы, дать обратную связь по вашему
                                        заказу и оперативно реагировать на любые изменения.</p>
                                </div>

                                <div class="tab-pane fade" id="tab5">
                                    <p>Мы тщательно следим за последними веяниями моды и создаем нашу мебель с учетом
                                        новых технологий и направлений.</p>
                                </div>
                            </div> <!--/.tab-content-->
                        </div> <!--/.media-body-->
                    </div> <!--/.media-->
                </div><!--/.tab-wrap-->
            </div><!--/.col-sm-6-->

            <div class="col-xs-12 col-sm-4 wow fadeInDown">
                <div class="testimonial">
                    <h2>Отзывы</h2>
                    <div class="media testimonial-inner">
                        <div class="pull-left">
                            <img class="img-responsive img-circle" src="images/testimonials1.png">
                        </div>
                        <div class="media-body">
                            <p>Спасибо за детскую спальню. Все отлично. Дети довольны. Места в квартире стало
                                больше.</p>
                            <span><strong>- Мария Б.</strong></span>
                        </div>
                    </div>

                    <div class="media testimonial-inner">
                        <div class="pull-left">
                            <img class="img-responsive img-circle" src="images/testimonials2.png">
                        </div>
                        <div class="media-body">
                            <p>Получла кухню, какую хотела. Все что нужно есть. Очень красиво. Подруги уже спрашивают
                                контакты компанни, где это делали.</p>
                            <span><strong>- Валентина М.</strong></span>
                        </div>
                    </div>

                </div>
            </div>

        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#content-->

<section id="partner">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>Наши партнеры</h2>
            <p class="lead">Мы сотрудничаем только с лучшими компаниями-производителями материалов и сырья,<br> которые
                используются в создании мебели. </p>
        </div>

        <div class="partners">
            <ul>
                <li><a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms"
                                     data-wow-delay="300ms" src="images/partners/partner1.png"></a></li>
                <li><a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms"
                                     data-wow-delay="600ms" src="images/partners/partner2.png"></a></li>
                <li><a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms"
                                     data-wow-delay="900ms" src="images/partners/partner4.png"></a></li>
                <li><a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms"
                                     data-wow-delay="1200ms" src="images/partners/partner3.png"></a></li>
                <li><a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms"
                                     data-wow-delay="1500ms" src="images/partners/partner5.png"></a></li>
            </ul>
        </div>
    </div><!--/.container-->
</section><!--/#partner-->

<section id="conatcat-info">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="pull-left">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="media-body">
                        <h2>У Вас остались еще вопросы?</h2>
                        <p>Позвоните нашим специалистам и они быстро и качественно помогут Вам решить любой вопрос,
                            связанный с ремонтом, производством, перетяжкой, как офисной так и домашней мебели 8 (951)
                            27-03-330</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.container-->
</section><!--/#conatcat-info-->
<?php include "includes/footer.php" ?>

