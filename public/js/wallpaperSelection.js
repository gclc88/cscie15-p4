var wallpaperSelectText = "\
<html> \
<head> \
<style> \
	ul { list-style: none; } \
	img { \
		height: 100px; \
		width: 150px; \
		margin: 10px; \
		border: thin solid black; \
		float : right; \
		clear : left; \
	} \
</style> \
<script type=\"text/javascript\"> \
function selectImage(img) { \
    try { \
    	alert(\"test before\"); \
        parent.window.opener.setBodyBackgroundImage(img); \
    	alert(\"test\"); \
    } \
    catch (err) { alert(err);} \
    window.close(); \
    return false; \
} \
</script> \
</head> \
<body onload=\"test()\"> \
<p> Please select a background image: </p> \
<div> \
	<ul> \
		<li><a href=\"#\" title=\"Autumn\" onclick=\"return selectImage(\'autumn.jpg\');\"> <img class=\"thumbnail\" src=\"images/autumn.jpg\" alt=\"Autumn\" /> </a></li> \
		<li><a href=\"#\" title=\"Beach\" onclick=\"return selectImage(\'beach.jpg\');\"> <img class=\"thumbnail\" src=\"images/beach.jpg\" alt=\"Beach\" /></a></li> \
		<li><a href=\"#\" title=\"Dolphine\" onclick=\"return selectImage(\'dolphine.jpg\');\"> <img class=\"thumbnail\" src=\"images/dolphine.jpg\" alt=\"Dolphine\" /></a></li> \
		<li><a href=\"#\" title=\"Duedrop\" onclick=\"return selectImage(\'duedrop.jpg\');\"> <img class=\"thumbnail\" src=\"images/duedrop.jpg\" alt=\"Duedrop\" /></a></li> \
		<li><a href=\"#\" title=\"Shore\" onclick=\"return selectImage(\'shore.jpg\');\"> <img class=\"thumbnail\" src=\"images/shore.jpg\" alt=\"Shore\" /></a></li> \
		<li><a href=\"#\" title=\"Sky\" onclick=\"return selectImage(\'sky.jpg\');\"> <img class=\"thumbnail\" src=\"images/sky.jpg\" alt=\"Sky\" /></a></li> \
		<li><a href=\"#\" title=\"Skyline\" onclick=\"return selectImage(\'skyline.jpg\');\"> <img class=\"thumbnail\" src=\"images/skyline.jpg\" alt=\"Skyline\" /></a></li> \
		<li><a href=\"#\" title=\"Sparkle\" onclick=\"return selectImage(\'sparkle.jpg\');\"> <img class=\"thumbnail\" src=\"images/sparkle.jpg\" alt=\"Sparkle\" /></a></li> \
		<li><a href=\"#\" title=\"Wave\" onclick=\"return selectImage(\'wave.jpg\');\"> <img class=\"thumbnail\" src=\"images/wave.jpg\" alt=\"Wave\" /></a></li> \
	</ul> \
</div> \
</body> \
</html> \
";	