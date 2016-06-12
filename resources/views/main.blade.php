<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Memory Game</title>
<!-- JQuery -->
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
<script src="js/jquery.cookie.js"></script>

<!-- JQuery Mobile -->
<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />

<!-- Blueprint -->
<link rel="stylesheet" href="css/blueprint/screen.css" type="text/css" media="screen, projection" />
<link rel="stylesheet" href="css/blueprint/print.css" type="text/css" media="print" />
<!--[if lt IE 8]><link rel="stylesheet" href="css/blueprint/ie.css" type="text/css" media="screen, projection"><![endif]-->

<!-- Fancy Box -->
<script type="text/javascript" src="js/fancybox/jquery.fancybox.pack.js"></script>
<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />

<!-- My Javascripts -->
<script src="js/project-scripts.js"></script>
<script src="js/project-page2.js"></script>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/page2-style.css" type="text/css" />

<script>
	$(document).ready(function() {
		//Fancy Box
		$("a.groupFancyBox").fancybox({
			'transitionIn'	:	'elastic',
			'transitionOut'	:	'elastic',
			'speedIn'		:	600,
			'speedOut'		:	200,
			'overlayShow'	:	false,
		});
	});
</script>
<style type="text/css">
#testButton {
	text-align:center;
	margin:auto;
}
</style>
</head>
<body onload="init()">
	<!-- header -->
	<div class="header-Background">
		<h1 id="header1">CSCIE15 - Project by Godrey CHENG</h1>
		<h2> <em id="dateTime"> </em>&nbsp;</h2>
	</div>
	<!-- end header -->
	<!-- site navigation -->
	<hr>
	<div class="main span-24 last">
		<div class="span-5">
		<!-- Left Pane category navigation -->
			<ul class="navCol">
			<li> Review Images: </li>
			<li>
				<a class="groupFancyBox" rel="group1-10" href="images/memory/1-10.jpg" title="View 1 - 10">
					<figure>
						<img class="view-icon" src="images/memory/1-10.jpg"/>
						<figcaption>View 1 - 10</figcaption>
					</figure>
				</a>
			</li>
			<li>
				<a class="groupFancyBox" rel="group11-20" href="images/memory/11-20.jpg" title="View 11 - 20">
					<figure>
						<img class="view-icon" src="images/memory/11-20.jpg" />
						<figcaption>View 11 - 20</figcaption>
					</figure>
				</a>
			</li>
			</ul>
		</div>
		<!-- Main section content -->
		<div class="span-18 last" >
		<h2> Number Association System:</h2>
		<p>Basic association is the foundation of many memory improvement programs. In order to remember an uninteresting
		thing, first associate that thing to a familiar object, and memorize that object in stead. In the
		case of number, it is found to be hard to remember dull repeating integers. It is found to be easier to remember
		familiar objects associated to that number than the number itself. For example, to remember the
		number 23, it would be easier for someone to memorize "Michael Jordan", who's team number is 23.
		<p> The list on the left are some sample images found to be easily associated to their associated numbers.
			Please register and sign-in to your account in order to do practice exercises. You may create your own associations
			from you account.
			<br />
		<div id="testButton">
			<a href="#" class="ui-btn ui-btn-inline ui-corner-all openEx">Sign-in</a>
		</div>
		</div>
	</div>
	<div style="visibility: hidden">
		<a class="groupFancyBox" rel="group1-10" href="images/memory/1-tree.png" title="1: Tree (shape like a 1)">Tree</a>
		<a class="groupFancyBox" rel="group1-10" href="images/memory/2-switch.png" title="2: Switch (two poles)">Switch</a>
		<a class="groupFancyBox" rel="group1-10" href="images/memory/3-stool.png" title="3: Stool (three legs)">Stool</a>
		<a class="groupFancyBox" rel="group1-10" href="images/memory/4-car.png" title="4: Car (four wheels)">Car</a>
		<a class="groupFancyBox" rel="group1-10" href="images/memory/5-glove.png" title="5: Glove (five fingers)">Glove</a>
		<a class="groupFancyBox" rel="group1-10" href="images/memory/6-gun.png" title="6: Gun (six bullets)">Gun</a>
		<a class="groupFancyBox" rel="group1-10" href="images/memory/7-dice.png" title="7: Dice (lucky 7)">Dice</a>
		<a class="groupFancyBox" rel="group1-10" href="images/memory/8-skate.png" title="8: Skate (figure 8)">Skate</a>
		<a class="groupFancyBox" rel="group1-10" href="images/memory/9-cat.png" title="9: Cat (nine lives)">Cat</a>
		<a class="groupFancyBox" rel="group1-10" href="images/memory/10-bowling.png" title="10: Bowling (ten pins)">Bowling</a>
		<a class="groupFancyBox" rel="group11-20" href="images/memory/11-goalpost.png" title="11: Goal Post (shape like 11)">Goal Post</a>
		<a class="groupFancyBox" rel="group11-20" href="images/memory/12-eggs.png" title="12: Eggs (a dozen)">Eggs</a>
		<a class="groupFancyBox" rel="group11-20" href="images/memory/13-witch.png" title="13: Witch (Friday 13th)">Witch</a>
		<a class="groupFancyBox" rel="group11-20" href="images/memory/14-ring.png" title="14: Ring (valentine's day 2/14)">Ring</a>
		<a class="groupFancyBox" rel="group11-20" href="images/memory/15-paycheck.png" title="15: Pay Check (pay day 15th)">Pay Check</a>
		<a class="groupFancyBox" rel="group11-20" href="images/memory/16-candles.png" title="16: Candles (sixteen candles)">Candles</a>
		<a class="groupFancyBox" rel="group11-20" href="images/memory/17-magazine.png" title="17: Magazine (The Seventeen Magazine)">Magazine</a>
		<a class="groupFancyBox" rel="group11-20" href="images/memory/18-votingBooth.png" title="18: Voting Booth (voting age 18)">Voting Booth</a>
		<a class="groupFancyBox" rel="group11-20" href="images/memory/19-club.png" title="19: Golf Club (19th hole)">Golf Club</a>
		<a class="groupFancyBox" rel="group11-20" href="images/memory/20-cigarette.png" title="20: Cigarette (pack of twenty)">Cigarette</a>
	</div>
</body>
</html>
