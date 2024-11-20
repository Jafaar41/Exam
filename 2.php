<?php
//(2)
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo " *";
    }
    echo "<br>";
}

for ($i = 5; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo " *";
    }
    echo "<br>";
}
echo "<hr>";
// (3)
for ($i = 1; $i <= 5; $i += 2) {
    for ($j = 1; $j <= $i; $j++) {
        echo " *";
    }
    echo "<br>";
}

for ($i = 3; $i >= 1; $i -= 2) {
    for ($j = 1; $j <= $i; $j++) {
        echo " *";
    }
    echo "<br>";
}
?>