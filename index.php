<?php
include("parser/MasterParser.php");
$masterParser = new \parser\MasterParser(".", 'FrontPage');
$masterParser->setDesc('Newspage for game related news');
$masterParser->setContentFile('/index/index.html');
require_once('master.php');