<?php

include "lib.php";

@session_start();
if ($_SESSION['id'] !== "admin")
{
	die(alert("Only admin.", "back"));
}

?>