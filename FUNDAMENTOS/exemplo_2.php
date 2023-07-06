<?php
$a = 50;
$b = 70;
if ($a == $b) {
    echo "São Iguais";
} else if ($a > $b) {
    echo "A é Maior";
} else {
    echo "B é maior";
}
echo "<hr>";
// If Ternário
echo ($a == $b) ? "São iguais" : "São Diferentes";
echo "<hr>";

//Switch
$codigo = 9;
switch ($codigo) {
    default:
        echo "O codigo é default";
        break;

    case 1:
        echo "O codigo é 1";
        break;

    case 2:
        echo "O codigo é 2";
        break;

    case 3:
        echo "O codigo é 3";
        break;

    case 4:
        echo "O codigo é 4";
        break;
}

?>