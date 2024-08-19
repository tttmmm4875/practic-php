<?php
$a_bool = true;   // bool
$a_str  = "foo";  // string
$a_str2 = 'foo';  // string
$an_int = 12;     // int

echo get_debug_type($a_bool), "\n";
echo get_debug_type($a_str), "\n";
echo $a_str, " ", $an_int, "\n";

// 数値であれば、4を足す
if (is_int($an_int)) {
    $an_int += 4;
}
var_dump($an_int);

// $a_bool が文字列であれば, それをprintする
if (is_string($a_bool)) {
    echo "String: $a_bool";
}

echo "\n****************\n";

var_dump((bool) "");        // bool(false)
var_dump((bool) "0");       // bool(false)
var_dump((bool) 1);         // bool(true)
var_dump((bool) -2);        // bool(true)
var_dump((bool) "foo");     // bool(true)
var_dump((bool) 2.3e5);     // bool(true)
var_dump((bool) array(12)); // bool(true)
var_dump((bool) array());   // bool(false)
var_dump((bool) "false");   // bool(true)

echo "\n****************\n";

$a = 1234; // 10進整数
var_dump($a);
$a = 0123; // 8進数 (10進数の83と等価)
var_dump($a);
$a = 0o123; // 8進数 (PHP 8.1.0 以降)
var_dump($a);
$a = 0x1A; // 16進数 (10進数の26と等価)
var_dump($a);
$a = 0b11111111; // 2進数 (10進数の255と等価)
var_dump($a);
$a = 1_234_567; // 10進数 (PHP 7.4.0 以降)
var_dump($a);

echo "\n****************\n";

var_dump(25/7);         // float(3.5714285714286) 
var_dump(intdiv(27, 7));         // float(3.5714285714286) 
var_dump((int) (25/7)); // int(3)
var_dump(round(25/7));  // float(4) 

echo "\n****************\n";

function foo($value): int {
    return $value;
  }
//   var_dump(foo(8.1)); // PHP 8.1.0 以降では "Deprecated: Implicit conversion from float 8.1 to int loses precision"
  var_dump(foo(8.1)); // PHP 8.1.0 より前のバージョンでは 8
  var_dump(foo(8.0)); // PHP 8.1.0 より前でもあとでも、8
  var_dump((int)8.1); // PHP 8.1.0 より前でもあとでも、8
  var_dump(intval(8.1)); // PHP 8.1.0 より前でもあとでも、8

  echo "\n****************\n";

echo <<<END
      a
     b
    c
\n
END;

$values = [<<<END
a
  b
    c
END, 'd e f'];
var_dump($values);

var_dump(array(12,13,14));