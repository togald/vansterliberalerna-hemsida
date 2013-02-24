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
				<?php /* 
					Detta är menyn, den kan behöva ändras om mappstrukturen ändras. Ett menyavsnitt ska se ut så här:
					<li><a href"<?php echo $URL ?>sökväg/till/sidan/">Titel</a>
					
					För copypaste-fan: 
					<li><a href="<?php echo $URL ?>"></a>
					
					För att skapa en undermeny, lägg bara till <ul> i början av undermenyn och sedan </ul> när den ska vara slut. Exempel: 
					<li><a href="">Menyelement med submeny</a>
						<ul>
							<li><a href="">Undermeny</a>
							<li><a href="">Mer undermeny</a>
							<li><a href="">Ännu mer undermeny</a>
						</ul>
					<li><a href="">Nästa element</a>
				*/ ?>
				<ul>
					<li><a href="<?php echo $URL ?>">Hem</a>
					<li><a href="<?php echo $URL ?>stilmall/">Stilmall</a>
					<li><a href="<?php echo $URL ?>manual">Manual</a>
						<ul>
							<li><a href="<?php echo $URL ?>manual/kataloger">Kataloger</a>
							<li><a href="<?php echo $URL ?>manual/arbetsflöde/">Arbetsflöde</a>
						</ul>
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