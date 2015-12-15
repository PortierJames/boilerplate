<?php
$mysql_server = '';
$mysql_user = '';
$mysql_pass = '';
$mysql_db = '';

$timezone = 'America/New_York';
$timeout = 300;

require_once functions.php
require_once mysql_functions.php

date_default_timezone_set($timezone);
set_time_limit($timeout);

$tables = array();
$create_mysql = 0;
foreach($tables as $table) {
  if (!mysql_num_rows(mysql_query("SHOW TABLES LIKE '" . $table . "'")))
    $create_mysql = 1;
}
if ($create_mysql) {
  $file = "create-tables.sql";
  $fh = fopen($file, 'r+');
  $contents = fread($fh, filesize($file));
  $cont = preg_split("/;/", $contents);
  foreach ($cont as $query) $result = mysql_query($query);
}
*/
?>
