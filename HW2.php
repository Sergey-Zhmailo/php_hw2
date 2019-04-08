<?php
$message = '';
if ($_POST['card_suit'] == 'empty_suit' && $_POST['card_value'] != 'empty_value') {
    $message .= 'Выберите масть карты';
}
if ($_POST['card_value'] == 'empty_value' && $_POST['card_suit'] != 'empty_suit') {
    $message .= 'Выберите значение карты';
}
if ($_POST['card_suit'] == 'empty_suit' && $_POST['card_value'] == 'empty_value') {
    $message .= 'Выберите масть и значение карты';
}

?>
<!doctype html>
<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>

</head>
<body>
    <div class="container">
        <h1>HW2 - Колода карт</h1>
        <hr>
        <form action="HW2.php" method="post">
            <select name="card_suit">
                <option value="empty_suit">Выберите масть карты</option>
                <option value="hearts">Черви</option>
                <option value="clubs">Крести</option>
                <option value="spades">Пики</option>
                <option value="diamonds">Бубны</option>
            </select>
            <select name="card_value">
                <option value="empty_value">Выберите значение карты</option>
                <option value="ace">Туз</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="jack">Валет</option>
                <option value="queen">Дама</option>
                <option value="king">Король</option>
            </select>
            <input type="submit" value="Показать карту">
        </form>
    </div>
    <div class="container center">
        <p><?php echo $message; ?></p>
        <img src="/img/<?php echo $_POST['card_suit'] . '_' . $_POST['card_value']; ?>.png" alt="">
    </div>
</body>


