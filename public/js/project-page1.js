$(document).on("pagecreate", function() {
	// Caulculator iframe popup
	var calculator = '<div data-role="popup" id="popupCalculator" data-overlay-theme="b" data-theme="a"> \
		         <a href="#" data-rel="back" class="ui-btn-right ui-btn ui-btn-b ui-corner-all ui-btn-icon-notext ui-icon-delete ui-shadow">Close</a> \
				 <iframe src="calculator.html" width="400" height="220" seamless></iframe></div>';
	$(".openCal").on("click", function() {
		$("body").append(calculator);
		$("#popupCalculator").popup();
		$("#popupCalculator iframe").on("load", function() {
			$("#popupCalculator").popup({
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
	
	// Wall Paper Selection popup
	var wallPaperSelection = '<div data-role="popup" id="popupWallPaper" data-overlay-theme="b" data-theme="a"> \
        <a href="#" data-rel="back" class="ui-btn-right ui-btn ui-btn-b ui-corner-all ui-btn-icon-notext ui-icon-delete ui-shadow">Close</a> \
		 <iframe src="'+ getDomain() +'wallPaperSelection.html" width="600" height="430" seamless></iframe></div>';
	$(".openWallPaper").on("click", function() {
		$("body").append(wallPaperSelection);
		$("#popupWallPaper").popup();
		$("#popupWallPaper iframe").on("load", function() {
			$("#popupWallPaper").popup({
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
	
	// Add Bookmark iframe popup
	var bookmarkModal = '<div data-role="popup" id="popupBookmarkModal" data-overlay-theme="b" data-theme="a"> \
        <a href="#" data-rel="back" class="ui-btn-right ui-btn ui-btn-b ui-corner-all ui-btn-icon-notext ui-icon-delete ui-shadow">Close</a> \
		 <iframe src="'+ getDomain() +'Bookmark.html" width="600" height="250" seamless></iframe></div>';
	$(".addBookMark").on("click", function() {
		$("body").append(bookmarkModal);
		$("#popupBookmarkModal").popup();
		$("#popupBookmarkModal iframe").on("load", function() {
			$("#popupBookmarkModal").popup({
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
	
	// Add Appointment iframe popup
	var appointModal = '<div data-role="popup" id="popupAppointmentModal" data-overlay-theme="b" data-theme="a"> \
        <a href="#" data-rel="back" class="ui-btn-right ui-btn ui-btn-b ui-corner-all ui-btn-icon-notext ui-icon-delete ui-shadow">Close</a> \
		 <iframe src="'+ getDomain() +'Appointment.html" width="600" height="300" seamless></iframe></div>';
	$(".addAppointment").on("click", function() {
		$("body").append(appointModal);
		$("#popupAppointmentModal").popup();
		$("#popupAppointmentModal iframe").on("load", function() {
			$("#popupAppointmentModal").popup({
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

