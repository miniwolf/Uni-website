<?php
$title = 'Frontpage';
$desc  = 'Newspage for game related news';
$content = "index.html";

include("parser/MasterParser.php");
$masterParser = new \parser\MasterParser(".");
require_once('master.php');