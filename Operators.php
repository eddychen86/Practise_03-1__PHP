<h3>算術運算子</h3>
<?php
$a = 3;
$b = 2;
echo -$a, '<br>';

echo $a + $b, '<br>';
echo $a - $b, '<br>';
echo $a * $b, '<br>';
echo $a / $b, '<br><br>';

echo (5 % 3), '<br>';
echo (7.3 % 3.3), '<br>';
echo (-5 % -3), '<br><br>';

echo $a**$b, '<br><br>';

$c = 3;
$c += 3;
echo $c, '<br><br>';

$c *= 3;
echo $c, '<br><br>';

$str = "Hello";
echo $str.=" World", '<br><br>';

$d = 5;
echo "d is: " . $d--, '<br>';
echo "d is: " . $d, '<br><br>';

$e = 6;
echo "e is: " . ++$e, '<br>';
echo "e is: " . $e, '<br><br>';
?>

<h3>比較運算子</h3>
<?php
// 同資料型別比較
$a = 77;
$b = 28;

var_dump($a == $b);echo '<br>';
var_dump($a > $b);echo '<br>';
var_dump($a < $b);echo '<br>';
var_dump($a <> $b);echo '<br>';
var_dump($a >= $b);echo '<br>';
var_dump($a <= $b);echo '<br><br>';

// 不同資料型別比較
var_dump($a == $b);echo '<br>';
var_dump($a === $b);echo '<br>';
var_dump($a != $b);echo '<br>';
var_dump($a <> $b);echo '<br>';
var_dump($a !== $b);echo '<br><br>';

// 特殊狀況
var_dump(0 == "a");echo '<br>';
var_dump("1" == "01");echo '<br>';
var_dump("10" == "1e1");echo '<br>';
var_dump(100 == "1e2");echo '<br>';
?>

<h3>條件運算子</h3>
<?php
$a = 10;
$b = ($a > 0) ? "Positive" : "Negative";
echo $b, '<br>';

$c = "true";
echo $c ?: "false", '<br><br>';
?>

<h3>組合比較子</h3>
<?php
$a = 10;
$b = 5;

echo $a <=> $b, '<br><br>';
?>

<h3>邏輯運算子</h3>
<?php
// and 邏輯運算子
$x = 10;
$y = 5;

echo var_dump($x == 10 and $y == 5), '<br>';
echo var_dump($x == 0 and $y == 5), '<br>';
echo var_dump($x == 10 and $y == 0), '<br>';
echo var_dump($x == 0 and $y == 0), '<br><br>';

// or 邏輯運算子
echo var_dump($x == 10 or $y ==5), '<br>';
echo var_dump($x == 0 or $y ==5), '<br>';
echo var_dump($x == 10 or $y == 0), '<br>';
echo var_dump($x == 0 or $y == 0), '<br><br>';

// XOR 邏輯運算子
echo var_dump($x == 10 xor $y ==5), '<br>';
echo var_dump($x == 0 xor $y ==5), '<br>';
echo var_dump($x == 10 xor $y == 0), '<br>';
echo var_dump($x == 0 xor $y == 0), '<br><br>';

// && 與 || 的優先層級
$a = false || true;
var_dump($a); // 「||」優先於「=」
echo '<br>';

$b = false or true;
var_dump($b); // 「=」優先於「or」
echo '<br><br>';
?>

<h3>參考運算子</h3>
<?php
$a = 5;
$b = $a;
echo
  $a, '<br>',
  $b, '<br>';
$a = 0;
echo
  $a, '<br>',
  $b, '<br><br>';

$c = 5;
$d = &$c;
echo
  $c, '<br>',
  $d, '<br>'; 
$c = 0;
echo
  $c, '<br>',
  $d, '<br><br>';
?>