<?php

require_once 'namespace/test.php';

use data\one\test;
// use data\two\test; contoh error karena gak boleh nama folder class sama maka: menggunakan use
use data\two\test as test1;
use data\two\test as test2; //boleh double
use data\one\test as test3;
use data\one\{test as grubImport}; //use bisa di grub {test as grubImport, bisa banyak bahkan function}

$person1 = new test('test', '', '');
$person2 = new test1('test2', '', '');
$person2 = new test2('test3', '', '');
$person2 = new test3('test4', '', '');
$person2 = new grubImport('grub Import', '', '');
