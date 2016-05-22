$(document).on("pagecreate", function() {
	// Practice Excercise Popup
	var calculator = '<div data-role="popup" id="popupEx" data-overlay-theme="b" data-theme="a"> \
		         <a href="#" data-rel="back" class="ui-btn-right ui-btn ui-btn-b ui-corner-all ui-btn-icon-notext ui-icon-delete ui-shadow">Close</a> \
				 <iframe src="numberExercise.html" width="600" height="350" seamless></iframe></div>';
	$(".openEx").on("click", function() {
		$("body").append(calculator);
		$("#popupEx").popup();
		$("#popupEx iframe").on("load", function() {
			$("#popupEx").popup({
				afterclose : function() {
					$(this).remove();
				},
				dismissible : false,
				history : false,
				positionTo : "window",
				transition : "pop"
			}).popup("open");
		});
	});
});
	