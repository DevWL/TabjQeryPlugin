//jQuery plugin Templet
(function($){
	$.tabjQeryPlugin = function(options) { //or use "$.fn.myPlugin" or "$.myPlugin" to call it globaly directly from $.myPlugin();
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
	  		pluginActionOn: 'click mouseenter', // interact with buttons on ... [click | mouseenter | ...]
	  	};

	  	options = $.extend(defaults, options);

	  	function logic(){

	  		var objectClicked1; // holds element id of user curent interaction
	  		var objectClicked2; // holds element id of user previous interaction
	  		var objectClickTemp; // holds tempolary value that is placed in 

	  		var loadFirstTime = true; // placeholder for first time load check objectClicked2

	  		var interval; // placeholder for interval to play tabs every x secounds
	  		var curentTabIterator = 0; // placeholder for curent tab number
	  		var resumeTimeout = ""; // placeholder for timeout in witch function play() will be resumed

	  		var blockReshowingContentBox = true; // dont refresh content box if true

	  		var contentOuterWraperPaddingBottom = $(options.contentOuterWraper)[0].style.paddingBottom; // get padding-bottom value in % not in px
	  		var active_button_interval = ""; // placeholder for number of active button

	  		if(options.showDefault !== false) curentTabIterator = options.showDefault;

  			function toogleClass(button, classname){

  				$(options.buttons).removeClass(classname);
  				button.toggleClass(classname);

  				if(!state) button.toggleClass(classname);

  			}

  			function autoPlay(button, classname, box){ // return interval varible

  				if(options.autoPlay === true){

	  				interval = setInterval(function(){

		  				var tabsCount = $(options.buttons).length; // count numbers of all tabs
		  				objectClickTemp = objectClicked1 = objectClicked1 = $(options.buttons).eq(curentTabIterator).attr(options.buttonAttrName);
	  					
	  					if(curentTabIterator > tabsCount - 1){ // reset to 0 if over the number of all tabs

	  						curentTabIterator = 0;
	  					}

	  					if(state === false && options.allowNone === true){ // it will stop closed tab to show on Autoplay or Resume
	  						
	  						blockReshowingContentBox = true;

	  					}else{ // allow to display box;
	  						
	  						blockReshowingContentBox = false;
	  					}

  						$(options.target).hide(0); // hide all content box
  						active_button_interval =  $(options.buttons).eq(curentTabIterator); // get curent tab number
  						toogleClass(active_button_interval, options.activeClassName); // ad remove css class

  						if(blockReshowingContentBox !== false){

  							state = false;
  						
  						}else{

  							$(options.target).eq(curentTabIterator).delay(options.delayAfterClick).fadeIn(options.fadeSpeed);
  							state = true;
  						
  						}

	  					curentTabIterator++;
	  				
	  				}, options.speedPlay);
  					
  					return interval;
  				}
  				
  			}

  			interator = autoPlay();

  			function stopPlay(){

  				clearTimeout(resumeTimeout);
  				clearInterval(interval);

  			}

  			function resumePlayAfter(){

				resumeTimeout = setTimeout(function(){
					stopPlay();
					interator = autoPlay();
					info = "function start";
				}, options.resumePlayAfter);

  			}

	  		$(options.target).hide(0); // hide all boxes

	  		if(options.showDefault !== false && loadFirstTime === true){ // run only once and and only if default tab is activated

	  			loadFirstTime = false; // change status
		  		var showDefault = $(options.target).eq(options.showDefault-1); // select default div to show
		  		showDefault.fadeIn(options.fadeSpeed); // show default div with fadeInEffect
		  		var defaultButton = $(options.buttons).eq(options.showDefault-1);
		  		var startingAttr = $(options.buttons).eq(options.showDefault-1).attr(options.buttonAttrName); //select default tag name to show
		  	    var	objectClicked1 = startingAttr; // first selected and marked as clicked once button
		  		var state = true; // change status
		  		toogleClass(defaultButton, options.activeClassName); // reamove from all and add class to curent button

	  		}else{

	  			var state = false; // change status
	  			stopPlay();

	  		}

	  		

	  		$(options.buttons).on(options.pluginActionOn, function(){ // ON CLICK OR MOUSE ENTER

	  			if(options.onClickStopPlay){

	  				stopPlay(); // onclick stop auto play;	

	  				if(options.resumeAfter !== false && options.onContentHoverPause !== true){

	  					resumePlayAfter(); // onclick stop auto play;

	  				} 

	  			}
	  			
	  			var button = $(this); // clicked element
	  			curentTabIterator = $(options.buttons).index(this) + 1; // onclick reset interval iterator position

	  			if(objectClicked1 != undefined){ objectClickTemp = objectClicked1 };

	  			$(options.target).hide(0); // hide div 
	  			var object = $(this).attr(options.buttonAttrName);

	  			if(objectClicked1 === undefined){ // if no object clicked

	  				objectClicked1 = $(this).attr(options.buttonAttrName); // set clisked button as curent active button
	  				objectClicked2 = $(this).attr(options.buttonAttrName); // set clisked button as curent active button

	  			}else if(objectClickTemp === undefined){ // if templary placeholder for clicked object is undefined

	  				objectClicked1 = $(this).attr(options.buttonAttrName);
	  				objectClicked2 = objectClicked1;

	  			}else{ // if non of the abowe assign corect values to objectClicked1 and objectClicked2 based on user interaction

	  				objectClicked1 = $(this).attr(options.buttonAttrName);
	  				objectClicked2 = objectClickTemp;

	  			}

	  			if(!options.allowNone){ // if settings don't allow for tab to be colsed (no tab open is allowed)

	  				$(options.target).hide(0);
  					$(object).delay(options.delayAfterClick).fadeIn(options.fadeSpeed);
  					toogleClass(button, options.activeClassName);
				    state = true;

  				}else{ // if tabs can be colsed (some tab must be open)

  					if(!state && objectClicked1 === objectClicked2){ // check if tab content is curently closed  (state === false) also check if user interact with same element for seckound time

  						$(options.target).hide(0);
  						$(object).delay(options.delayAfterClick).fadeIn(options.fadeSpeed);
  						state = true; // change state to open
	  					toogleClass(button, options.activeClassName); // add or remove class to clicked button

  					}else if(state && objectClicked1 === objectClicked2){ // check if tab content is curently open  (state === true) also check if user interact with same element for seckound time

  						$(object).delay(options.delayAfterClick).fadeOut(options.fadeSpeed);
  						state = false; // change state to closed
  						toogleClass(button, options.activeClassName);

  					}else if(state && objectClicked1 !== objectClicked2){ // ... do this is tab content is open and user clicked on different element

  						$(options.target).hide(0);
  						$(object).delay(options.delayAfterClick).fadeIn(options.fadeSpeed);
  						state = true;
  						toogleClass(button, options.activeClassName);

  					}else if(!state && objectClicked1 !== objectClicked2){ // ... do this is tab content is closed and user clicked on different element

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

		  				$(options.contentOuterWraper).css('padding-bottom', '0px');
  					
  					}
  				
  				};

  				onOffStateRemovePaddingFromContentOuterWraper();

  			
	  		});

			if(options.onContentHoverPause){

				var selection = "\""+options.target + ", " + options.buttons+ "\"";

				$(options.mainWrapper).hover(function(){

					stopPlay();

				}, function(){

					resumePlayAfter();

				});

			}

	  	}

		jQuery(document).ready(function($) {
			logic();
		});

	};

})(jQuery);