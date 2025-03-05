<?php
// Создание двумерного массива
$array = [
    ['Имя', 'Возраст', 'Город'],
    ['Иван', 25, 'Москва'],
    ['Мария', 30, 'Санкт-Петербург'],
    ['Петр', 28, 'Казань'],
];

// Вывод HTML-таблицы
echo '<table border="1">';
foreach ($array as $row) {
    echo '<tr>';
    foreach ($row as $cell) {
        echo '<td>' . htmlspecialchars($cell) . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>