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
            <?php include($content) ?>
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
                    <li class="twitter" title="@miniwolf"><a target="_blank" href="http://twitter.com/miniwolf"><img src="<?php echo $root ?>/i/twitter.png" alt="Twitter"></a></li>
                    <li class="youtube" title="YouTube Channel"><a target="_blank" href="http://youtube.com/user/miniwolf1508"><img src="<?php echo $root ?>/i/youtube.png" alt="Youtube"></a></li>
                    <li class="inbox" title="Mail to miniwolf1508@gmail.com"><a target="_blank" href="mailto:miniwolf1508@gmail.com"><img src="<?php echo $root ?>/i/inbox.png" alt="Inbox"></a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>
