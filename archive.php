<?php
	header('Location: http://sermons.sabbathfellowshiponline.org');
	exit();
?>

<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">

		<title>Audio Archive</title>

		<link href="styles/main_styles.css" rel="stylesheet" type="text/css">
		<link href="styles/main_nav.css" rel="stylesheet" type="text/css">

		<meta name="description" content="Making disciples with the power and love of a first century faith">
		<meta name="keywords" content="Messianic, Sabbath, Yeshua, Yehovah, Holy Days, lunar calendar, biblical calendar, Jewish festivals, Passover, Sukkot, Sabbath Fellowship, Jewish Christian, Torah, Tenach, Torah scroll, Brit Chadashah, Rabbi, Messiah, Sermons, Audio, Recording, Archive">
		<meta name="author" content="Micah Gilbertson">

		<style type="text/css">
			#audio  {
				list-style: none;
				clear: both;
				float: left;
				padding: 0px;
			}
			#audio li {
				border-color: #000000;
				border-top-width: thin;
				border-top-style: solid;
				padding-bottom: 8px;
				padding-top: 8px;
				padding-left: 0px;
			}
			.audioName {
				font-weight: bold;
				font-family: Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", serif;
				text-align: left;
			}
		</style>
	</head>

	<body>
		<div id="wrapper">
  			<header></header>
			<nav><div class="mainNav">
				<ul>
 					<li><a href="index.shtml">Home</a></li>
 					<li class="tsub"><a class="subNav" href="about.html">About</a>
  						<ul>
   							<li><a href="faq.html">F. A. Q</a></li>
   							<li> </li>
   							<li><a href="core_values.html">Core Values</a></li>
   							<li><a href="we_believe.html">We Believe</a></li>
   							<li class="slast"><a href="constitution.html">Constitution</a></li>
  						</ul>
 					</li>
 					<li class="tsub"><a class="subNav" href="visitors.html">Visitors</a>
  						<ul>
  	 						<li><a href="welcome.html">Welcome</a></li>
   							<li class="slast"><a href="general_info.html">General Information</a></li>
  						</ul>
 					</li>
 					<li><a href="live.html">Live</a></li>
 					<li><a href="http://blog.sabbathfellowshiponline.org" target="_blank">Blog</a></li>
 					<li class="tsub"><a class="subNav" href="events.html">Events</a>
  						<ul>
   							<li><a href="appointed_times.html">Appointed Times</a></li>
   							<li><a href="march_of_remembrance.html">March of Remembrance</a></li>
   							<li class="slast"><a href="walk_for_life.html">Walk for Life</a></li>
  						</ul>
 					</li>
 					<li><a href="other.html">Other</a></li>
 					<li><a href="contact.html">Contact</a></li>
				</ul>
			</div></nav>

    		<div id="content">
    			<h2>Audio Archive</h2>
    			<p><strong>ATTENTION:</strong> The newest audio sermons can be located at the bottom of the <a href="archive.php">Archive page</a>. We are working to correct the problem.</p>
    			<p>The download link will save a zip file that you will have to unzip to use.</p>

    			 <ul id="audio">
        			<?php
						$mp3 = scandir("./audio/mp3/");
						$reversed = rsort($mp3);

						foreach($mp3 as $value){
							if($value != "." && $value != ".." && $value != ".DS_Store" && $value != "_notes"){
							$RemoveExt = preg_replace("/\.[^$]*/","",$value);
							$removeUnderscore = str_replace("_", " ", $RemoveExt);
							$title = str_replace("-", "/", $removeUnderscore);

						print "<li>
									<h3 class='audioName'>{$title}</h3>
										<audio controls>
											<source src='./audio/mp3/{$value}' type='audio/mp3'></source>
											<source src='./audio/ogg/{$RemoveExt}.ogg'></source>
										</audio>
									<br /><br />
									<a href='.audio/zip/{$RemoveExt}.zip'>Download</a>
								</li>";
							}
						}
					?>
  				</ul>
  			</div>

  			<footer>
    			<ul>
      				<li><a href="index.shtml">Home</a></li>
      				<li><a href="about.html">About</a></li>
      				<li><a href="visitors.html">Visitors</a></li>
      				<li><a href="live.html">Live</a></li>
      				<li><a href="audio.php">Audio</a></li>
      				<li><a href="contact.html">Contact</a></li>
    			</ul>
  			</footer>
		</div>

		<!-- Google analytics -->
		<script>
  			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  					m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  				})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  				ga('create', 'UA-48753604-1', 'sabbathfellowshiponline.org');
  				ga('send', 'pageview');
		</script>
	</body>
</html>
