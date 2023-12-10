<?php
$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($con, 'casestudy.mysql.database.azure.com', 'dushyanth', 'abcd!123', 'myhmsdb', 3306, MYSQLI_CLIENT_SSL);
if (mysqli_connect_errno($con)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}
?>