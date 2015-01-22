<!doctype html>
<html lang = "sv">

<head>
	<meta charset="utf-8">
	<title>Programmeringstest Phonera</title>
	<link rel="stylesheet" href="style/stylesheet.css">

	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<script type="text/JavaScript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>

<body>

<script type="text/JavaScript">
	
	// Hämtar titlar på artiklar via scriptGetTitles.php
	$(document).ready(function(){
		$("#get").click(function() {
			$.get("scriptGetTitles.php", function(data, status) {
				document.getElementById('target').innerHTML += data + "\n";
				return false;
			});
		});
	});​

/*
$(document).ready(function(){
  $("button").click(function(){
    $.get("demo_test.asp",function(data,status){
      alert("Data: " + data + "\nStatus: " + status);
    });
  });
});

*/


// Rensar localStorage
$('#delete').click( function() {
	window.localStorage.clear();
	location.reload();
	return false;
});
	

	
</script>
  
<!-- Header -->
<header> Programmeringstest Phonera - Thobias Malmqvist 2015 </header>

<button id="get">Hämta artiklar</button>

<div id="target">
	
</div>

<button id="delete">Ta bort artiklar</button>

<p>Ny kategori: <input type="text" />
<input type="submit" value="Lägg till"/></p>


<div id="target2">
	
</div>

<!-- Footer -->
<footer id="bottom">
	<p>Utvecklat av Thobias Malmqvist (C) Januari 2015</p>
</footer>
</body>
</html>
