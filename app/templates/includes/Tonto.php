<?php

////////////////////////////////////////////////////////////////////////////////
//
//  ENFORME INTERACTIVE, INC.
//  Copyright 2009 Enforme Interactive, Inc
//  All Rights Reserved.
//
//  Tonto Mockup Framework
//
////////////////////////////////////////////////////////////////////////////////


session_start();

if (isset($_GET['state']))
{
	$_SESSION['state'] = $_GET['state'];
}

function isCurrentState($state)
{
	return isset($_SESSION['state']) && $_SESSION['state'] == $state;
}

function isCurrentPage($path)
{
	if ($path == "/")
		return ($_SERVER["REQUEST_URI"] == "/" || strpos($_SERVER["PHP_SELF"], "index") == 1);
	return (strpos($_SERVER["PHP_SELF"], $path) !== false);
}

function useWebpart($pageName)
{
	foreach ($GLOBALS as $key => $val)
	{
		global $$key;
	}

	$pathToRoot = realpath(dirname(__FILE__).'/..');
	$filePath = $pathToRoot . "/webparts/" . $pageName;

	if (file_exists($filePath . ".html"))
		include($filePath . ".html");
	if (file_exists($filePath . ".htm"))
		include($filePath . ".htm");
	if (file_exists($filePath . ".php"))
		include($filePath . ".php");

	return false;
}

?>