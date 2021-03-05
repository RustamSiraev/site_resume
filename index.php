<?php
$data = require_once('data.php');
$aboutData = $data['about'];
$educationData = $data['education'];
$languagesData = $data['languages'];
$interestsData = $data['interests'];
$aboutMyData =  $data['aboutMy'];
$experienceData =  $data['experience'];
$skillSetData =  $data['skillSet'];
$projectsData =  $data['projects'];
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
                            href="mailto: <?= $aboutData['email'] ?>"><?= $aboutData['email'] ?></a>
                </li>
                <li class="phone"><i class="fa fa-phone"></i><a
                            href="tel:<?= $aboutData['phone'] ?>"><?= $aboutData['phone'] ?></a></li>
                <li class="website"><i class="fa fa-globe"></i><a
                            href="http://themes.3rdwavemedia.com/website-templates/free-responsive-website-template-for-developers/"
                            target="_blank">portfoliosite.com</a></li>
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
                <li><?= $language ?><span class="lang-desc"> (Средний)</span></li>
                <? } ?>
            </ul>
        </div><!--//interests-->

        <div class="interests-container container-block">
            <h2 class="container-block-title">Интересы</h2>
            <ul class="list-unstyled interests-list">
                <? foreach ($interestsData as $interest) { ?>
                <li><?= $interest ?></li>
                <? } ?>
            </ul>
        </div><!--//interests-->

    </div><!--//sidebar-wrapper-->

    <div class="main-wrapper">

        <section class="section summary-section">
            <h2 class="section-title"><i class="fa fa-user"></i>Обо мне</h2>
            <div class="summary">
                <p><?= $aboutMyData?></p>
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
            <div class="intro">
            </div><!--//intro-->
            <? foreach ($projectsData as $project) { ?>
            <div class="item">
                <span class="project-title"><a href="<?= $project['link'] ?>" target="_blank"><?= $project['name'] ?></a></span> - <span class="project-tagline"><?= $project['description'] ?></span>
            </div><!--//item-->
            <? } ?>
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
</body>
</html>


