<!DOCTYPE html>
<html>
<body>
<?php
 $s = 0;
 $l=$_POST["liste"];
 $pieces = explode(" ", $l);
 echo "<p>$pieces</p><br><br>";
 calculer($pieces);


function calculer($t){
    $s=0;
  $min=$t[0];
  $max=$t[0];
    for ($i = 0; $i <  sizeof($t); $i++) {

            $s += $t[i];
        if ($t[i]<$min)
            $min=$t[i];
        else if ($t[i]>$max)
            $max =$t[i];    
    }
    echo "<p>s= $s</p><br><br>";
    echo "<p>min= $min</p><br><br>";
    echo "<p>max= $max</p><br><br>";
  }
  ?>
</body>
</html>

