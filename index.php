<?php
include(__DIR__ . "/_/includes/init.php");


$adjective = ucwords($adjectives[rand(0,count($adjectives)-1)]);
$noun = ucwords($nouns[rand(0,count($nouns)-1)]);

print "<h1>$adjective $noun</h1>";
?>
