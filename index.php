<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="minimal-ui,width=device-width,user-scalable=no" />
    <title>Jordan Singer</title>
    <meta name="description" content="I build my ideas." />
    <meta name="robots" content="index, follow" />
    <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-20832881-8', 'auto');
	  ga('send', 'pageview');

	</script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
	<style type="text/css">
		* {
			margin: 0;
			padding: 0;
		}
		html, body {
			width: 100%;
			height: 100%;
			font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';
		}
		#intro {
			position: relative;
			width: 100%;
			height: 100%;
			display: table;
			text-align: center;
			overflow: hidden;
			background: #2a2a2a;
		}
		#intro .word {
			font-size: 48px;
			font-weight: 700;
			color: #fff;
			display: table-cell;
		    vertical-align: middle;
		    cursor: default;
		}
		#main {
			display: none;
			padding: 64px;
		}
		ul {
			width: auto;
			margin: 0 auto;
			list-style: none;
		}
		ul li {
			font-size: 24px;
			line-height: 64px;
			font-weight: 500;
			color: #000;
		}
		ul li.title {
			font-weight: 700;
		}
		ul li a {
			color: rgba(0, 0, 0, 0.64);
			font-size: 20px;
			text-decoration: none;
		}
		ul li a:hover {
			text-decoration: underline;
		}
		@media screen and (max-width: 400px) {
			#intro .word {
				font-size: 32px;
			}
			#main {
				padding: 48px;
			}
		}
	</style>
</head>
<body>
	<div id="intro" class="animated">
		<div class="word animated"></div>
	</div>

	<div id="main" class="animated">
		<ul>
			<li class="title">I build my ideas.</li>
			<li><a href="http://onlyhandle.com/jordan">[jordan]</a></li>
			<br>
			<li><a href="http://represent.io">Represent</a></li>
			<li><a href="https://wonder-bot.com">Wonder</a></li>
			<li><a href="https://askplaybook.com">Playbook</a></li>
			<li><a href="https://balloon.io">Balloon</a></li>
			<li><a href="https://botlytics.co">Botlytics</a></li>
			<li><a href="https://thewdaily.com">The W</a></li>
			<li><a href="https://buck.io">Buck</a></li>
			<li><a href="https://taste-kit.com">TasteKit</a></li>
			<li><a href="http://startconvoy.com">Convoy</a></li>
			<li><a href="http://overboard.me">Overboard</a></li>
			<li><a href="https://trymask.com">Mask</a></li>
			<li><a href="http://onlyhandle.com">Handle</a></li>
			<li><a href="https://github.com/jordansinger/hook">Hook</a></li>
			<li><a href="http://tryoutreach.com">Outreach</a></li>
			<li><a href="http://realmoji.com">Realmoji</a></li>
			<li><a href="https://haggleio.herokuapp.com">Haggle</a></li>
			<li><a href="http://yohook.herokuapp.com">YoHook</a></li>
			<li><a href="http://whistlapp.com">Whistl</a></li>
			<li><a href="http://shipp.herokuapp.com">Shipp</a></li>
		</ul>
	</div>

	<script type="text/javascript">
		var words = "I build my ideas.";
		words = words.split(" ");
		var word_element = $("#intro .word");
		var projects = [
			"Represent",
			"Wonder",
			"Playbook",
			"Balloon",
			"Botlytics",
			"The W",
			"Buck",
			"TasteKit",
			"Convoy",
			"Overboard",
			"Mask",
			"Handle",
			"Hook",
			"Outreach",
			"Realmoji",
			"Haggle",
			"YoHook",
			"Whistl",
			"Shipp"
		];

		function show_projects(show) {
			if(show) {
				setTimeout(function(){
					$.each(projects, function(i, word) {
						setTimeout(function(){
						  word_element.text(word);
						  show_main(projects.length - 1 == i);
						}, (350 * i) / 2);
					});
				}, 1000);
			}
		}

		function show_main(show) {
			if(show) {
				setTimeout(function(){
					$("#intro").addClass("fadeOut").hide();
					$("#main").show().addClass("fadeIn");
				}, 1000);
			}
		}

		$(document).ready(function() {
			$.each(words, function(i, word) {
				setTimeout(function(){
				  word_element.text(word);
				  show_projects(words.length - 1 == i);
				}, 350 * i);
			});
		});
	</script>
</body>
</html>