<?php
    include("/index.php");
    require_once ("Includes/simplecms-config.php"); 
        require_once  ("Includes/connectDB.php");   
?>

<head>

<link href="bootstrap.min.js" rel="stylesheet">
<link href="/Styles/Divfor.css" rel="stylesheet">
<meta charset="utf-8">

</head>

<div class="scroll">

    <h3 align="center">Краткая справка</h3>
    <ul align="center" style="list-style-type: none;">
        <li>1. Нажмите на кнопку <a href="/Proba.php">Рассчитать</a>, чтобы рассчитать <a href="https://ru.wikipedia.org/wiki/%D0%9A%D0%BB%D1%8E%D1%87%D0%B5%D0%B2%D1%8B%D0%B5_%D0%BF%D0%BE%D0%BA%D0%B0%D0%B7%D0%B0%D1%82%D0%B5%D0%BB%D0%B8_%D1%8D%D1%84%D1%84%D0%B5%D0%BA%D1%82%D0%B8%D0%B2%D0%BD%D0%BE%D1%81%D1%82%D0%B8">KPI</a> компании;</li>
        <li>2. Нажмите на кнопку <a href="/Stat.php">Статистика</a>, чтобы посмотреть посмотреть диаграмму эффективности компании;</li>
        <li>3. Нажмите на кнопку <a href="/Table.php">Таблица</a>, чтобы увидеть данные об узлах и их показателях из таблицы;</li>
        <li>4. Нажмите на кнопку <a href="/Tree.php">Дерево</a>, чтобы посмотреть визуальное представление дерева KPI;</li>
    </ul>
    <h5 align="center"> <a href="/index.php">Вернуться на Главную страницу</a></h5>
</div>
    </div>
</body>
      
</html>