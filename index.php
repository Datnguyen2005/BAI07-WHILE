<?php
$i = 0;
$tong = 0;
while ($i <= 100) {
    $tong += $i;
    $i++;
    if ($i > 50) {
        break;
    }

}
echo "i: $i <br>";
echo "tong:$tong";
?>
<br><?php
$i = 0;
$tong = 0;
while ($i <= 100) {

    $i++;
    if ($i > 50) {
        continue;
    }

    $tong += $i;
}
echo "i: $i <br>";
echo "tong:$tong";
?>