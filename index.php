<?php
print "Hello, World! php version is " . PHP_VERSION . "\n";
echo gethostname() . "\n";
echo 'User IP Address - '. $_SERVER['REMOTE_ADDR'] . "\n";
// server address
$ip_server = $_SERVER['SERVER_ADDR'];
// Printing the stored address
$host= gethostname();
$ip = gethostbyname($host);
echo "Server IP Address is: $ip " . "\n";
?>