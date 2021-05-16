<?php
$link = 'news.php';//ссылка на файл с новостью
$section = file_get_contents($link);//записываем в перемнную контент из переменной ссылающейся на новостной файл
$section = mb_substr($section, 0, 180, 'UTF-8'); //с помощью встроенной функции mb_substr обрезаем контент. Первыйм параметром указываем на контент, вторым на первый чисо первого символа третим параметром на число последнего выводимого символа и четвертым параметром указываем кодировку т.к в контенте русские символы



$array = explode ( ' ', $section ); // разбиваем строку с помощью разделителя. В нашем случае разделителем является пробел.
$last4word = implode ( ' ', array_slice($array, count($array)-2, 2)); // полседние 2 слова в обрезанном контенте
$delsim = str_replace($last4word, '', $section); // убираем последние 2 слова из обрезанного контента
echo $delsim.'<a href="'.$link.'">'.$last4word.'...<a>'; // выводим переменные с отредактированным контентом и подставляем ссылку на страницу с полным контентом на переменную с двумя последними словами и троеточием
?>