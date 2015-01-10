<?php
$out = "";

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
