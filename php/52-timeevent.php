<?php
  //시작 시간 설정 2021년 4월 18일 23시 30분
  $startTime = mktime(23,30,0,4,18,2021);

  //종료 시간 설정 2021 4월 18일 23시 40분
  $endTime = mktime(23,40,0,4,18,2021);

  $nowTime = time();

  if ($nowTime >= $startTime && $nowTime <= $endTime) {
    echo "현재 이벤트에 참여할 수 있는 시간입니다.";
  } else {
    echo "이벤트 시작 전이거나 종료되었습니다.";
  }
?>
