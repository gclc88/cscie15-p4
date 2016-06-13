<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Number Exercise</title>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript">
	var images = [ "images/memory/1-tree.png", "images/memory/2-switch.png",
			"images/memory/3-stool.png", "images/memory/4-car.png",
			"images/memory/5-glove.png", "images/memory/6-gun.png",
			"images/memory/7-dice.png", "images/memory/8-skate.png",
			"images/memory/9-cat.png", "images/memory/10-bowling.png",
			"images/memory/11-goalpost.png", "images/memory/12-eggs.png",
			"images/memory/13-witch.png", "images/memory/14-ring.png",
			"images/memory/15-paycheck.png", "images/memory/16-candles.png",
			"images/memory/17-magazine.png",
			"images/memory/18-votingBooth.png", "images/memory/19-club.png",
			"images/memory/20-cigarette.png" ];

	var count = 0;
	var correct = 0;
	var answer = 0;

	function init() {
		count = 0;
		correct = 0;
		$("#tries").val(count);
		$("#correcttries").attr("value", count);
		nextTest();
	}

	function nextTest() {
		answer = Math.floor((Math.random() * 20) + 1); // number 1 - 20
		var image = images[answer - 1]; // get image by index
		$("#imgbox").attr("src", image);
		$("#entry").val("");
		$("#response").val("");
	}

	function checkAnswer() {
		count += 1;
		var val = $("#entry").val();
		if (answer == val) {
			correct += 1;
			$("#response").val("Correct! Answer is "+ answer);
			$("#response").css("color", "black");
		}
		else {
			$("#response").val("Sorry! Answer is "+ answer);
			$("#response").css("color", "red");
		}

		$("#tries").val(count);
		$("#correcttries").attr("value", correct);
	}
</script>
<style type="text/css">
.frame {
	float: left;
	width: 310px;
	text-align: left;
	font-size: 0.75em;
	color: #006600;
	background: #fefecd;
	padding: 0.5em;
	margin: 0.75em;
	border-width: thin;
	border-style: dotted;
	border-color: #900;
}

#imgbox {
	width: 300px;
	height: 300px;
}

.question {
	float: right;
	width: 35%;
	margin-top: 100px;
}

textarea {
	border: none;
	font-weight: bold;
}
</style>
</head>
<body onload="init()">
	<div class="frame">
		<iframe id="imgbox" name="imgArea" src="images/view.png">
			<p>iframes are not supported by your browser.</p>
		</iframe>
	</div>
	<div class="question">
		<p>Number of Tries: <input id="tries" type="text" size="4" value="" readonly>
		<p>Correct Tries: <input id="correcttries" type="text" size="4" value="" readonly>
		<p>Enter Number: <input id="entry" type="text" size="4" value="">
		<p><textarea readonly id="response" cols="20" rows="1">&nbsp; </textarea>
		<p><input type="submit" onclick="checkAnswer()" value="Submit">
		<p><button type="button" onclick="nextTest()">Next</button>
	</div>
</body>
</html>
