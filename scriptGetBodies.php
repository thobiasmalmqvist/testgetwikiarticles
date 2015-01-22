<?php

function getBody($Url){
    $str = file_get_contents($Url);
    if(strlen($str)>0){
        preg_match("/\<body\>(.*)\<\/body\>/",$str,$body);
        return $body[1];
    }
}

for ($i = 0; $i < 10; $i++){
	echo getBody("http://sv.wikipedia.org/wiki/Special:Slumpsida");
}

?>
