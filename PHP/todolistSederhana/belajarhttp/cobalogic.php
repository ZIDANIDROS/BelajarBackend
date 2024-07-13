<?php
$a = 5;
$b = '5';

if ($a == $b) {
    echo "Nilai \$a sama dengan nilai \$b";
}

echo PHP_EOL;

$a = 5;
$b = '5';

if ($a === $b) {
    echo "Nilai \$a identik dengan nilai \$b";
} else {
    echo "Nilai \$a tidak identik dengan nilai \$b";
}
