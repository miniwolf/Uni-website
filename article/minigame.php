<?php
include("../parser/MasterParser.php");
$masterParser = new \parser\MasterParser("..", 'MiniGame');
$masterParser->setDesc("First ever minigame");
$masterParser->setLinks(["style.css"]);
$masterParser->setContentFile("minigame.html");
require_once '../master.php';
