<?php
$server=(int)readline();
$a[6]=Array();
$b=readline();
$s=explode(' ',$b,5);

for($x=0;$x<5;$x++)
{
if($s[$x]<50)
(int)$server=(int)$server/2;
else
(int)$server=(2*(int)$server)+1;
}
echo (int)$server;
?>
