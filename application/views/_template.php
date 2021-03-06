<!DOCTYPE HTML>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>{pagetitle}</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div>
			<div class="logo">
				<a href="/">Zero Type</a>
			</div>
			<ul id="navigation">
				<li {activeWelcome}>
					<a href="/">Home</a>
				</li>
				<li {activeFeatures}>
					<a href="/features">Features</a>
				</li>
				<li {activeNews}>
					<a href="/news">News</a>
				</li>
				<li {activeAbout}>
					<a href="/about">About</a>
				</li>
				<li {activeContact}>
					<a href="/contact">Contact</a>
				</li>
			</ul>
		</div>
	</div>
    {content}
	<div id="footer">
		<div class="clearfix">
			<div id="connect">
				<a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a><a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus"></a><a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a><a href="http://www.freewebsitetemplates.com/misc/contact/" target="_blank" class="tumbler"></a>
			</div>
			<p>
				© 2023 Zerotype. All Rights Reserved.
			</p>
		</div>
	</div>
</body>
</html>