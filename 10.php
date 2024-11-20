<?php
$x = 12;
$count = 0;
for ($i = 1; $i <= $x; $i++) {
    if ($x % $i == 0) {
        $count++;
    }
}
if ($count == 2) {
    echo "Number Is Prime";
} else {
    echo "Not Prime";
}
?>