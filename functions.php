<?php
// ---------------------------------------------------------------------------------------------
//
// FUNCTION
// Function to validate incoming values. Reduces code writing.
//
// $aArray: An array containing the values, for example $_POST or $_GET
// $aEntry: An entry in the array, for example 'id' or 'title'
// $aDefault: Default value to use when the array-entry is not set or is empty.
//
//	http://www.w3schools.com/php/php_functions.asp
//
//	http://php.net/manual/en/functions.user-defined.php
//	http://php.net/manual/en/functions.arguments.php
//	http://php.net/manual/en/functions.returning-values.php
//  http://php.net/manual/en/control-structures.if.php
//	http://php.net/manual/en/control-structures.else.php
//	http://php.net/manual/en/language.operators.logical.php
//	http://php.net/manual/en/function.isset.php
//	http://php.net/manual/en/function.empty.php
//	http://php.net/manual/en/function.strip-tags.php
//
function validateIncoming($aArray, $aEntry, $aDefault, $aAllowedTags="") {
	if(isset($aArray[$aEntry]) && !empty($aArray[$aEntry])) {
		return strip_tags($aArray[$aEntry], $aAllowedTags);
	} else {
		return $aDefault;
	}
}


// -------------------------------------------------------------------------------------------
//
// FUNCTION
// Function to open and read a directory, return its content as an array.
//
// $aPath: A path to the directory to scan for files. 
// 
//	http://www.w3schools.com/php/php_functions.asp
//
//	http://php.net/manual/en/function.is-dir.php
//	http://php.net/manual/en/function.opendir.php
//	http://php.net/manual/en/function.readdir.php
//	http://php.net/manual/en/function.is-file.php
//	http://php.net/manual/en/function.closedir.php
//	http://php.net/manual/en/function.sort.php
//	
function readDirectory($aPath) {
	$list = Array();
	if(is_dir($aPath)) {
		if ($dh = opendir($aPath)) {
			while (($file = readdir($dh)) !== false) {
				if(is_file("$aPath/$file") && $file != '.htaccess') {
					$list[$file] = "$file";
				}
			}
			closedir($dh);
		}
	}
	sort($list, SORT_NUMERIC);
	return $list;
}


// ---------------------------------------------------------------------------------------------
//
// FUNCTION
// Create a default handler for exceptions (when things go wrong).
//
//  http://php.net/manual/en/function.set-exception-handler.php
// 
function exceptionHandler($aException) {
	die("<p>Uncaught exception: " . $aException->getMessage());
}
set_exception_handler('exceptionHandler');


// -------------------------------------------------------------------------------------------
//
// FUNCTION
// Function which takes a img-rul as inputargument together with a size.
// Changes theimg-url and prepends the size as a subdirectory.
//
// $aImg: The img url
// $aSize: The size to prepend, should be a directory
//
function modifyImgUrl($aImg, $aSize) {
	$parts = pathinfo($aImg);
	return $parts['dirname'] . "/$aSize/" . $parts['basename'];
}


// -------------------------------------------------------------------------------------------
//
// FUNCTION
// Function which takes a img-rul as inputargument together with a size.
// Changes theimg-url and prepends the size as a subdirectory.
//
// $aBodyId:  Current id of the body tag.
// $aHistory: Array with links that is the history
// $aCurrent: Array with selection of current links. Will choose the one matching the current 
//            $aBodyId.
//
function createBreadCrumb($aBodyId, $aHistory, $aCurrent) {
	
	$history = "";
	foreach($aHistory as $val) {
		$history .= "<a href='{$val['href']}'>{$val['text']}</a>";
	}
	
	$current = "";
	if(isset($aCurrent[$aBodyId])) {
		//$current .= "<a href='{$aCurrent[$aBodyId]['href']}'>{$aCurrent[$aBodyId]['text']}</a>";
		$current .= $aCurrent[$aBodyId]['text'];
	}
	
	$html = <<<EOD
<nav class=breadcrumb>
	{$history}
	{$current}
</nav>

EOD;
	return $html;
}


?>