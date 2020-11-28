<?php 
function printPattern($angka){
$i;
$j;
for ($i=0; $i <= $angka; $i++) { 
    for ($j=0; $j <= 2*$angka; $j++) { 
      if ($i + $j <= $angka) {
          echo "*";
      }
      
      else {
          echo " ";
      }
      if (($i + $angka)<= $j) {
          echo "*";
      }elseif ($j == $angka - strlen("dumbways") && $i == $angka ) {
          echo "DUMBAYS";
      }
      
      else {
          echo " ";
      }
    }
    echo "\n";
}
for ($i=0; $i <= $angka; $i++) { 
    for ($j=0; $j <= (2*$angka); $j++) { 
      if ($i >= $j) {
          echo "*";
      }
      else {
          echo " ";
      }
      if ($i >= (2*$angka - 1) - $j) {
          echo "*";
      }
      else {
          echo " ";
      }
    }
    echo "\n";
}

}
$n = 11;
printPattern($n);
echo "Tolong buka via view:source untuk melihat hasil";
?>