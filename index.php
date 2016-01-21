<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="Content description"/>
	<meta name="keywords" content="keyword1, keyword2" />
	<meta http-equiv="content-language" content="en" />
	<title>NEW PROJECT</title>
	<!-- jQuery UI CSS CDA, Google fonts CDA - Open Sans, Reset CDA -->
		<link rel="stylesheet" type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
		<link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Open+Sans&subset=latin,latin-ext'>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- X -->
</head>

<body>
	<div class="content">
		<header>
			<nav>
			</nav>
		</header>
		
		<section>
			<div id="tabster">
				<ul>
					<li><a  class="button active" target="#box1">Intor</a></li>
					<li><a target="#box2">Options</a></li>
					<li><a target="#box3">Bug ?</a></li>
					<li><a target="#box4">Tab 2</a></li>
					<li><a target="#box5">Tab 3</a></li>
					<li><a target="#box6">Tab 4</a></li>
				</ul>
				<div id="contentOuterWraper">
					<div id="contentInerWraper">
						<div class="box" id="box1">
							<h1>Tabster - TabjQeryPlugin <a href="https://github.com/GlupiJas/TabjQeryPlugin"> Github Project </a></h1>
							<p>Custom jQuery Plugin to play tabs - tabjQeryPlugin.js</p>
							<p>Remember its a jQuery based plugin .. so don't forget to include jQuery in your file</p>
							<p>Copy and paste CSS, HTML and apply the plugin at the bottom of your page</p>
						</div>
						<div class="box" id="box2">
						<h1>Settings avilable</h1>
							<pre>
	var options = {
		  		<b style="font-weight:900;"> mainWrapper: "#tabster", </b> // just a main div wrapper
		  		<b style="font-weight:900;"> target: "div.box", </b> // select all div.box (content of each tab)
		  		<b style="font-weight:900;"> buttons: "ul li a", </b> // select all buttons
		  		<b style="font-weight:900;"> buttonAttrName: "target", </b> // attr that contin div tab box id np #box1
		  		<b style="font-weight:900;"> activeClassName: "tabActive", </b> // class to added to active button
		  		<b style="font-weight:900;"> delayAfterClick: 0, </b> // wait this time before fade
		  		<b style="font-weight:900;"> fadeSpeed: 0, </b> // fade with this speed
		  		<b style="font-weight:900;"> showDefault: 1, </b> // tab number be activated when loaded / false - no tab on load
		  		<b style="font-weight:900;"> allowNone: true, </b> // allow closing tabs when clicked seckound time on same button	 
		  		<b style="font-weight:900;"> autoPlay: true, </b> // autoplay tabs
		  		<b style="font-weight:900;"> speedPlay: 3500, </b> // time for col to fade
		  		<b style="font-weight:900;"> onClickStopPlay: true, </b> // [true|false] When tabs chenge onclick stop auto play
		  		<b style="font-weight:900;"> resumePlayAfter: 3500, </b> // [3000] after stoping wait this amount of time (3s) and start to play again
		  		<b style="font-weight:900;"> onContentHoverPause: true, </b> // When hover on content will stop playing
		  		<b style="font-weight:900;"> contentOuterWraper: "#contentOuterWraper", </b> // We need it to get padding-bot % (responsive on window resize) not needed for auto or fixed height
		  		<b style="font-weight:900;"> pluginActionOn: 'click mouseenter', </b> // interact with buttons on ... [click | mouseenter | ...]
	}
$.tabjQeryPlugin(options); // or run plugin with default settings like so: $.tabjQeryPlugin(); but then remember to keep with the html and css structure as in the demo
							</pre>
						</div>
						<div class="box" id="box3">
							<h1>
								If you find any bugs... Please let me know at my github repo.

							</h1>
						</div>
						<div class="box" id="box4">
							<p>Place for your content</p>
						</div>
						<div class="box" id="box5">
							<p>Place for your content</p>
						</div>
						<div class="box" id="box6">
							<p>Place for your content</p>
						</div>						
					</div>
				</div>
			</div>
		</section>
	</div>

<!-- jQuery CDA, UI CDA and plugins -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="js/tabjQeryPlugin.js"></script>


<script>
// USE EXAMPLE
var options = {
	  		mainWrapper: "#tabster", // just a main div wrapper
	  		target: "div.box", // select all div.box (content of each tab)
	  		buttons: "ul li a", // select all buttons
	  		buttonAttrName: "target", // attr that contin div tab box id np #box1
	  		activeClassName: "tabActive", // class to added to active button
	  		delayAfterClick: 0, // wait this time before fade
	  		fadeSpeed: 0, // fade with this speed
	  		showDefault: 1, // tab number be activated when loaded / false - no tab on load
	  		allowNone: true, // allow closing tabs when clicked seckound time on same button	 
	  		autoPlay: true, // autoplay tabs
	  		speedPlay: 3500, // time for col to fade
	  		onClickStopPlay: true, // [true|false] When tabs chenge onclick stop auto play
	  		resumePlayAfter: 3500, // [3000] after stoping wait this amount of time (3s) and start to play again
	  		onContentHoverPause: true, // When hover on content will stop playing
	  		contentOuterWraper: "#contentOuterWraper", // We need it to get padding-bot % (responsive on window resize) not needed for auto or fixed height
	  		pluginActionOn: 'click mouseenter', // interact with buttons on ... [click | mouseenter | ...]
}

$.tabjQeryPlugin(options); // or run plugin with default settings like so: $.tabjQeryPlugin(); but then remember to keep with the html and css structure as in the demo

// HTML EXAMPLE
// <li><a target="#box1"> - click - </a></li>
// <div class="box" id="box1">box1</div>

</script>
</body>

</html>
