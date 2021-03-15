<?php
session_start();

echo"おはよう<br>";
echo"おはよう<br>";


$name = "あきもと<br>";

echo $name;


$num=rand(1,5);
if($num==1){
  echo"あたり".$num;
}else{
  echo"はずれ".$num;
}


?>