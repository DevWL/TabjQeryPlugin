<!DOCTYPE HTML>

<!-- FOLDER STRUCTURE 
	index.php
	 |->less[_]->css[_] // create your less file in less folder
	 |->js[_] // create your plugin js file
 -->

<html lang="pl">

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="Content description"/>
	<meta name="keywords" content="keyword1, keyword2" />
	<meta http-equiv="content-language" content="pl" />

	<title>NEW PROJECT</title>


	<!-- jQuery UI CSS CDA, Google fonts CDA - Open Sans, Reset CDA -->
		<link rel="stylesheet" type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
		<link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Open+Sans&subset=latin,latin-ext'>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
	<!-- X -->

	<!-- Custom CSS if generated from styles.less -->
		<!-- <link rel="stylesheet" type="text/css" href="less/css/compiled.css"> GENERATE -->
	<!-- X -->
	
	<!-- CLIENT SIDE LESS CDN + CUSTOM LESS FILE -->
		<!-- <link rel="stylesheet/less" type="text/css" href="less/compiled.less"/> 
		<script src="js/less.js"></script>  -->
	<!-- X -->

	<style>
		*{
			margin: 0px;
			padding: 0px;
			text-decoration: none;
		}
		html{
		    position: relative;
		    min-height: 100%;
		}
		body{
		}

		body{
			font-family: 'Open Sans', sans-serif;
			font-size: 120%;
			line-height: 120%;
		}
		h1{
			font-size: 150%;
			line-height: 150%;
		}
/*		section:after, section:before{
			display: block;
			content: " ";
			height: 0px;
			font-size: 0px;
			clear: both;
		}*/

		footer{
			box-sizing: border-box;
		    position: absolute;
		    left: 0;
		    bottom: 0;
		    height: 120px;
		    width: 100%;
		    background-color: rgba(0,0,0,0.1);
		    padding: 30px;
		}
		#tabWraper{
			width: 100%;
		}

		#tabWraper ul{
			width: 100%;
		}

		#tabWraper li{
			float: left;
			cursor: pointer;
			width: 16.665%;
		}
		#tabWraper li a {
			color:white;
			background-color: black;
			box-sizing: border-box;
			display: block;
			width: 100%;
			float: left;
			text-align: center;
			padding: 30px;
			border: 1px solid rgba(0,0,0, 0.1);
		}
		#tabWraper .box{
			overflow-x: hidden;
			overflow-y: scroll;
			box-sizing: border-box;
			height: 100%;
			width: 100%;
			background-color: rgba(0,0,0,0.1);
			color: black;
			padding: 30px;
			float: left;
			display: none;
			
			/* [1/1 auto height with minimum height] [coment out responsive fixed ratio]*/
			min-height: 300px; 
		}
		#tabWraper .tabActive{
			background-color: rgba(0,0,0,0.1);
			color: black;
			border-bottom: rgba(0,0,0,0) 1px solid;
		}

		#tabWraper #contentOuterWraper{
			display: block;
			overflow: hidden;
			position: relative;
			width: 100%;
			/* [1/2 responsive fixed ratio] */
			/*padding-bottom: 30%;*/
		}

		#tabWraper #contentInerWraper{
			/* [2/2 responsive fixed ratio] */
/*			position: absolute;
			top: 0px;
			left: 0px;
			right: 0px;
			bottom: 0px;*/
		}

	</style>

</head>

<body>
	<div class="content">
		<header>
			<nav>

			</nav>
		</header>
		
		<section>
			<div id="tabWraper">
				<ul>
					<li><a  class="button active" target="#box1">Hello</a></li>
					<li><a target="#box2">Exccited</a></li>
					<li><a target="#box3">click</a></li>
					<li><a target="#box4">click</a></li>
					<li><a target="#box5">click</a></li>
					<li><a target="#box6">click</a></li>
				</ul>
				<div id="contentOuterWraper">
					<div id="contentInerWraper">
						<div class="box" id="box1">
							<h1>Tabster - TabjQeryPlugin <a href="https://github.com/GlupiJas/TabjQeryPlugin"> Github Project </a></h1>
							<p>Custom jQuery Plugin with options - TabjQeryPlugin</p>
							<p>Remember its a jQuery based plugin .. so don't forget to include jQery in your file</p>
							<p>Copy and paste CSS, HTML and apply the plugin at the bottom of your page</p>
						</div>
						<div class="box" id="box2">
						<h1>Settings avilable</h1>
							<pre>
	var options = {
		  		<b style="font-weight:900;">mainWrapper: "#tabWraper",</b> // Wrapper for nav and content
		  		<b style="font-weight:900;">target: "div.box",</b> // select all div.box
		  		<b style="font-weight:900;">buttons: "ul li a",</b> // select all buttons
		  		<b style="font-weight:900;">buttonAttrName: "target",</b> // attr that contin div tab box id np #box1
		  		<b style="font-weight:900;">activeClassName: "tabActive",</b> //class to added to active button
		  		<b style="font-weight:900;">delayAfterClick: 0,</b> // wait this time before fade
		  		<b style="font-weight:900;">fadeSpeed: 50,</b> // fade with this speed
		  		<b style="font-weight:900;">showDefault: 2,</b> // tab number be activated when loaded / false - no tab on load
		  		<b style="font-weight:900;">allowNone: false,</b> // allow closing tabs when clicked seckound time on same button	 
		  		<b style="font-weight:900;">autoPlay: true,</b> // autoplay tabs
		  		<b style="font-weight:900;">speedPlay: 3500,</b> // time for col to fade
		  		<b style="font-weight:900;">onClickStopPlay: true,</b> // [true|false] When tabs chenge onclick stop auto play
		  		<b style="font-weight:900;">resumePlayAfter: 5000,</b> //[3000] after stoping wait this amount of time (3s) and start to play again
		  		<b style="font-weight:900;">onContentHoverPause: true,</b> // When hover on content will stop playing
		  		<b style="font-weight:900;">contentOuterWraper: "#contentOuterWraper",</b> // We might need it to get padding-bot to reaply on to the tab element when allowNone is set to true % (responsive on window resize) not needed for auto or fixed height
	}

$.myPlugin(options); // or run plugin with default settings like so: $.myPlugin(options);
							</pre>
							<h1>Are you excited about new plugin I just made for you ?</h1>
							<p>Let me know if I can improve it for You</p>
						</div>
						<div class="box" id="box3">
							<h1>If you find any bugs... Please let me know.</h1>
							<p>I will patch it ASAP (as soon as possible)</p>
						</div>
						<div class="box" id="box4">
							<p>You can add your content here! :)</p>
						</div>
						<div class="box" id="box5">
							<p>You can add your content here! :)</p>
						</div>
						<div class="box" id="box6">
							<p>You can add your content here! :)</p>
						</div>						
					</div>
				</div>
			</div>
		</section>
	</div>
	<footer>
		<p><b style="font-weight:900">jQuery Custom Plugin js-footerBottom.js</b> - keeps footer at the bottom of the page when body content is too short - onload and on resize reaply</p>
		<a href="https://gist.githubusercontent.com/GlupiJas/f246c522b63adb41474e/raw/js-footerBottom.js">gist raw jQuery plugin: js-footerBottom.js</a>
	</footer>

<!-- jQuery CDA, UI CDA and plugins -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<!-- <script src="js/plugins.js"></script> CREATE -->
<script>

//jQuery plugin Templet
(function($){
	$.myPlugin = function(options) { //or use "$.fn.myPlugin" or "$.myPlugin" to call it globaly directly from $.myPlugin();
	  	var defaults = {
	  		mainWrapper: "#tabWraper",
	  		target: "div.box", // select all div.box
	  		buttons: "ul li a", // select all buttons
	  		buttonAttrName: "target", // attr that contin div tab box id np #box1
	  		activeClassName: "tabActive", //class to added to active button
	  		delayAfterClick: 0, // wait this time before fade
	  		fadeSpeed: 0, // fade with this speed
	  		showDefault: 1, // tab number be activated when loaded / false - no tab on load
	  		allowNone: false, // allow closing tabs when clicked seckound time on same button	 
	  		autoPlay: true, // autoplay tabs
	  		speedPlay: 3500, // time for col to fade
	  		onClickStopPlay: true, // [true|false] When tabs chenge onclick stop auto play
	  		resumePlayAfter: 3500, //[3000] after stoping wait this amount of time (3s) and start to play again
	  		onContentHoverPause: true, // When hover on content will stop playing
	  		contentOuterWraper: "#contentOuterWraper", // We might need it to get padding-bot to reaply on to the tab element when allowNone is set to true % (responsive on window resize) not needed for auto or fixed height
	  	};

	  	options = $.extend(defaults, options);

	  	function logic(){
	  		var objectClicked1;
	  		var objectClicked2;
	  		var objectClickTemp;
	  		var loadFirstTime = true;
	  		var interval;
	  		var curentTabIterator = 0;
	  		var resumeTimeout = "";
	  		var blockReshowingContentBox = true;
	  		var contentOuterWraperPaddingBottom = $(options.contentOuterWraper)[0].style.paddingBottom;
	  		var active_button_interval = "";

	  		if(options.showDefault !== false) curentTabIterator = options.showDefault;

  			function toogleClass(button, classname){
  				$(options.buttons).removeClass(classname);
  				button.toggleClass(classname);
  				// console.log(classname);
  				if(!state) button.toggleClass(classname);
  			}

  			function autoPlay(button, classname, box){ // return interval varible
  				if(options.autoPlay === true){
	  				interval = setInterval(function(){
		  				var tabsCount = $(options.buttons).length; // count numbers of all tabs
		  				objectClickTemp = objectClicked1 = objectClicked1 = $(options.buttons).eq(curentTabIterator).attr(options.buttonAttrName);
	  					if(curentTabIterator > tabsCount - 1){ //reset to 0 if over the number of all tabs
	  						curentTabIterator = 0;
	  					}

	  					if(state === false && options.allowNone === true){
	  						// it will stop closed tab to show on Autoplay or Resume
	  						blockReshowingContentBox = true;
	  					}else{
	  						// allow to display box;
	  						blockReshowingContentBox = false;
	  					}

  						$(options.target).hide(0); // hide all content box
  						active_button_interval =  $(options.buttons).eq(curentTabIterator); //get curent tab number
  						toogleClass(active_button_interval, options.activeClassName); // ad remove css class

  						if(blockReshowingContentBox !== false){
  							state = false;
  						}else{
  							$(options.target).eq(curentTabIterator).delay(options.delayAfterClick).fadeIn(options.fadeSpeed);
  							state = true;
  						}
  						

	  					// console.log(curentTabIterator);

	  					curentTabIterator++;
	  				}, options.speedPlay);
  					return interval;
  				}
  				
  			}

  			interator = autoPlay();

  			function stopPlay(){
  				clearTimeout(resumeTimeout);
  				clearInterval(interval);
  				// console.log("stop");
  			}

  			function resumePlayAfter(){
				resumeTimeout = setTimeout(function(){
					stopPlay();
					interator = autoPlay();
					info = "function start";
					// console.log(info);	
				}, options.resumePlayAfter);
				// console.log("function resumed");
  			}


	  		$(options.target).hide(0); // hide all boxes
	  		if(options.showDefault !== false && loadFirstTime === true){ // run only once and and only if default tab is activated
	  			loadFirstTime = false; // change status
		  		var showDefault = $(options.target).eq(options.showDefault-1); // select default div to show
		  		showDefault.fadeIn(options.fadeSpeed); //show default div with fadeInEffect
		  		var defaultButton = $(options.buttons).eq(options.showDefault-1);
		  		var startingAttr = $(options.buttons).eq(options.showDefault-1).attr(options.buttonAttrName); //select default tag name to show
		  	    var	objectClicked1 = startingAttr; // first selected and marked as clicked once button
		  		var state = true; // change status
		  		toogleClass(defaultButton, options.activeClassName); // reamove from all and add class to curent button
	  		}else{
	  			var state = false; // change status
	  			stopPlay();
	  		}

	  		
// if(objectClicked1 == objectClicked2){ console.log(objectClicked1+"==="+objectClicked2 +" and state is: " + state); }else{ console.log(objectClicked1+"!=="+objectClicked2 +" and state is: " + state); }

	  		$(options.buttons).on('click mouseenter', function(){ // ON CLICK OR MOUSE ENTER
	  			if(options.onClickStopPlay){
	  				stopPlay(); // onclick stop auto play;	
	  				if(options.resumeAfter !== false && options.onContentHoverPause !== true){
	  					resumePlayAfter(); // onclick stop auto play;
	  				} 
	  			}
	  			
	  			var button = $(this); //clicked element
	  			curentTabIterator = $(options.buttons).index(this) + 1; //onclick reset interval iterator position
	  			if(objectClicked1 != undefined){ objectClickTemp = objectClicked1 };
	  			$(options.target).hide(0); //hide div 
	  			var object = $(this).attr(options.buttonAttrName);
	  			if(objectClicked1 === undefined){
	  				objectClicked1 = $(this).attr(options.buttonAttrName);
	  				objectClicked2 = $(this).attr(options.buttonAttrName);
	  			}else if(objectClickTemp === undefined){
	  				objectClicked1 = $(this).attr(options.buttonAttrName);
	  				objectClicked2 = objectClicked1;
	  			}else{
	  				objectClicked1 = $(this).attr(options.buttonAttrName);
	  				objectClicked2 = objectClickTemp;
	  			}

	  			if(!options.allowNone){
	  				$(options.target).hide(0);
  					$(object).delay(options.delayAfterClick).fadeIn(options.fadeSpeed);
  					toogleClass(button, options.activeClassName);
				    state = true;
  				}else{
  					if(!state && objectClicked1 === objectClicked2){
  						$(options.target).hide(0);
  						$(object).delay(options.delayAfterClick).fadeIn(options.fadeSpeed);
  						state = true;
	  					toogleClass(button, options.activeClassName);
  					}else if(state && objectClicked1 === objectClicked2){
  						$(object).delay(options.delayAfterClick).fadeOut(options.fadeSpeed);
  						state = false;
  						toogleClass(button, options.activeClassName);
  					}else if(state && objectClicked1 !== objectClicked2){
  						$(options.target).hide(0);
  						$(object).delay(options.delayAfterClick).fadeIn(options.fadeSpeed);
  						state = true;
  						toogleClass(button, options.activeClassName);
  					}else if(!state && objectClicked1 !== objectClicked2){
  						$(options.target).hide(0);
  						$(object).delay(options.delayAfterClick).fadeIn(options.fadeSpeed);
  						state = true;
  						toogleClass(button, options.activeClassName);
  					}
  				}
  				// function that gets contentouterwraper paddig and removes it if state === false (content box is hidden)  				
  				function onOffStateRemovePaddingFromContentOuterWraper(){
  					if(state === true){
  						$(options.contentOuterWraper).css('padding-bottom', contentOuterWraperPaddingBottom);
  					}else{  				
		  				// console.log(contentOuterWraperPaddingBottom);
		  				$(options.contentOuterWraper).css('padding-bottom', '0px');
  					}
  				};
  				onOffStateRemovePaddingFromContentOuterWraper();

// if(objectClicked1 == objectClicked2){ console.log(objectClicked1+"==="+objectClicked2 +" and state is: " + state); }else{ console.log(objectClicked1+"!=="+objectClicked2 +" and state is: " + state); }
  			
	  		});

			if(options.onContentHoverPause){
				var selection = "\""+options.target + ", " + options.buttons+ "\"";
				// console.log(selection);
				$(options.mainWrapper).hover(function(){
					stopPlay();
					// console.log("wrap stoped");
				}, function(){
					resumePlayAfter();
					// console.log("wrap resumed");
				});
			}
	  		//... code goes here
	  	}

		//DEFINE WHEN TO RUN FUNCTION
		// $(window).on('load resize', function () {
		// 	logic();
		// });

		jQuery(document).ready(function($) {
			logic();
		});
		// RETURN OBJECT FOR CHAINING
	    // return this.each(function() {
	    //   this.checked = true;
	    // });

		// return this;
	};
})(jQuery);


// USE EXAMPLE
var options = {
	  		mainWrapper: "#tabWraper",
	  		target: "div.box", // select all div.box
	  		buttons: "ul li a", // select all buttons
	  		buttonAttrName: "target", // attr that contin div tab box id np #box1
	  		activeClassName: "tabActive", //class to added to active button
	  		delayAfterClick: 0, // wait this time before fade
	  		fadeSpeed: 0, // fade with this speed
	  		showDefault: 1, // tab number be activated when loaded / false - no tab on load
	  		allowNone: true, // allow closing tabs when clicked seckound time on same button	 
	  		autoPlay: false, // autoplay tabs
	  		speedPlay: 3500, // time for col to fade
	  		onClickStopPlay: true, // [true|false] When tabs chenge onclick stop auto play
	  		resumePlayAfter: 3500, //[3000] after stoping wait this amount of time (3s) and start to play again
	  		onContentHoverPause: true, // When hover on content will stop playing
	  		contentOuterWraper: "#contentOuterWraper", //We need it to get padding-bot % (responsive on window resize) not needed for auto or fixed height
}

$.myPlugin(options); // or run plugin with default settings like so: $.myPlugin(); but then remember to keep with the html and css structure as in the demo

// HTML EXAMPLE
// <li><a target="#box1"> - click - </a></li>
// <div class="box" id="box1">box1</div>

</script>
</body>

</html>
