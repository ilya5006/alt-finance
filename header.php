<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="/resources/css/swiper.min.css">

    <link rel="stylesheet" href="./resources/css/main.css">
    
    <link rel="stylesheet" href="./resources/css/header.css">
    <link rel="stylesheet" href="./resources/css/navigation.css">
    <link rel="stylesheet" href="./resources/css/content.css">
    <link rel="stylesheet" href="./resources/css/footer.css">

    <!-- Services -->
    <link rel="stylesheet" href="./resources/css/all-services.css">
    <!-- Contacts -->
    <link rel="stylesheet" href="./resources/css/contacts.css">
    <!-- Sitecard -->
    <link rel="stylesheet" href="./resources/css/sitecard.css">
    <!-- Static service pages -->
    <link rel="stylesheet" href="/resources/css/static-service-page.css">
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&display=swap&subset=cyrillic-ext" rel="stylesheet">
    
</head>
<body>
    <!-- HEADER -->
    <header class="header">
        <div class="container">
            <div class="header_info">
                <img src="./resources/img/logo.jpg" alt="Логотип компании." class="h-i_logo">
                <h1 class="h-i_heading">Альтернативные <br> финансы</h1>
            </div>
            <div class="header_act">
                <form action="" class="f-a_search-f">
                    <input type="search" name="search">
                    <input type="submit" value="">
                </form>
                <button class="f-a_language">Switch to English</button>
            </div>
        </div>
    </header>
    <!-- END HEADER -->
    
    <!-- NAV -->
    <nav class="menu">
        <div class="container">
            <hr>
            <ul>
                <li><a href="index.php">Главная</a></li>
                <li><a href="/about.php">О компании</a></li>
                <!-- <li><a href="#">Контакты</a></li> -->
                <li><a href="#">Список основных продуктов компании</a></li>
                <li class="dropdown-hover">
                    <a href="all-services.php" style="min-width: 270px; display: block; text-decoration: none;">Виды услуг</a>
                    <div class="dropdown-menu">
                        <a href="/consalting.php">консалтинг</a>
                        <a href="/building.php">
                            проектирование
                            <br>строительство
                            <br>реконструкция
                            <br>электромонтажные работы
                            <br>инжиниринговая деятельность</a>
                        <a href="/autoVAZ.php">
                            производство транспортных средств
                            <br>инжиниринговая деятельность
                        </a>
                        <a href="IT.php">
                            IT технологии
                            <br>автоматизация производства
                            <br>инжиниринговая деятельность</a>
                        <a href="/science.php">научно-исследовательская деятельность</a>
                        <a href="/geology.php">инженерно-геологические изыскания</a>
                        </div>
                </li>
                <li><a href="#">Фото и видео, Youtube канал.</a></li>
                <li><a href="contacts.php">Контакты</a></li>
                <li><a href="sitecard.php">Карта сайта</a></li>
            </ul>
        </div>
    </nav>
    <!-- END NAV -->