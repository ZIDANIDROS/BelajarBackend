<?php

$matches = [];
$result = (bool)preg_match_all("/husein | zidan | edy/i", "Husein Zindan Alaydrus", $matches);

var_dump($result);
var_dump($matches);
