<?php
$type = 'userProfile';

include("../parser/MasterParser.php");
$masterParser = new \parser\MasterParser('../', 'FrontPage');
$masterParser->setLinks(["profile.css"]);
$masterParser->setDesc('CV');
$masterParser->setContentFile('profile.html');
require_once '../master.php';
