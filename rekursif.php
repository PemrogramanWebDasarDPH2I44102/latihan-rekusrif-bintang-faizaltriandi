<?php

$batas = 5;
function rekursif($i =1){
global $batas=5;
  echo "*";
  $i++;
  if($i>$batas)
    rekursif($i);
}else{
	echo "<br>";
	$batas--;
if($batas !=0){
	rekursif();
}
}
}
rekrusif();

echo"<br>"
?>

===============================================================================================
<?php
  $batas1=5;
function rekrusif($t=1){
	global $batas1;
	echo $t;
	$t++;
	if($t<=$batas1){
		rekrusif($t);
	}else{
		echo "<br>";
		$batas1++;
		if($batas1<=5){
			rekrusif()
		}
	}
	}
	rekrusif();
  ?>
