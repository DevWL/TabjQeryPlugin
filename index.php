<!DOCTYPE HTML>

<!-- FOLDER STRUCTURE 
	index.php
	 |->less[_]->css[_] // create your less file in less folder
	 |->js[_] // create your plugin js file
 -->

<html>

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
		<script src="js/less.js"></script>
		<link rel="stylesheet/less" type="text/css" href="src/css/less/compiled.less"/>
	<!-- X -->

	<style>
		body{
			font-family: 'Open Sans', sans-serif;
		}
	</style>

</head>

<body>

	<header>
		<nav>
			<ul>
				<li>Your menu</li>
			</ul>
		</nav>
	</header>
	
	<section>
	
		<article>
			<header>
				<h2>Article title</h2>
				<p>Posted on <time datetime="2009-09-04T16:31:24+02:00">September 4th 2009</time> by <a href="#">Writer</a> - <a href="#comments">6 comments</a></p>
			</header>
			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
		</article>
		
		<article>
			<header>
				<h2>Article title</h2>
				<p>Posted on <time datetime="2009-09-04T16:31:24+02:00">September 4th 2009</time> by <a href="#">Writer</a> - <a href="#comments">6 comments</a></p>
			</header>
			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
		</article>
		
	</section>

	<aside>
		<h2>About section</h2>
		<p>Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
	</aside>

	<footer>
		<p>Copyright 2009 Your name</p>
	</footer>

<!-- jQuery CDA, UI CDA and plugins -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<!-- <script src="js/plugins.js"></script> CREATE -->

</body>

</html>