<?php
  for($x = 2 ; $x >= 0 ; $x -- ){
    for($y = 3 ; $y >= $x+1 ; $y --){
      echo $y-$x;
    }
    echo '<br>';
  }
?>