<form name="test">
    <input type="text" class="form-control" placeholder="Recipient's username"
           aria-label="Recipient's username" aria-describedby="button-addon2"
           name="test" required>
    <button class="btn btn-primary" type="submit" id="button-addon2">Add</button>
</form>
<?php
if (isset($_GET['test'])) {
    if ($_GET['test'] % 2 == 0) {
        echo "Juft son";
    } else {
        "Toq son";
    }
}


?>

<br>
<form name="test1">
    <input type="text" class="form-control" placeholder="Recipient's username"
           aria-label="Recipient's username" aria-describedby="button-addon2"
           name="test1" required>
    <button class="btn btn-primary" type="submit" id="button-addon2">Add</button>
</form>

<?php
if (isset($_GET['test1'])) {
    $fac = 1;
    for ($i = 1; $i <= $_GET['test1']; $i++) {
        $fac = $fac * $i;
    }
    echo "Sonning factoriali: " . $fac;
}


?>


<br>
<form name="test2">
    <input type="text" class="form-control" placeholder="Recipient's username"
           aria-label="Recipient's username" aria-describedby="button-addon2"
           name="test2" required>
    <button class="btn btn-primary" type="submit" id="button-addon2">Add</button>
</form>

<?php
if (isset($_GET['test2'])) {
    if ($_GET['test2'] > 0) {
        echo $_GET['test2'] . " soni musbat son";
    } else {
        echo $_GET['test2'] . " soni manfiy son";
    }
}


?>

<br>


<?php

$arry = [23, 45, 55, 84, 4883, 11, 584, 31, 48, 31, 54, 3164, 48];
$max = 0;
for ($i = 0; $i < count($arry); $i++) {
    if ($arry[$i] > $max) {
        $max = $arry[$i];
    }

}
for ($i = 0; $i < count($arry); $i++) {
    echo $arry[$i] . ' ';
}


echo '<br>' . $max;


?>

<form method="get">
    <input type="text" class="form-control" placeholder="Sonni kiriting" name="test3" required>
    <input type="text" class="form-control" placeholder="Darajani kiriting" name="test4" required>
    <button class="btn btn-primary" type="submit">Hisobla</button>
</form>

<br>

<?php
if (isset($_GET['test3']) && isset($_GET['test4'])) {
    $son = (int)$_GET['test3'];
    $daraja = (int)$_GET['test4'];
    $natija = 1;
    for ($i = 1; $i <= $daraja; $i++) {
        $natija *= $son;
    }
    echo "Sonning darajasi: " . $natija;
}
?>


<?php
$arry = [23, 45, 55, 84, 4883, 11, 584, 31, 48, 31, 54, 3164, 48];
for ($i = 0; $i < count($arry); $i++) {
    echo $arry[$i] . ' ';
}
echo '<br>';
print_r(array_reverse($arry));
echo '<br>';
?>

<form method="get">
    <input type="text" class="form-control" placeholder="Sonni kiriting" name="number" required>
    <button class="btn btn-primary" type="submit">Ildizni hisobla</button>
</form>

<br>

<?php
if (isset($_GET['number'])) {
    $son = (float)$_GET['number'];
    if ($son < 0) {
        echo "Manfiy sonlarning o'nlik ildizi mavjud emas.";
    } else {
        $ildiz = sqrt($son);
        echo "Sonning o'nlik ildizi: " . round($ildiz, 6);
    }
}
?>