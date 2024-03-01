<?php

$matches = [];
$result = (bool)preg_match_all("/husein | zidan | edy/i", "Husein Zindan Alaydrus", $matches);
var_dump($result);
var_dump($matches);

//menangani kata-kata kasar
$result = preg_replace("/anjing|bangsat/i", "***", "dasar lu anak bangsat");
var_export($result);
