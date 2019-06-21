<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     
<?php 
$name = "Kobayashi";
if($name=="Kobayashi"){
    echo "私はあなたの名前です。";
}else {
    echo "あなたの名前ではありません。";
}

$total =0;
echo $total;

for ($i=1; $i<=10; $i++){
    $total = $total +$i;
  
}
echo "<br>";
echo $total;

$fruits =["apple","orange","pineapple","banana"];

foreach($fruits as $fruit){
    echo $fruit;
    echo "<br>";
}

$start=1;
$end =100;


for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "<br>";
  }
}
?>    

</body>
</html>