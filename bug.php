function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'someValue') {
      unset($arr[$key]); // This is problematic if $arr is passed by reference
    }
  }
  return $arr;
}

$myArray = ['a', 'someValue', 'b'];
$result = foo($myArray);
print_r($result); //Output: Array ( [0] => a [2] => b )

$myArray = ['a', 'someValue', 'b'];
$result = foo($myArray); //Modifying the array in place is the issue
print_r($myArray);  // Output: Array ( [0] => a [2] => b )  - This is unexpected if you are not aware of pass by reference