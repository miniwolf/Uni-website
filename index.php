<?php
include("parser/MasterParser.php");
$masterParser = new \parser\MasterParser(".", 'FrontPage');
$masterParser->setDesc('Newspage for game related news');
$masterParser->setContentFile('page.html');
require_once('master.php');