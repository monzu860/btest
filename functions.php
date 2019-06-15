<?php
function isObject($x)
{
	return $x===(object) $x;
}

function isArray($x)
{
	 return $x===(array) $x;
}
