<?php

    include('../bootstrap.php');

    session_start();

    // If the user has not logined
    // go to login page
    if (empty($_SESSION['auth'])  && CURRENT_PAGE !== 'login') {
        header("Location: ./login.php");
        return;
    }

    // Create navigation html
    $navHTML = '';
    foreach($config['admin']['nav'] as $val) {
        $navHTML .= '<li><a href="'. $val['href'] .'">'. $val['name'] .'</a></li>';
    }

?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Yoshi's Hair Studio Admin</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <!-- CSS -->
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,100italic,100|Lato:400,300,300italic|Dancing+Script:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="../css/vendor/font-awesome.min.css">
        <link rel="stylesheet" href="../css/vendor/normalize.css">
        <link rel="stylesheet" href="../css/admin.min.css">

        <!-- JS -->
        <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
        <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <header class="page-header">
            
            <div class="row row-center">
            
                <div class="span-3 columns">
                    <div class="logo">
                        <a href="./index.php"><img src="../img/logo_2.png"></a>
                    </div>
                </div>

            </div>

            <?php if (CURRENT_PAGE !== 'login'): ?>
            <nav class="nav">

                <div class="row row-center">
                    
                    <div class="span-12 columns">
                        <ul>
                            <?php echo $navHTML; ?>
                        </ul>
                    </div>

                </div>

            </nav>
            <?php endif; ?>

        </header>
       

        
