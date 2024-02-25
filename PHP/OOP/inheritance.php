<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Budi";
$manager->sayHello("joko");

$vp = new Manager();
$vp->name = "Husien";
$vp->sayHello("zidan");
