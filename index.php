<?php
$connection = new PDO('mysql:host=localhost;dbname=resume_db;charset=utf8;','root','root');
$aboutData = $connection->query("SELECT * FROM about");
$aboutData = $aboutData->fetch();
$educationData = $connection->query("SELECT * FROM education");
$languagesData = $connection->query("SELECT * FROM languages");
$interestsData = $connection->query("SELECT * FROM interests");
$aboutMyData =  $connection->query("SELECT * FROM aboutmy");
$aboutMyData = $aboutMyData->fetch();
$experienceData =  $connection->query("SELECT * FROM experience");
$skillSetData =  $connection->query("SELECT * FROM skillSet");
$projectsData =  $connection->query("SELECT * FROM projects");
?>

<!DOCTYPE html>
<!--[if IE 8]>
<html lang="ru" class="ie8"> <![endif]-->
<!--[if IE 9]>
<html lang="ru" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="ru"> <!--<![endif]-->
<head>
    <title>Разработчик / программист</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Разработчик / программист">
    <meta name="author" content="Рустам Сираев">
    <link rel="shortcut icon" href="favicon.ico">
    <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700&subset=cyrillic,latin" rel="stylesheet" type="text/css" />
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css" />
    <link href="assets/css/messengers_widget.css" type="text/css" rel="stylesheet" media="screen" />
    <link href="assets/css/messengers_widget_settings.css" type="text/css" rel="stylesheet" media="screen" />
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
</head>

<body>
<div class="wrapper">
    <div class="sidebar-wrapper">
        <div class="profile-container">
            <img class="profile" src="assets/images/profile.jpg" alt=""/>
            <h1 class="name"><?= $aboutData['name'] ?></h1>
            <h3 class="tagline"><?= $aboutData['post'] ?></h3>
        </div><!--//profile-container-->

        <div class="contact-container container-block">
            <ul class="list-unstyled contact-list">
                <li class="email"><i class="fa fa-envelope"></i><a
                            href="mailto: <?= $aboutData['email'] ?>"><?= $aboutData['email'] ?></a></li>
                <li class="phone"><i class="fa fa-phone"></i><a
                            href="tel:<?= $aboutData['phone'] ?>"><?= $aboutData['phone'] ?></a></li>
                <li class="website"><i class="fa fa-globe"></i><a
                            href="https://<?= $aboutData['site'] ?>"
                            target="_blank"><?= $aboutData['site'] ?></a></li>
                <li class="github"><i class="fa fa-github"></i><a
                            href="https://github.com/RustamSiraev"
                            target="_blank">GitHub</a></li>
            </ul>
        </div><!--//contact-container-->
        <div class="education-container container-block">
            <h2 class="container-block-title">Образование</h2>
            <? foreach ($educationData as $education) { ?>
                <div class="item">
                    <h4 class="degree"><?= $education['faculty'] ?></h4>
                    <h5 class="meta"><?= $education['university'] ?></h5>
                    <div class="time"><?= $education['years'] ?></div>
                </div><!--//item-->
            <? } ?>
        </div><!--//education-container-->

        <div class="languages-container container-block">
            <h2 class="container-block-title">Знание языков</h2>
            <ul class="list-unstyled interests-list">
                <? foreach ($languagesData as $language) { ?>
                <li><?= $language['title'] ?><span class="lang-desc"> (Средний)</span></li>
                <? } ?>
            </ul>
        </div><!--//interests-->

        <div class="interests-container container-block">
            <h2 class="container-block-title">Интересы</h2>
            <ul class="list-unstyled interests-list">
                <? foreach ($interestsData as $interest) { ?>
                <li><?= $interest ['title'] ?></li>
                <? } ?>
            </ul>
        </div><!--//interests-->

    </div><!--//sidebar-wrapper-->

    <div class="main-wrapper">

        <section class="section summary-section">
            <h2 class="section-title"><i class="fa fa-user"></i>Обо мне</h2>
            <div class="summary">
                <p><?= $aboutMyData['name'] ?></p>
            </div><!--//summary-->
        </section><!--//section-->

        <section class="section experiences-section">
            <h2 class="section-title"><i class="fa fa-briefcase"></i>Опыт работы</h2>
            <? foreach ($experienceData as $experience) { ?>
            <div class="item">
                <div class="meta">
                    <div class="upper-row">
                        <h3 class="job-title"><?= $experience['position'] ?></h3>
                        <div class="time"><?= $experience['yearStart'] ?> - <?= $experience['yearEnd'] ?></div>
                    </div><!--//upper-row-->
                    <div class="company"><?= $experience['company'] ?><br><?= $experience['city'] ?></div>
                </div><!--//meta-->
                <div class="details">
                    <p><?= $experience['description'] ?></p>
                </div><!--//details-->
            </div><!--//item-->
            <? } ?>

        </section><!--//section-->

        <section class="section projects-section">
            <h2 class="section-title"><i class="fa fa-archive"></i>Сайты</h2>
            <div class="item text-center">
                <div id="carousel" class="carousel slide" data-ride="carousel" style="display: inline-block;">
                    <!-- Индикаторы -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel" data-slide-to="1"></li>
                        <li data-target="#carousel" data-slide-to="2"></li>
                        <li data-target="#carousel" data-slide-to="3"></li>
                        <li data-target="#carousel" data-slide-to="4"></li>
                        <li data-target="#carousel" data-slide-to="5"></li>
                        <li data-target="#carousel" data-slide-to="6"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <a href="https://www.vianor-ufa.ru/" target="_blank"><img src="assets/images/vianor-ufa-min.jpg" alt="..."></a>
                        </div>
                        <div class="item">
                            <a href="http://www.kolesaotsklada.ru/" target="_blank"><img src="assets/images/kolesaotsklada-min.jpg" alt="..."></a>
                        </div>
                        <div class="item">
                            <a href="http://www.perezagruzka-sc.ru/" target="_blank"><img src="assets/images/perezagruzka-min.jpg" alt="..."></a>
                        </div>
                        <div class="item">
                            <a href="https://www.master-instrument.top/" target="_blank"><img src="assets/images/master-instrument-min.jpg" alt="..."></a>
                        </div>
                        <div class="item">
                            <a href="https://www.promtransneft.ru/" target="_blank"><img src="assets/images/promtransneft-min.jpg" alt="..."></a>
                        </div>
                        <div class="item">
                            <a href="https://www.metmebeltorg.ru/" target="_blank"><img src="assets/images/metmebeltorg-min.jpg" alt="..."></a>
                        </div>
                        <div class="item">
                            <a href="https://www.remont-chemodanov.top/" target="_blank"><img src="assets/images/remont-chemodanov-min.jpg" alt="..."></a>
                        </div>
                    </div>
                    <!-- Элементы управления -->
                    <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Предыдущий</span>
                    </a>
                    <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Следующий</span>
                    </a>
                </div>
            </div>
        </section><!--//section-->

        <section class="skills-section section">
            <h2 class="section-title"><i class="fa fa-rocket"></i>Навыки и знания</h2>
            <div class="skillset">
                <? foreach ($skillSetData as $skill) { ?>
                <div class="item">
                    <h3 class="level-title"><?= $skill['skillName'] ?></h3>
                    <div class="level-bar">
                        <div class="level-bar-inner" data-level="<?= $skill['level'] ?>%">
                        </div>
                    </div><!--//level-bar-->
                </div><!--//item-->
                <? } ?>
            </div>
        </section><!--//skills-section-->
    </div><!--//main-body-->
</div>

<div class="ts-mw-button" id="ts-mw-id">
    <div class="ts-mw-icon mw-animation mw-animation-2" >
        <div class="slides"><span class="instagram-icon"><img src="assets/images/messengers/instagram.svg" alt="Instagram"></span></div>
        <div class="slides"><span class="viber-icon"><img src="assets/images/messengers/viber.svg" alt="Viber"></span></div>
        <div class="slides"><span class="tg-icon"><img src="assets/images/messengers/telegram.svg" alt="Telegram"></span></div>
        <div class="slides"><span class="whatsapp-icon"><img src="assets/images/messengers/whatsapp.svg" alt="Whatsapp"></span></div>
        <div class="slides"><span class="messenger-icon"><img src="assets/images/messengers/messenger.svg" alt="Messenger"></span></div>
        <div class="slides"><span class="skype-icon"><img src="assets/images/messengers/skype.svg" alt="Skype"></span></div>
        <i class="fa fa-times" aria-hidden="true"></i>
    </div>
    <div class="ts-mw-block mw-no-bg mw-tips tips-right">
        <ul class="ts-mw-list">
            <li class="ts-mw-li ts-instagram"><a href="https://www.instagram.com/sirius0983" rel="nofollow" target="_blank"><span class="instagram-icon"><img src="assets/images/messengers/instagram.svg" alt="Instagram"></span><span class="ts-link-text">Instagram</span></a></li>
            <li class="ts-mw-li ts-viber"><a href="viber://chat?number=%2B79178076639" rel="nofollow" target="_blank"><span class="viber-icon"><img src="assets/images/messengers/viber.svg" alt="Viber"></span><span class="ts-link-text">Viber</span></a></li>
            <li class="ts-mw-li ts-telegram"><a href="http://t.me/Rustam_Siraev" rel="nofollow" target="_blank"><span class="tg-icon"><img src="assets/images/messengers/telegram.svg" alt="Telegram"></span><span class="ts-link-text">Telegram</span></a></li>
            <li class="ts-mw-li ts-whatsapp"><a href="https://api.whatsapp.com/send?phone=79178076639" rel="nofollow" target="_blank"><span class="whatsapp-icon"><img src="assets/images/messengers/whatsapp.svg" alt="Whatsapp"></span><span class="ts-link-text">Whatsapp</span></a></li>
            <li class="ts-mw-li ts-messenger"><a href="https://m.me/messenger" rel="nofollow" target="_blank"><span class="messenger-icon"><img src="assets/images/messengers/messenger.svg" alt="Messenger"></span><span class="ts-link-text">Messenger</span></a></li>
            <li class="ts-mw-li ts-skype"><a href="skype:sirius_0983?chat" rel="nofollow" target="_blank"><span class="skype-icon"><img src="assets/images/messengers/skype.svg" alt="Skype"></span><span class="ts-link-text">Skype</span></a></li>
        </ul>
    </div>
</div>
<div class="ts-mw-substrate"></div>

<footer class="footer">
    <div class="text-center">
        <small class="copyright">Designed with <i class="fa fa-heart"></i> by Rustam Siraev</small>
    </div><!--//container-->
</footer><!--//footer-->
<!-- Javascript -->
<script type="text/javascript" src="assets/plugins/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- custom js -->
<script type="text/javascript" src="assets/js/main.js"></script>
<script>
    $('.ts-mw-icon').click(function(){
        $('#ts-mw-id').toggleClass('open');
        $('.ts-mw-substrate').toggleClass('active');});
    $('.ts-mw-li a').click(function(){
        $('#ts-mw-id').removeClass('open');
        $('.ts-mw-substrate').removeClass('active');});
    $('.ts-mw-substrate').click(function(){
        $('#ts-mw-id').removeClass('open');
        $('.ts-mw-substrate').removeClass('active');
    });
    $(document).ready(function() {
        let count = -1;
        function NextItem() {
            let boxes = $('.ts-mw-icon div');
            let boxLength = boxes.length - 1;
            count < boxLength ? count++ : count=0;
            boxes.removeClass('active').eq(count).addClass('active');
        }
        setInterval(NextItem, 2000);
    });
</script>
</body>
</html>
