<?php
  include $_SERVER['DOCUMENT_ROOT'].'/php/108-2-connectDB.php';

  $sql = "ALTER TABLE myMember MODIFY nationality ";
  $sql .= "varchar(15) comment '국적' AFTER gender";
  $res = $dbConnect->query($sql);

  if($res){
    echo "필드 정보 변경 완료";
  } else {
    echo "필드 정보 변경 실패";
  }
?>
