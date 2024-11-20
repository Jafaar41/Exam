<?php
$numbers = [10, 30, 20];

$max_number = $numbers[0];

for ($i = 1; $i < count($numbers); $i++) {
    if ($numbers[$i] > $max_number) {
        $max_number = $numbers[$i];
    }
}
echo "The maximum number is: " . $max_number;
?>