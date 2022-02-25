<h3>if ... else ...</h3>
<?php
$john_score = 90;
$sam_score = 80;

// (1) 標準寫法
if ($john_score > $sam_score) {
  echo "john is better";
} elseif ($john_score < $sam_score) {
  echo "sam is better";
} else {
  echo "john and sam are equal";
}

echo '<br>';

// (2) 簡易寫法
if ($john_score > $sam_score):
  echo "john is better";
elseif ($john_score < $sam_score):
  echo "sam is better";
else:
  echo "john and sam are equal";
endif;

echo '<br>';
?>

<!-- 混雜大量 html 寫法 -->
<?php if ($john_score > $sam_score): ?>
  john is better
<?php elseif ($john_score < $sam_score): ?>
  sam is better
<?php else: ?>
  john and sam are equal.
<?php endif; ?>


<h3>switch</h3>
<?php
?>

<h3>while</h3>
<?php
$a = 0;
// 先判斷再執行
while ($a < 10):
  echo $a."&nbsp;";
  $a++;
endwhile;
echo '<br>';

// 先執行再判斷
$b = 0;
do {
  echo "$b / ";
  $b++;
} while ($b<10);
echo '<br>';
?>

<h3>for</h3>
<?php
for ($i = 0 ; $i < 10 ; $i++ ):
  echo $i."&nbsp;";
endfor;
?>

<h3>continue</h3>
<?php
for ($i = 0 ; $i < 10 ; $i++ ) {
  if ($i === 4) {
    continue;
  }
  echo $i."&nbsp;";
}
echo '<br>';
?>

<h3>break</h3>
<?php
$i = 4;
for ($i = 0 ; $i < 10 ; $i++ ) {
  echo "$i\t";
  if ( $i > 5 )
    break;
}
echo '<br>';

$id = 1;
switch ($id) {
  case 0:
    echo "id 0 is apple\t";
    break;
  case 1:
    echo "id 0 is orange\t";
    break;
  case 2:
    echo "id 0 is banana\t";
    break;
}
echo '<br>';
?>

<h3>Array</h3>
<?php
$arr[0] = 1;
$arr[1] = 2;
var_dump($arr);
echo '<br>';

// 舊版：array()
$arr1 = array(1,2,3);
var_dump($arr1);
echo '<br>';

// 新版：[]
$arr2 = [1,2,3,4];
var_dump($arr2);
echo '<br>';
?>

<h3>多維陣列</h3>
<?php
$name = ["john", "sam", "mary"];
$height = [180, 173, 165];
$weight = [83, 72, 50];

$student = [$name, $height, $weight];
var_dump($student);

echo '<br>';
?>

<h3>關聯式陣列</h3>
<?php
$stu1["name"] = "Eddy";
$stu1["height"] = 160;
$stu1["weight"] = 45;
var_dump($stu1);
echo '<br>';
echo $stu1["name"]."'s height is ".$stu1["height"]."cm, weight is ".$stu1["weight"]."kg";
echo '<br>';

$stu2 = [
  "name"=>"Sally",
  "height"=>145,
  "weight"=>40
];
echo $stu2["name"]."'s height is ".$stu2["height"]."cm, weight is ".$stu2["weight"]."kg";
echo '<br>';
?>

<h3>Array to json</h3>
<?php
$stu3 = [
  "name"=>"Sam",
  "height"=>180,
  "weight"=>83
];
echo json_encode($stu3);
echo '<br>';
?>

<h3>Json to array</h3>
<h4></h4>
<script>
  let stu4 = <?=json_encode($stu3)?>;
  console.log(stu4);
  let h4 = document.querySelector("h4");
  h4.innerText = stu4.name;
</script>

<h3>foreach</h3>
<?php
$arr = [1,2,3,4];
foreach ( $arr as $val)
  echo "$val\t";

echo '<br>';
?>

<h3>練習題 - stu list</h3>
<?php
$stu_list = [
  [
    "name"=>"ABC",
    "height"=>123,
    "weight"=>10
  ],
  [
    "name"=>"DEF",
    "height"=>124,
    "weight"=>20
  ],
  [
    "name"=>"GHI",
    "height"=>125,
    "weight"=>30
  ]
];
foreach ($stu_list as $val)
  echo $val["name"]."'s height is ".$val["height"]."cm, weight is ".$val["weight"]."kg.<br>";

echo '<br>';
?>