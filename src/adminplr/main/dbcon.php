<?php
//core
function dbcon()
{
	$user = "plrc7162_root";
	$pass = "semangatpagiPLR";
	$host = "localhost";
	$db   = "plrc7162_sales";
	mysql_connect($host, $user, $pass);
	mysql_select_db($db);
}

function host()
{
	$h = "http://" . $_SERVER['HTTP_HOST'] . "/adminplr/";
	return $h;
}

function hRoot()
{
	$url = $_SERVER['DOCUMENT_ROOT'] . "/adminplr/";
	return $url;
}

//parse string
function gstr()
{
	$qstr = $_SERVER['QUERY_STRING'];
	parse_str($qstr, $dstr);
	return $dstr;
}
