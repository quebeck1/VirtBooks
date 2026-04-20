<?php


function loader($className)
{
	$dir = __DIR__;
	$moduleFileWithPath = "$dir/classes/modules/$className.php";
	$classFileWithPath = "$dir/classes/$className.php";

	if (is_file($moduleFileWithPath))
		include $moduleFileWithPath;
	else if (is_file($classFileWithPath))
		include $classFileWithPath;
}

spl_autoload_register('loader');

session_start();
