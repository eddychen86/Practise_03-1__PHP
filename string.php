<?php
$name="Jay";

echo 
  'My name is $name<br>',
  "My name is $name<br>",
  "My name is ".$name."<br>";

  $result = "1" + 1;
  echo $result;
?>

<?php
$string = "Hello World !";
?>
<h3>strlen</h3>
<!-- 計算字元數 -->
<?php
echo strlen($string);
?>

<h3>str word count</h3>
<!-- 計算單字數 -->
<?php
echo str_word_count($string);
?>

<h3>substr</h3>
<!-- 指定函數的起始位置到最後位置 -->
<?php
$string = "Hello World !";
echo substr($string,2);
echo "<br>";
echo substr($string,2,6);
?>

<h3>strstr</h3>
<!-- 以某字元為分界點，顯示之前或之後的字串 -->
<?php
$string = "Hello World !";
echo strstr("john@test.com", "@");
echo "<br>";
echo strstr("john@test.com", "@", true);
echo "<br>";
?>

<h3>strpos</h3>
<!-- 偵測字串的位置(有區分大小寫、不區分大小寫的寫法為 stripos()) -->
<?php
echo strpos("Hello World !", "World");
echo "<br>";
if ( strpos("Hello World !", "hello") == FALSE ) {
  echo "not found";
}
echo "<br>";
?>

<h3>str_replace、strtok</h3>
<!-- str_replace 字串替換 -->
<!-- strtok 字串拆解 -->
<?php
$string = "Hello Eddy, How are you?";
$token = strtok($string, " \n");

while ($token !== false) {
  echo "$token\n";
  $token = strtok(" \n");
}
echo "<br>";
echo str_replace("World", "Kitty", "Hello World");
?>

<h3>explode</h3>
<!-- 分割字串微陣列 -->
<?php
$string="Hello John, how are you?";
$stringArr=explode(" ", $string);
echo print_r($stringArr);
echo "<br>";
?>

<h3>跳脫字元</h3>
<?php
// 單引號用法
echo 'the path is c:\newpath','<br>';
echo 'the path is c:\newpath','<br>';
echo 'I said \'go home\'','<br>';
echo 'try newpath \n here';
echo "<br>";
echo "<br>";
// 雙引號用法
echo "the path is c:\newpath";
echo "<br>";
echo "the path is c:\\newpath";
echo "<br>";
echo "This is line1 \nThis is line2";
echo "<br>";
$foo = "I love you";
echo "I said $foo"
?>