<?php

$dateTime = new DateTime();
$dateTime->setDate(1999, 9, 11);
$dateTime->setTime(12, 12, 12);

$dateTime->add(new DateInterval("P1Y"));

$dateInterval = new DateInterval("P1M");
$dateInterval->invert = 1;

$dateTime->add($dateInterval);

var_dump($dateTime);
