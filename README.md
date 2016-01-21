# TabjQeryPlugin
Fully fetured jQuery Tab Plugin. (v1.3 Beta)

Demo available at : http://codepen.io/GlupiJas/pen/GoyEBg

```
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
```
