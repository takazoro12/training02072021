<?php
require_once('menu.php');

$juice = new Menu('JUICE', 600, '#');
$coffee = new Menu('COFFEE', 500, '#');
$curry = new Menu('CURRY', 900, '#');
$pasta = new Menu('PASTA', 1200, '#');

$menus = array($juice, $coffee, $curry, $pasta);

?>