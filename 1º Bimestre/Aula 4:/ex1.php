<?php


  $array1 = array(1, 2, 3, 4, 5);
  $array2 = array('M', 'B', 'L', 'U', 'E');
  $array3 = array(true, false, true, false, true);
  $array4 = array('Maça', 'Banana', 'Laranja', 'Uva', 'Kiwi');


  for ($i = 0; $i < 5; $i++) {
      echo $array1[$i] . " | " . $array2[$i] . " | " . ($array3[$i] ? 'true' : 'false') . " | " . $array4[$i] . "\n";
}
