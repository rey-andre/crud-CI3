<?php

$x1 = array(
    "caption"=>"Kasus Positif Harian",
    "subCaption"=>"Covid-19",
    "xaxisName"=>"Tanggal",
    "yAxisName"=>"Jumlah Positif Harian",
    "theme"=>"fint");

  $x2 = array();

  $kon = mysqli_connect("localhost","root","","scmic");
  $hsl = mysqli_query($kon,"SELECT * FROM kasus_covid");
  while($r = mysqli_fetch_assoc($hsl)){
    $datum = array("label"=>$r['tanggal'],"value"=>$r['kasus_baru']);
    array_push($x2,$datum);
  } 

$x = array(
    "chart"=>$x1,
    "data"=>$x2
);

$y = json_encode($x);
echo $y;
?>