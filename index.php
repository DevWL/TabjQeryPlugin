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
/*		section:after, section:before{
			display: block;
			content: " ";
			height: 0px;
			font-size: 0px;
			clear: both;
		}*/

		footer{
		    position: absolute;
		    left: 0;
		    bottom: 0;
		    height: 100px;
		    width: 100%;
		    background-color: gray;
		}
		ul{
			width: 100%;
		}

		li{
			float: left;
			cursor: pointer;
			width: 16.665%;
		}
		li a {
			box-sizing: border-box;
			display: block;
			width: 100%;
			height: 100px;
			float: left;
			text-align: center;
			padding: 30px;
			border: 1px solid rgba(0,0,0, 0.1);
		}
		.box{
			box-sizing: border-box;
			min-height: 400px;
			width: 100%;
			background-color: gray;
			color: white;
			padding: 20px;
			float: left;
			display: none;
		}
		.tabActive{
			background-color: gray;
			color: white;
			border-bottom: gray 1px solid;
		}

	</style>

</head>

<body>
	<div class="content">
		<header>
			<nav>
				<ul>
					<li><a  class="button active" target="#box1"> - click - </a></li>
					<li><a target="#box2"> - click - </a></li>
					<li><a target="#box3"> - click - </a></li>
					<li><a target="#box4"> - click - </a></li>
					<li><a target="#box5"> - click - </a></li>
					<li><a target="#box6"> - click - </a></li>
				</ul>
			</nav>
		</header>
		
		<section>
			<div class="box" id="box1">box1</div>
			<div class="box" id="box2">box2</div>
			<div class="box" id="box3">box3</div>
			<div class="box" id="box4">box4</div>
			<div class="box" id="box5">box5</div>
			<div class="box" id="box6">box6</div>
		</section>
	</div>
	<footer>
		<p>Copyright 2009 Your name</p>
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
	  		target: "div.box", // select all div.box
	  		buttonAttrName: "target", // attr that contin div tab box id np #box1
	  		buttons: "ul li a", // select all buttons
	  		activeClassName: "tabActive", //class to added to active button
	  		delayAfterClick: 0, // wait this time before fade
	  		fadeSpeed: 500, // fade with this speed
	  		showDefault: 2, // tab number be activated when loaded / false - no tab on load
	  		allowNone: true, // allow closing tabs when clicked seckound time on same button	 
	  		autoPlay: true, // autoplay tabs
	  		speedPlay: 3500, // time for col to fade
	  		onClickStopPlay: true, // [true|false] When tabs chenge onclick stop auto play
	  		resumePlayAfter: 5000, //[3000] after stoping wait this amount of time (3s) and start to play again

	  	};

	  	options = $.extend(defaults, options);

	  	function logic(){
	  		var objectClicked1;
	  		var objectClicked2;
	  		var objectClickTemp;
	  		var loadFirstTime = true;
	  		var interval;
	  		var curentTabIterator = 0;
	  		if(options.showDefault !== false) curentTabIterator = options.showDefault;

  			function toogleClass(button, classname){
  				$(options.buttons).removeClass(classname);
  				button.toggleClass(classname);
  				console.log(classname);
  				if(!state) button.toggleClass(classname);
  			}

  			function autoPlay(button, classname, box){ // return interval varible
  				if(options.autoPlay === true){
	  				interval = setInterval(function(){
		  				var tabsCount = $(options.buttons).length; // count numbers of all tabs

	  					if(curentTabIterator > tabsCount - 1){ //reset to 0 if over the number of all tabs
	  						curentTabIterator = 0;
	  					}

  						$(options.target).hide(0);
  						var active_button_interval =  $(options.buttons).eq(curentTabIterator);
  						toogleClass(active_button_interval, options.activeClassName);
  						$(options.target).eq(curentTabIterator).delay(options.delayAfterClick).fadeIn(options.fadeSpeed);
  						state = true;

	  					console.log(curentTabIterator);

	  					curentTabIterator++;
	  				}, options.speedPlay);
  					return interval;
  				}
  				
  			}

  			interator = autoPlay();

  			function stopPlay(){
  				clearInterval(interval);
  			}

  			function resumePlayAfter(){
				setTimeout(function(){
					stopPlay();
					interator = autoPlay();
				}, options.resumePlayAfter);
  			}


	  		$(options.target).hide(0); //hide all boxes
	  		if(options.showDefault !== false && loadFirstTime === true){ //run only once and and only if default tab is activated
	  			loadFirstTime = false; // change status
		  		var showDefault = $(options.target).eq(options.showDefault-1); //select default div to show
		  		showDefault.fadeIn(options.fadeSpeed); //show default div with fadeInEffect
		  		var defaultButton = $(options.buttons).eq(options.showDefault-1);
		  		var startingAttr = $(options.buttons).eq(options.showDefault-1).attr(options.buttonAttrName); //select default tag name to show
		  	    var	objectClicked1 = startingAttr; // first selected and marked as clicked once button
		  		var state = true; // change status
		  		toogleClass(defaultButton, options.activeClassName);
	  		}else{
	  			var state = false; // change status
	  		}

	  		
// if(objectClicked1 == objectClicked2){ console.log(objectClicked1+"==="+objectClicked2 +" and state is: " + state); }else{ console.log(objectClicked1+"!=="+objectClicked2 +" and state is: " + state); }

	  		$(options.buttons).on('click mouseenter', function(){
	  			if(options.onClickStopPlay){
	  				stopPlay(); // onclick stop auto play;	
	  				if(options.resumeAfter !== false) resumePlayAfter(); // onclick stop auto play;
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
  					$(object).delay(options.delayAfterClick).fadeIn(options.fadeSpeed);
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

// if(objectClicked1 == objectClicked2){ console.log(objectClicked1+"==="+objectClicked2 +" and state is: " + state); }else{ console.log(objectClicked1+"!=="+objectClicked2 +" and state is: " + state); }
  			
	  		});
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
	  		target: "div.box", // select all div.box
	  		buttonAttrName: "target", // attr that contin div tab box id np #box1
	  		buttons: "ul li a", // select all buttons
	  		activeClassName: "tabActive", //class to added to active button
	  		delayAfterClick: 0, // wait this time before fade
	  		fadeSpeed: 100, // fade with this speed
	  		showDefault: 2, // tab number be activated when loaded / false - no tab on load
	  		allowNone: true, // allow closing tabs when clicked seckound time on same button	 
	  		autoPlay: true, // autoplay tabs
	  		speedPlay: 4500, // time for col to fade
	  		onClickStopPlay: true, // [true|false] When tabs chenge onclick stop auto play
	  		resumePlayAfter: 8000, //[3000] after stoping wait this amount of time (3s) and start to play again
}

$.myPlugin(options); // or run plugin with default settings like so: $.myPlugin(options);

// HTML EXAMPLE
// <li><a target="#box1"> - click - </a></li>
// <div class="box" id="box1">box1</div>

</script>
</body>

</html>
