<!DOCTYPE html>
<html lang="en">
<head>
    <title>Фотообои AllWall</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>

<?php include("header.php"); ?>

<div class="smallnav"><a href="index.php" class="navlink">Главная </a><span class="navlink">/ Каталог</span>
</div>
<h2 class="topnav">Каталог</h2>
<p class="main"></p>
<div class="interiors" style="margin-left: 15%">
<?php
$directory = 'photos';
$allowed_types = array(
    'jpg',
    'jpeg',
    'gif',
    'png'
);
$file_parts    = array();
$ext           = '';
$title         = '';
$i             = 0;

$dir_handle = @opendir($directory) or die("Неправильная директория!");
while ($file = readdir($dir_handle)) //поиск по файлам
{
    if ($file == '.' || $file == '..')
        continue; //пропустить ссылки на папки
    $file_parts = explode('.', $file); //разделить имя файла и поместить его в массив
    $ext = strtolower(array_pop($file_parts)); //последний элеменет - это расширение
    if (in_array($ext, $allowed_types)) {
        echo '
    <img width="360" height="240" src="' . $directory . '/' . $file . '" class="attachment-slider wp-post-image" alt="img" title="img" />';
        $i++;
    }
}
closedir($dir_handle);
?>
</div>

<?php include("footer.php"); ?>

</body>

</html>