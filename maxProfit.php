<?php
$a=explode(" ",readline(),3);
$b=explode(" ",readline(),2);
$c=0;
$s=0;
$d=intdiv($a[0],2);
if($b[0]>$b[1])
{
if($d>0 && $a[1]>0)
{
$c=min($d,$a[1]);
$s=$c*$b[0];
$d=$d-$a[1];
}
if($d>0 && $a[2]>0)
{
$c=min($d,$a[2]);
$s=$s+$c*$b[1];
}
}
else
{
if($d>0 && $a[2]>0)
{
$c=min($d,$a[2]);
$s=$c*$b[1];
$d=$d-$a[2];
}
if($d>0 && $a[1]>0)
{
$c=min($d,$a[1]);
$s=$s+$c*$b[0];
}
}
echo "$s";
?> 
