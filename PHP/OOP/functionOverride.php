<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Husein";
$manager->sayHello("alidrus");

$vp = new vicePresident();
$vp->name = "Zidan";
$vp->sayHello("alidrus");
