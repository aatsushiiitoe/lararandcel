
<?php

$msg = "hogehoge";

#echo $msg;
#
#var_dump($msg);
#var_dump(__LINE__);
#var_dump(__DIR__);
#var_dump(__FILE__);

#定数
define("MAIL","nge");
echo MAIL;

$x =10*3;
echo $x;
$x++;
echo "数字だよ{$x}";
$s ="hellow" . "world";
echo $s;

$score =80;
if ($score >70){
  echo "good";

}else {
  echo"soso";
}

$signal ="green";
switch ($signal){
  case "red":
  echo "red";
  break;
  case "blue";
  case "green";
  echo "blue";
  break;
 default;
 echo "nashi";
 break;
}

$i =0;
while ($i <10){
echo $i;
$i ++;

}

$i =0;
do{
echo $i;
$i++;
}while($i <10)
;

for ($a=0; $a<10; $a++){
  echo "hogehoge$a\t";
};


$sales =array(
"ringo" => 200,
"gorira" => 400
);

echo $sales["ringo"];

$colors =["red","blue","yellow"];
echo $colors[2];
#13まで


?>
