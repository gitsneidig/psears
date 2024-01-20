<!DOCTYPE html  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" dir="ltr">

<head>
	
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	
	<title>Contact: Contact Peter Sears</title>
		
	<!-- meta tags: -->
	<meta name="Author" content="author" />
	<meta name="Description" content="The online home of Oregon poet Peter Sears offers information about his writing and teaching, links to read his work, quotes and more. " />
	<meta name="Copyright" content="copyright" />
	<meta name="Robots" content="robots" />
	<meta name="Generator" content="generator" />
	<meta name="Keywords" content="Oregon poet, Peter Sears, Peter Sears poetry, Peter Sears writer, poetry by Peter Sears, Peter Sears poems, Green Diver, Tour, The Brink, Luge, Pacific MFA program" />
	
	<!-- optionals: -->
	<link rel="Shortcut Icon" href="favicon.ico" type="image/x-icon" />
 
 	<!-- css: -->
	<link rel="stylesheet" href="/css/reset.css" type="text/css" media="screen" />	
	<link rel="stylesheet" href="/css/text.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="/css/styles.css" type="text/css" media="screen" />

 	<!-- js -->
	<script type="text/javascript" src="/js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="/js/jquery-ui-1.8.custom.min.js"></script>
	<script type="text/javascript" src="/js/jquery.ufvalidator-1.0.4.js"></script>
	<script type="text/javascript" src="/js/jquery-custom.js"></script>
	<script type="text/javascript" src="/js/jquery-custom-contact.js"></script>
	
</head>

<body>
	
	
  <div id="headerb">

	
  </div>
	
<div id="container">

  <div id="header">
      <div id="header_fold">
    <h1>Peter Sears</h1>
	</div>
  </div>
    <div id="stage_wrapper">  
	<div id="navbar">
			<ul>
				<li><a href="index.html" title="Home">HOME</a></li>
				<li><a href="books.html" title="Books">BOOKS</a></li>
				<li><a href="links.html" title="Links">LINKS</a></li>
				<li><a href="teaching.html" title="Teaching">TEACHING</a></li>
				<li><a href="bio.html" title="Bio">BIO</a></li>
				<li class="selected"><a href="contact.html" title="Contact">CONTACT</a></li>
			</ul>
			<a href="https://www.facebook.com/groups/264442780725545" target="_blank"><img src="/images/1407137282_facebook.png" width="128" height="128" alt="Peter Sears Facebook" title="Peter Sears Facebook" style="float:right;" /></a>
			<div style="display:inline; float:right; text-align:left; width:110px; margin-right:1px; padding-left:6px; padding-top:3px; margin-top:0; padding-bottom:3px; color:#121b66; background-color:#ffffff;">
				<a href="https://www.facebook.com/groups/264442780725545" target="_blank" style="text-decoration:none; color:#121b66;">
					<strong>Visit and celebrate the poetry and life of Peter Sears, who passed away on July 20, 2017.</strong>
				</a>
			</div>
		</div>
  <div id="content_short">
  
  	<h2>Your message has been sent</h2>
  
  
	<img src="/images/sears1.jpg" width="200" height="238" alt="PeterSears.com" title="PeterSears.com" />
		<p>
	<?
	
		$headers = 'From: PeterSears.com <psears@petersears.com>' . "\r\n";
		
		$msg = "From: " . $fullname . "\r\n";
		$msg .= "Email: " . $emailaddress . "\r\n";
		$msg .= "Message: " . $message;
		
		$msg = wordwrap($msg,70);
	
		mail("peterhsears@comcast.net","A message from PeterSears.com", $msg, $headers); 
	
	?>
 	</p>
  </div>
    </div>
</div>

	
	
  <div id="footer">
	  <p>
		<a href="http://validator.w3.org/check?uri=referer"><img
			src="/images/valid-xhtml10.png"
			alt="Valid XHTML 1.0 Transitional" height="31" width="88" /></a>
	  </p>  
  </div>
  	
	
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	try {
	var pageTracker = _gat._getTracker("UA-16178884-1");
	pageTracker._trackPageview();
	} catch(err) {}</script>	
	
	
</body>
	
</html>