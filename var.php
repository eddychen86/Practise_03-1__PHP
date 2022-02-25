<?php
$var1=null;
// php 的 console
var_dump($var1);
echo '<br>';
$var2=3;
var_dump($var2);

// 全域變數
$a=99;
function show() {
  // 區域變數
  $b=10;
  // 靜態變數
  static $c=1;

  // 要拿取權域變數的話，必須用 echo '$GLOBALS[變數]'
  echo
    '<br><br>',
    'a is '.$GLOBALS['a'],
    '<br>',
    "a is $GLOBALS[a]";
  // 雙引號 內可以放變數
  echo 
    '<br><br>',
    "b is $b",'<br>';
  // 單引號 無法放變數
  echo 
    'b is $b',
    '<br>',
    '---',
    '<br>',
    "c is $c";
  $b++;
  $c++;
}
show();
show();

echo '<br>','<br>',"a is $a";
// 區域變數 需要 return 出來，不然會出現錯誤
echo "b is $b",'<br>';
?>