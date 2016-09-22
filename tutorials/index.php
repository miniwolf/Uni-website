<?php
$root  = '..';
$title = 'Youtube Tutorials';
$desc  = '...';
require_once $root.'/master.php';
?>
	<body>
		<div id='container'>
    <?php 
    require_once $root.'/head.php';
    require_once $root.'/menu.php';
    require_once 'tutorials.html';
    require_once $root.'/clear.html';
    ?>
		</div>
	</body>
</html>
