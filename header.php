<?php
  $base_url = 'http://monkey-coder.com/';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
		
    <meta charset="utf-8">
    <meta name="description" content="A simple html framework">
    <meta name="author" content="Thomas Vollath">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		
    <title>Monkey Coder</title>
		
    <link rel="shortcut icon" href="<?php echo $base_url; ?>images/favicon.ico">
		
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $base_url; ?>css/style.php">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $base_url; ?>js/syntaxhighlighter/styles/shCore.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $base_url; ?>js/syntaxhighlighter/styles/shThemeEclipse.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $base_url; ?>js/fancybox/jquery.fancybox-1.3.4.css">

    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.6.1.min.js"><\/script>')</script>
    <script type="text/javascript" src="<?php echo $base_url; ?>js/syntaxhighlighter/scripts/shCore.js"></script>
    <script type="text/javascript" src="<?php echo $base_url; ?>js/syntaxhighlighter/scripts/shAutoloader.js"></script>
    <script type="text/javascript" src="<?php echo $base_url; ?>js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("a#single_image").fancybox();
        $("a#inline").fancybox({
          'hideOnContentClick': true
        });
        $("a.group").fancybox({
          'transitionIn'	:	'elastic',
          'transitionOut'	:	'elastic',
          'speedIn'		:	600, 
          'speedOut'		:	200, 
          'overlayShow'	:	false
        });
      });
    </script>
    <!-- Google Analytics -->
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-15918863-10']);
      _gaq.push(['_setDomainName', 'monkey-coder.com']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
    <!-- end Google Analytics -->
    
  </head>
  <body>
	
    <div id="page-wrap">
		
      <div id="header">
        <a href="<?php echo $base_url; ?>"><img src="<?php echo $base_url; ?>images/logo.png" /></a>
      </div>
			
      <div id="navigation">
			
        <ul id="nav-left">
          <li><a href="<?php echo $base_url; ?>">Home</a></li>
          <li><a href="<?php echo $base_url; ?>install.php">Install</a></li>
        </ul>
				
        <ul id="nav-right">
          <li><a href="<?php echo $base_url; ?>changelog.php">Change Log</a></li>
          <li><a href="https://github.com/tomthorgal/simple-framework">Find me on github</a></li>
        </ul>
				
        <div class="clear"></div>
				
      </div>
