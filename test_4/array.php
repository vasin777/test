<?php
$array = [1, 1, 2, 3, 4, -51, 12, 12, 12, -51];  // создаём переменную смассивом
$array_count = (array_count_values($array));  // записываем в переменную колличество одинаковых элементов в массиве
?>
<html>
<center>
<br>
<b>Все элементы массива:  <?php foreach ($array as $art) {echo $art.',';}; // с помощью цикла foreach выводим все элементы массива через запятую?></b>
<table style="text-align: left" border="1">
    <tr><th>Элемент</th>
    <?php foreach (array_unique($array) as $array_out) {echo '<td>'.$array_out.'</td>';} // выводим в таблицу с помощью цикла уникальные элементы массива без повторений встроенной функцией array_unique?>
    </tr>
    <tr>
        <th>Колличество элементов в массиве</th>
    <?php foreach ($array_count as $arr) {echo '<td>'.$arr.'</td>';} // выводим с помощью цикла все колличества каждого элемента в массиве ?>
    <tr>
</table>
</center>
</html>

