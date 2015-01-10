<?php

require_once 'login.php';
$db_server = mysql_connect($db_hostname, $db_username, $db_password);

if (!$db_server) {
  die("Unable to connect to MySQL: " . mysql_error());
}

mysql_select_db($db_database, $db_server)
  or die("Unable to select database: " . mysql_error());

$query = "SELECT * FROM classics";
$result = mysql_query($query);

if (!$result) {
  die("Database access failed: " . mysql_error());
}

$rows = mysql_num_rows($result);

for ($i = 0; $i < $rows; $i++) {
  $row = mysql_fetch_row($result);

  echo <<< EOF
  <pre>
    Author:   $row[0]
    Title:    $row[1]
    Category: $row[2]
    Year:     $row[3]
    ISDN:     $row[4]
  </pre>
EOF;
}

