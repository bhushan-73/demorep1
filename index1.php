<?php

echo "Print pattern";
echo  "<br/>";

/*
print a pattern like
*
***
*****
***
*


*/
for($w=1; $w<=4; $w++)
{
    for($g=4; $g>=$w; $g--){
          echo '&nbsp';
    }
    for($s=1; $s<($w*2); $s++){ 
          echo "*";
    }
    for($l=2; $l<=$w; $l++){
        //echo "*";
    }
  
  echo "<br>";
}
?>