<!DOCTYPE html>
<html lang="en">
<head>
    <title>Фотообои AllWall</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
    <script src="calculator.js" defer></script>
    <script src="cur.js" defer></script>

</head>
<body>

<?php include("header.php"); ?>

<p>
<div class="smallnav"><a href="index.php" class="navlink">Главная </a><span class="navlink">/ Цены</span>
</div>
<div>
<h2 class="topnav">Калькулятор стоимости</h2>
<form action="" method="post" name="calc" onsubmit="valid()">
    <p class="main">Длина: <input type="number" id="n1" placeholder="Длина" required> м</p>
    <p class="main">Ширина: <input type="number" id="n2" placeholder="Ширина" required> м</p>
    <p class="main">Выберите текстуру: <select id="n3">
        <option value="190">Гладь 190 грн/м^2</option>
        <option value="270">Жаккард 270 грн/м^2</option>
        <option value="300">Базальт 300 грн/м^2</option>
        <option value="330">Фреска 330 грн/м^2</option>
        <option value="300">Волокно 300 грн/м^2</option>
        <option value="450">Мелкий песок 450 грн/м^2</option>
    </select></p>
    <button style="background-color: #990033; color: white; border: none; font-size: 15px; font-weight: " type="button" onclick="price()">Рассчитать стоимость</button>
    <p class="main" id="out"></p>
</form>
</div>
<section style="margin-left: 15%; margin-top: 20px"></section>

<p class="main"></p>

<?php include("footer.php"); ?>

</body>

</html>