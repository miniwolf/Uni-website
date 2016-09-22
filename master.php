<?php header('charset=utf-8'); ?>
<!DOCTYPE html> 
<html>
<head>
    <meta charset="UTF-8" />
    <?php $masterParser->PrintHeader(); ?>
    <meta name="author" content="Nicklas 'miniwolf' Pingel" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>
    <header id="header"></header>
    <div id="content" class="mainWidth">
        <?php require_once 'menu.php'; ?>
        <div id="mainbody" class="<?php if ( isset($type) ) echo $type ?> inlineContainer">
            <?php $masterParser->PrintContent(); ?>
            <div id="secondaryFooter" class="inlineContainer">
                <div class="leftColumn borderBox">
                    <h2>PingelTech Skynet</h2>
                    <!--<div class="media">
                        <a class="lightbox left cboxElement" href="placeholders/8.jpg"><img src="placeholders/8.jpg" alt="video"></a>
                        <a class="lightbox right cboxElement" href="placeholders/9.jpg"><img src="placeholders/9.jpg" alt="video"></a>
                        <a class="lightbox right cboxElement" href="placeholders/10.jpg"><img src="placeholders/10.jpg" alt="video"></a>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
    <footer id="footer" class="mainWidth borderBox inlineContainer">
        <div class="leftColumn">
            <div class="info"></div>
            <div class="about borderBox">
                <h2>About Me</h2>
                <p>Computer scientist interested in newer technologies and games and gaming in general.</p>
                <ul class="social">
                    <?php

                    include("footer/Footer.php");
                    $footer = new Footer($masterParser->getRoot());
                    $footer->PrintFooter();
                    ?>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>
