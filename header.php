<?php
  $base_url = 'http://monkey-coder.com/framework/';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
		
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
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
		
  </head>
  <body>
	
    <div id="page-wrap">
		
      <div id="header">
        <a href="<?php echo $base_url; ?>"><img src="<?php echo $base_url; ?>images/trans-logo.png" /></a>
      </div>
			
      <div id="navigation">
			
        <ul id="nav-left">
          <li><a href="<?php echo $base_url; ?>#">Left Link 1</a></li>
          <li><a href="<?php echo $base_url; ?>#">Left Link 2</a></li>
          <li><a href="<?php echo $base_url; ?>#">Left Link 3</a></li>
          <li><a href="<?php echo $base_url; ?>#">Left Link 4</a></li>
        </ul>
				
        <ul id="nav-right">
          <li><a href="<?php echo $base_url; ?>#">Right Link 1</a></li>
          <li><a href="<?php echo $base_url; ?>#">Right Link 2</a></li>
        </ul>
				
        <div class="clear"></div>
				
      </div>
