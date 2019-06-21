<!DOCTYPE html>
<html>
<head>
    <meta charset = "UTF-8">
    <title>Страница PHP</title>
    <style>
        body {
            padding: 25px;
        }

        .field {
            border: 1px solid gray;
            padding: 7px;
            outline: none;
        }

        button {
            padding: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<h1>Страница PHP</h1>

<p>X</p>
<input type = "text" id = "xxx" spellcheck = 'false' autocomplete = 'off' class = "field">

<br>
<br>

<p>Y</p>
<input type = "text" id = "yyy" spellcheck = 'false' autocomplete = 'off' class = "field">

<br>
<br>
<br>

<button id = "btnFirst">Получить сумму</button>

<br>
<br>

<button id = "btnSecond">Получить числа на отрезке</button>

<script>
    "use strict";

    // при окончании загрузки страницы
    window.onload = function() {
        // делаем поля ввода пустыми
        document.getElementById("xxx").value = "";
        document.getElementById("yyy").value = "";

        // при нажатии на кнопку для получения суммы
        document.getElementById("btnFirst").onclick = function() {
            // получаем содержимое полей ввода
            const x = document.getElementById("xxx").value + "";
            const y = document.getElementById("yyy").value + "";
            // формируем строку запроса
            const url = "aa.php?x=" + x + "&y=" + y;
            // отправляем запрос для получения суммы
            window.location = url;
        }

        // при нажатии на кнопку для получения чисел на отрезке
        document.getElementById("btnSecond").onclick = function() {
            // получаем содержимое полей ввода
            const x = document.getElementById("xxx").value + "";
            const y = document.getElementById("yyy").value + "";
            // формируем строку запроса
            const url = "bb.php?x=" + x + "&y=" + y;
            // отправляем запрос для получения чисел на отрезке
            window.location = url;
        }
    }
</script>
    
</body>
</html>
