<?php
print "Hello, World! php version is " . PHP_VERSION . "\n";
// Printing the stored address
$host= gethostname();
$ip = gethostbyname($host);
echo "POD IP Address is: $ip " . "\n";
?>
