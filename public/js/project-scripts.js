function init() {
	var image = $.cookie("backgroundImage");
	if (!image)
		image = 'flower-bg.jpg';
	setBodyBackgroundImage(image);
	startTime();
}

function setBodyBackgroundImage(img) {
	if (!img || img == "") {
		img = 'flower-bg.jpg';
	}
	console.log("setBodyBackgroundImage: "+ img);
	document.body.style.backgroundImage = 'url(images/'+ img +')';
	$.cookie("backgroundImage", img);
}

function startTime() {
	var today = new Date();
	document.getElementById('dateTime').innerHTML = today.toLocaleString();;
	var t = setTimeout(function() {
		startTime()
	}, 500);
}

function getDomain() {
	var url = document.URL.toString();
	console.log("doucment url: " + url);
	if (url) {
		var n = url.lastIndexOf("\\");
		if (n > 0) {
			// this is window local file notation
			url = url.substring(0, n+1);	// include "\" in return string
			console.log("**** getDomain url: "+ url);
			return url;
		}
		else {
			// this is http:// notation
			n = url.lastIndexOf("/");
			url = url.substring(0, n+1);	// include "\" in return string
			console.log("**** getDomain url: "+ url);
			return url;
		}
	}
	else {
		console.log("**** getDomain return empty string!!!!");
		return "";
	}
}

function changePage(link) {
	// It is necessary to use this function to changePage in order to
	//  force target page refresh after changePage for JQuery mobile
	var url = getDomain() + link;
	$(location).attr('href', url);
}

