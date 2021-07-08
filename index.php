<?php
$host= gethostname();
$ip = gethostbyname($host);
echo "POD IP Address is: $ip " . "\n";
?>
