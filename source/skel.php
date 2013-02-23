<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title><?php echo $title ?></title>
	
	<meta name="author" content="Togald Nilsson">
	<meta name="robots" content="noindex, nofollow">
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	
	<link rel="stylesheet" href="<?php echo $URL ?>style.css" type="text/css">
	<link rel="shortcut icon" href="<?php echo $URL ?>img/favicon.ico" type="image/gif">
	<script type="text/javascript">
		function printMail() {
			var address = "togald.nilsson";
			var domain = "gmail";
			var suffix = "com";
			document.getElementById("authorEmail").href = "mailto:" + address + "@" + domain + "." + suffix;
			document.getElementById("authorEmail").innerHTML = address + "@" + domain + "." + suffix;
			visible = 0;
		}
		function show(x) {
			document.getElementById(x).style.visibility = "visible";
		}
		function hide(x) {
			document.getElementById(x).style.visibility = "hidden";
		}
		function toggle(x) {
			if (visible == 0) {
				document.getElementById(x).className = "expanded";
				visible = 1;
			}
			else {
				document.getElementById(x).className = "";
				visible = 0;
			}
		}
	</script>
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
</head>
<body onload="printMail()">
	<div id="bgcolor"></div>
	<header>
		<div id="hgroup">
			<h1><a href="" title="Klicka för att återvända till startsidan">Vänsterliberalerna</a></h1>
			<h2>Nya tider ger ny politik</h2>
			<span id="navbutton" onclick="toggle('nav')"> ≡ </span>
			<nav id="nav">
				<ul>
					<li><a href="<?php echo $URL ?>">Hem</a>
					<li><a href="<?php echo $URL ?>stilmall/">Stilmall</a>
					<li><a href="">Politik</a>
						<ul>
							<li><a href="">Värdegrund</a>
							<li><a href="">VL på 5 minuter</a>
							<li><a href="">Politiska frågor</a>
						</ul>
					<li><a href="">Om partiet</a>
					<li><a href="">Styrelsen</a>
					<li><a href="">Press</a>
				</ul>
			</nav>
		</div>
		<object data="<?php echo $URL ?>img/icon.svg" type="image/svg+xml">
			<img src="<?php echo $URL ?>img/icon.png" height="96" width="96" alt="Vänsterliberalernas logotyp">
		</object>
	</header>
	<div id="content">
		<?php echo $content ?>
	</div>
	<footer>
		<p>Webbansvarig: Togald Nilsson, <a href="" id="authorEmail">Togald Nilsson</a><br>
		Källkoden till sidan distribueras under <a href="http://sam.zoy.org/wtfpl/">WTFPL-licensen</a>, och finns på <a href="https://github.com/MFserver/vansterliberalerna-hemsida">GitHub</a> för nedladdning. Copyright är för mesar. </p>
	</footer>
</body>
</html>