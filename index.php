<?php

require_once 'components/Application.php';
require_once 'components/Controller.php';
require_once 'components/View.php';
require_once 'components/Model.php';
$pdo = new PDO('mysql:host=localhost;dbname=UNIVERSITY','root',' ');

(new Application())->run();









