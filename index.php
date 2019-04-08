<link rel="stylesheet" href="css/styles.css">
<?php
echo '<h1>Занятие 6: Формы. Обработка форм.</h1><br><hr>';
?>
<!--
<form action="form.php" method="post">
    <span>Сколько будет 2*2?</span><br>
    <label for="id1">2</label>
    <input type="radio" name="q1" id="id1" value="1"><br>

    <label for="id2">4</label>
    <input type="radio" name="q1" id="id2" value="2"><br>

    <label for="id3">6</label>
    <input type="radio" name="q1" id="id3" value="3"><br>
    <br><br>

    <span>Сколько будет 11*11?</span><br>
    <label><input type="radio" name="q2" value="1">121</label><br>
    <label><input type="radio" name="q2" value="2">111</label><br>
    <label><input type="radio" name="q2" value="3">666</label><br>
    <br><br>

    <span>Сколько будет 7*7?</span><br>
    <label for="id4">45</label>
    <input type="radio" name="q3" id="id4" value="1"><br>
    <label for="id5">77</label>
    <input type="radio" name="q3" id="id5" value="2"><br>
    <label for="id6">49</label>
    <input type="radio" name="q3" id="id6" value="3"><br>
    <br><br>

    <input type="submit" value="Send">

</form>

-->

<form action="form.php" method="post">
    <input type="checkbox" name="w1[]" value="1">Category #1 - 1<br>
    <input type="checkbox" name="w1[]" value="2">Category #1 - 2 <br>
    <input type="checkbox" name="w1[]" value="3">Category #1 - 3 <br>
    <hr>
    <input type="checkbox" name="w2[]" value="1">Category #2 - 1 <br>
    <input type="checkbox" name="w2[]" value="2">Category #2 - 2 <br>
    <input type="checkbox" name="w2[]" value="3">Category #2 - 3 <br>
    <br><br>
    <input type="submit" value="Send">
</form>
