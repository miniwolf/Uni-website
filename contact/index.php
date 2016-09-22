<?php
$root = "..";
$title = "Contact";
$desc = "...";
include("$root/master.php");?>
	<body>
		<div id="container">
			<?php include("$root/head.php");
			include("$root/menu.php");?>
			<div id="centerb">
				<h1>Contact</h1>		
				<div class="mid_content">
				<form action="mailscript.php" method="POST">
					<p><b>Email</b></p>
					<input type="text" name="email" size="40"/>
					<p><b>Subject</b></p>
					<input type="text" name="subject" size="40"/>
					<p><b>Message</b></p>
					<textarea cols="100" rows="20" name="message"></textarea>
					<p><input type="submit" value="Send"/></p>
				</form>
				</div>
			</div>
			<?php include("$root/clear.html");?>
		</div>
	</body>
</html>
