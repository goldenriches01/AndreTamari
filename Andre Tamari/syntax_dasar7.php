<?php
for ($i = 0; $i < 5; $i++) {
    if ($i == 2) {
        continue; // melewatkan iterasi ketika 1 = 2
    }
    echo "Tamari ke-$i<br>";
}
?>