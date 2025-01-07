function foo(array &$arr) {
  $keysToRemove = [];
  foreach ($arr as $key => $value) {
    if ($value === 'someValue') {
      $keysToRemove[] = $key;
    }
  }
  foreach ($keysToRemove as $key) {
    unset($arr[$key]);
  }
  return $arr;
}

$myArray = ['a', 'someValue', 'b'];
$result = foo($myArray);
print_r($result); // Output: Array ( [0] => a [2] => b )

$myArray = ['a', 'someValue', 'b'];
$result = foo($myArray);
print_r($myArray); // Output: Array ( [0] => a [2] => b )