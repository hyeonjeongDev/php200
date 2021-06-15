<?php
  include $_SERVER['DOCUMENT_ROOT'].'/php/108-2-connectDB.php';

  $sql = "ALTER TABLE myMember DROP nationality";
  $res = $dbConnect->query($sql);

  if($res){
    echo "필드 삭제 완료";
  } else {
    echo "필드 삭제 실패";
  }
?>
