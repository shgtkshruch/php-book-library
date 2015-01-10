<?php

require_once 'sanitize.php';

$f = $c = "";

if (isset($_POST['f'])) {
  $f = sanitizeString($_POST['f']);
}

if (isset($_POST['c'])) {
  $c = sanitizeString($_POST['c']);
}

if ($f != '') {
  $c = intval((5 / 9) * ($f - 32));
  $out = "$f °f equals $c °c";
} elseif ($c != '') {
  $f = intval((9 / 5) * $c + 32);
  $out = "$c °c equals $f °f";
} else {
  $out = "";
}

echo <<<END
<html>
  <head>
    <title>Temperature Converter</title>
  </head>
  <body>
    <pre>
      Enter either Fahrenheit or Celsius and click on Convert
      <b>$out</b>
      <form action="convert.php" method="POST">
        Fahrenheit <input type="text" name="f" sizse="7">
        Celsius    <input type="text" name="c" sizse="7">
        <input type="submit" value="Convert">
      </form>
    </pre>
  </body>
</html>
END;

var_dump($_SERVER);
