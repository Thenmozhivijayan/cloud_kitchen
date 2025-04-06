<?php

$host     = "dpg-cvp91n24d50c73bqa53g-a"; // From Render
$port     = "5432";
$dbname   = "cdb_ce09";
$user     = "cdb_ce09_user";
$password = "W5JgrjD9Wao6PV0g2XwIvzCJYKed5czT";

// Build connection string
$connStr = "host=$host port=$port dbname=$dbname user=$user password=$password";

// Connect to PostgreSQL
$db = pg_connect($connStr);

if (!$db) {
    die("PostgreSQL connection failed.");
}
?>
