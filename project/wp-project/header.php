<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); echo " | "; bloginfo( 'description' ); ?></title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,800;0,900;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <!-- jQuery Modal -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <!-- jQuery Modal -->
    
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header">
        <div class="wrapper header_block d-flex">
            <div class="logo">
                <?php 
                    the_custom_logo();
                ?>
            </div>
            <div class="navigation">
                <a href="#">Наши работы</a>
                <a href="#">Цены</a>
                <a href="#">Услуги</a>
                <a href="#">Рассчитать стоимость</a>
                <a href="#">Контакты</a>
            </div>
            <div class="tels">
                <a href="tel:+7(499)0000000">+7(499)0000000</a>
                <a href="tel:+7(499)0000000">+7(499)0000000</a>
                <a href="#" class="color_link">обратный звонок</a>
            </div>
        </div>
    </header>