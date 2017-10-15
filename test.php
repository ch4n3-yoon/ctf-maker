
<?php

$i = 0;
while (1)
{
	$hex = dechex($i);
	$string = "0e{$hex}";

	if ($string == md5($string))
	{
		echo "hex : {$hex}\n";
		die();
	}

	echo $string . "\n";
	$i++;
}

?>