<?php
$date = strtotime("-1 month", strtotime("now"));
echo date("F", $date);
?>