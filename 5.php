<?php
$numbers = array(2, 4, 5, 6, 7, 8, 9, 11, 12, 13);

for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] % 2 == 0) {
        unset($numbers[$i]);
    }
}
print_r($numbers);
?>