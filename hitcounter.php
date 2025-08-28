<?php
	function getArrayAsString($arr){
		$ret = '$file_contents = array('."\n";
		foreach($arr as $k => $v){
			$ret = $ret . "\t'$k' => $v,\n";
		}
		$ret = $ret . ");\n";
		return $ret;
	}

	function hit_array_as_friendly_html($arr){
		$ret = "<table>\n";
		$ret = $ret . "<tr><th>Date</th><th>Number of visitors</th></tr>\n";
		foreach($arr as $k => $v){
			$ret = $ret . "<tr><td>$k</td><td>$v</td></tr>\n";
		}
		$ret = $ret . "</table>\n";
		return $ret;
	}

	function getArrayFromFile($the_file){
		if(file_exists($the_file)){
			$fd = file_get_contents($the_file);
			eval($fd);
		} else {
			$file_contents = array();
		}
		return $file_contents;
	}

	function putArrayToFile($the_file, $arr){
		$arr_str = getArrayAsString($arr);
		$f = fopen($the_file , "w") or die ("Can't open $the_file");
		$fout = fwrite($f, $arr_str);
		fclose($f);
	}

	function addHitToFile($the_file){
		$arr = getArrayFromFile($the_file);
		$today = date('m-d-Y');
		$tmp_int = 0;
		if(array_key_exists($today, $arr)){
			$tmp_int = $arr[$today];
		}
		$tmp_int = $tmp_int + 1;
		$arr[$today] = $tmp_int;
		putArrayToFile($the_file, $arr);
	}

	function checkAndSetCookie($cookie_name){
		$cookie_exists = isset($_COOKIE[$cookie_name]);
		setcookie($cookie_name, True, time()+3600);
		return $cookie_exists;
	}

	function addHitToFileWithCookie($the_file, $cookie_name){
		$cookie_exists = checkAndSetCookie($cookie_name);
		if(!$cookie_exists){
			addHitToFile($the_file);
		}
	}
?>
