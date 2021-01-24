<?php
	//anti injection sql 1
	function fscript_clean($str) {
	$str = @trim($str);
	if(get_magic_quotes_gpc()) {
		$str = stripslashes($str);
	}
		return mysql_real_escape_string($str);
	} 

	//anti injection sql 2
	function fscript_injection($data){
		$filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data, ENT_QUOTES ))));
		return $filter;
	} 
?>