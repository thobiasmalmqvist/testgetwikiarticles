<?php


function getTitle($Url) {
	$str = file_get_contents($Url);
	if(strlen($str)>0) {
		preg_match("/\<title\>(.*)\<\/title\>/", $str,$title);
		return $title[1];
	}
}




for ($i = 0; $i < 10; $i++) {
	echo getTitle("http://sv.wikipedia.org/wiki/Special:Slumpsida");
	echo "<br \>";
}

?>
