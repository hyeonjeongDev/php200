<?php
  $num = 12;
  echo "\$num의 데이터형(값 {$num})은 ".gettype($num);
  echo "<br>";

  $greetion = "안녕";
  echo "\$greetion의 데이터형(값 {$greetion})은 ".gettype($greetion);
  echo "<br>";

  $numStr = "121212";
  echo "\$numStr의 데이터형(값 {$numStr})은 ".gettype($numStr);
  echo "<br>";

  $fruit = array();
  echo "\$fruit의 데이터형은 ".gettype($fruit);
  echo "<br>";

  $nai = null;
  echo "\$nai의 데이터형(값 {$nai})은 ".gettype($nai);
  echo "<br>";

  $boolean = true;
  echo "\$boolean의 데이터형(값 {$boolean})은 ".gettype($boolean);
  echo "<br>";
?>
