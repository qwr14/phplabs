<?php
// Устанавливаем значения по умолчанию
$default_cols = 5;
$default_rows = 7;
$default_color = '#00ff00';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $cols = abs((int) $_POST['cols']);
    $rows = abs((int) $_POST['rows']);
    $color = trim(strip_tags($_POST['color']));
}

$cols = ($cols) ? $cols : $default_cols;
$rows = ($rows) ? $rows : $default_rows;
$color = ($color) ? $color : $default_color;
?>
<!-- Область основного контента -->
<h3>Таблица умножения</h3>
<form action='<?=$_SERVER['REQUEST_URI']?>' method='POST'>
    <label>Количество колонок: </label>
    <br>
    <input name='cols' type='number' value='<?=isset($_POST['cols']) ? htmlspecialchars($_POST['cols']) : $default_cols?>' required>
    <br>
    <label>Количество строк: </label>
    <br>
    <input name='rows' type='number' value='<?=isset($_POST['rows']) ? htmlspecialchars($_POST['rows']) : $default_rows?>' required>
    <br>
    <label>Цвет: </label>
  <br>
  <input name='color' type='color' value='<?= isset($_POST['color']) ? $_POST['color'] : '#00ff00' ?>' list="listColors">
  <datalist id="listColors">
    <option>#ff0000</option>
    <option>#00ff00</option>
    <option>#0000ff</option>
  </datalist>
  <br>
  <br>
  <input type='submit' value='Создать'>
</form>
<br>
<!-- Таблица -->
<?php
getTable($rows, $cols, $color);
?>
<!-- Таблица -->
<!-- Область основного контента -->