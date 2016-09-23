<?php

include("../../parser/MasterParser.php");
$masterParser = new \parser\MasterParser('../..', 'DADIU Minigame 1');
$masterParser->setContentFile('minigame1.html');
$masterParser->setLinks(['style.css']);
$masterParser->setDesc('First minigame for DADIU');
require_once('../../master.php');
