<?php
  include $_SERVER['DOCUMENT_ROOT'].'/php/108-2-connectDB.php';

  //마지막에 띄어쓰기가 있습니다.
  $sql = "ALTER TABLE myMember ADD currentAge ";
  $sql .= "int unsigned comment '현재나이' AFTER gender";
  $res = $dbConnect->query($sql);

  if($res){
    echo "필드 추가 완료";
  } else {
    echo "필드 추가 실패";
  }
?>
