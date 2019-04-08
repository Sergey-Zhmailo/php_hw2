<link rel="stylesheet" href="css/styles.css">
<div class="container">
    <a href="index.php">Back</a>
    <hr>
<?php
/*
$mass = array();
$mass['q1'] = 2;
$mass['q2'] = 1;
$mass['q3'] = 3;
$count = 0;
$c = 1;



if (!empty($_POST)) {
  for ($i = 1; $i <= count($mass); $i++) {
      if (!empty($_POST['q' . $i]) && $_POST['q' . $i] == $mass['q' . $i]) {
          $count++;
          echo '#' . $i. ' - valid' . '<br>';
      } else {
          echo '#' . $i . ' - error' . '<br>';
      }
  }
  echo $count . ' из ' . count($mass) .  ' вопросов';
// -------------------------------------------
// 1
  if (!empty($_POST['q1']) && $mass['q1'] == $_POST['q1']) {
      $count++;
      echo '#1 - valid' . '<br>';
  } else {
      echo '#1 - error' . '<br>';
  }
  // 2
  if (!empty($_POST['q2']) && $mass['q2'] == $_POST['q2']) {
      $count++;
      echo '#2 - valid' . '<br>';
  } else {
      echo '#2 - error' . '<br>';
  }
  // 3
  if (!empty($_POST['q3']) && $mass['q3'] == $_POST['q3']) {
      $count++;
      echo '#3 - valid' . '<br>';
  } else {
      echo '#3 - error' . '<br>';
  }


//-------------------

  foreach ($mass as $k => $v) {
      if (!empty($_POST[$k]) && $_POST[$k] == $v) {
          $count++;
//            echo '#' . substr($k, 1) . 'valid<br>';
          echo '#' . $c . 'valid<br>';
      } else {
          echo '#' . substr($k, 1) . 'error<br>';
      }
      $c++;
  }
  echo $count . 'из' . count($mass) .  'вопросов';

} else {
  echo 'Ничего не выбрано';
}
 */

/*
if (!empty($_POST)) {
    if (count($_POST['w1']) > 1) {
        $str = 'Вы выбрали места: ';
    } else {
        $str = 'Вы выбрали место ';
    }

    for ($i = 0; $i < count($_POST['w1']); $i++) {
        $str .= $_POST['w1'][$i] . ', ';
    }
    echo substr($str, 0, -2);
} else {
    echo 'Ничего не выбрано';
}
*/

if (!empty($_POST)) {
    if (count($_POST['w1']) > 1) {
        $str = 'Вы выбрали места: ';
    } else {
        $str = 'Вы выбрали место ';
    }
    foreach ($_POST as $k => $v) {
//        $str .= $k . ' - ';
        foreach ($v as $m) {
            $str .= $k . ' - ' . $m . ', ';
        }
    }
    echo substr($str, 0, -2);
} else {
    echo 'Ничего не выбрано';
}