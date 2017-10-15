<?php

include "dbconfig.php";

/* alert 창을 띄우고 location.href 로 위치를 이동하는 함수 */
function alert($msg, $path)
{
	echo "<html>";
	echo "<body>";
	$msg = str_replace("'", "\'", $msg);

	if ($path == "back")
	{
		echo "<script>alert('{$msg}'); history.back(); </script>";
	}

	else if (isset($path))
	{
		echo "<script>alert('{$msg}'); location.href='{$path}';</script>";
	}

	else
	{
		echo "<script>alert('{$msg}');</script>";
	}
	echo "</body>";
	echo "</html>";
}

/* XSS를 가능케 하는 문자들을 html entity encode 합니다. */
function xss($string)
{
	return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

/* mysqli_connect, mysqli_query, mysqli_fetch_array 함수들을 한꺼번에 하는 함수*/
function queryfetch($query)
{
	include "dbconfig.php";
	$result 	= mysqli_query($conn, $query);
	$fetch 		= mysqli_fetch_array($result);

	return $fetch;
}


?>
