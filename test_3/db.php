<html>
1. SELECT * FROM a, b WHERE a.id=b.a_id;  - Объединяет 2 таблицы 'a' и 'b' с условием что в таблице 'а' столбец 'id' должен быть равен столбцу 'a_id' в таблице 'b'
<br>
2. SELECT * FROM a JOIN b ON a.id=b.a_id; - Объединяет 2 таблицы 'a' и 'b' с условием что в таблице 'а' столбец 'id' должен быть равен столбцу 'a_id' в таблице 'b'
<br><hr>
<b>Оба варианта схожи по конечному результату но их внутреннее отличие в подходе. Первый классический способ в котором условие прописывается через оператор 'WHERE', <br>
    второй с применением оператора 'JOIN' и условия при его применение прописываются через оператор 'ON'.</b>
</html>
