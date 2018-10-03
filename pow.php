<?php //php 7.0.8
$cache = [];
function recursive_pow($a, $b){
  global $cache;
  if ($b == 0) return 1;
  if ($b == 1) return $a;

  if (isset($cache[$a.'^'.$b]) || array_key_exists($a.'^'.$b, $cache)) {
    return $cache[$a.'^'.$b];
  } else {
    $cache[$a.'^'.$b] = $a * recursive_pow($a, $b - 1);
    return $cache[$a.'^'.$b];
  }
}

echo recursive_pow(2, 10);
?>
