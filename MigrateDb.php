<?php
/**
 * Created by PhpStorm.
 * User: vovichua
 * Date: 12.10.18
 * Time: 19:06
 */

require_once 'components/Model.php';
require_once 'Migarte.php';

$migration = new Migarte(new PDO('mysql:host=localhost;dbname=hillel','root',' '));
$migration->migrate();