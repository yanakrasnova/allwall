<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=utf-8>
    <title>Фотообои AllWall</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
    <script src="calculator.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>

<?php include("header.php"); ?>

<button class="open-button" onclick="openForm()">Перезвонить мне</button>
<div class="form-popup" id="myForm">
    <form action="index.php" method="post" class="form-container" name="form_feedback">
        <h2>Перезвонить мне</h2>
        <br>
        <label><b>Имя</b></label>
        <input type="text" placeholder="Ваше имя" name="name" id="name" required>

        <label><b>Телефон</b></label>
        <input type="tel" placeholder="Ваш телефон" name="email" pattern="[0-9]{10,12}|\+[0-9]{10,12}" required>

        <!--<div style="background-color: #990033; color: white; padding: 11px 20px; border: none; cursor: pointer; width: 100%; height: 40px; margin: 5px 0 10px 0; opacity: 0.9; font-size: 15px; font-weight: bold; text-align: center; " id="subbutton">Отправить</div>-->
        <button type="submit" class="btn" name="btn_submit" id="subbutton">Отправить</button>
        <button type="button" class="btn cancel" onclick="closeForm()">Закрыть</button>
    </form>
</div>
<?php

$response = array(
    'id' => 1,
    'user' => $_POST['name']
);

echo json_encode($response);
?>

<!--<div class="button-inst"><img src="img/insta.png" id="footer-inst"/></a></div>-->
<?php include("footer.php"); ?>

</body>

<script>
    $(document).ready(
        $('#subbutton').click(function () {
            var nameq;
            nameq = document.getElementById('name').value;
            $.post('rest.php', {
                name: nameq
        }, function (data, status) {
                const response = JSON.parse(data);
                alert(`User ${response.user} with id ${response.id} registered!`);
            });
        })
    );
</script>

</html>