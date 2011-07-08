<?php
  header('Content-type: text/css; charset: UTF-8');
  
  $head_foot_bg         = '#AF9F7B';
  
  $navigation_bg        = '#775E43';
  $navigation_fg        = '#F1F4F7';
  $navigation_fg_hover  = '#251C17';
  
  $body_bg              = '#F1F4F7';
  $body_a               = '#73895D';
  $body_a_hover         = '#CB842E';
  $section_borders      = '#AF9F7B';

  $head_foot_a          = '#FFFFFF';
  $head_foot_a_hover    = '#251C17';
  
  $base_url             = 'http://monkey-coder.com/framework/';
?>

/* Resets
-------------------------------------------------------------- */
@import url(reset.css);

/* Layout
-------------------------------------------------------------- */
#page-wrap {
  min-width: 1000px;
}
#header {
  background-color: <?php echo $head_foot_bg; ?>;
  padding: 20px;
  text-align: center;
}
#navigation {
  background-color: <?php echo $navigation_bg; ?>;
  border-top: 1px solid <?php echo $navigation_fg; ?>;
}
#content {
  margin: 0 10px 0 10px;
}
#footer {
  background-color: <?php echo $head_foot_bg; ?>;
  padding: 20px;
  text-align: center;
}
.clear {
  clear: both;
}

/* Global elements
-------------------------------------------------------------- */
body {
  background-color: <?php echo $body_bg; ?>;
  color: #000;
  font-family: Helvetica, Arial, "Nimbus Sans L", sans-serif;
  font-size: 16px;
}

/* Header elements
-------------------------------------------------------------- */

/** Header
-------------------------------------------------------------- */
#header h1 {
  font-size: 200%;
  font-style: italic;
  font-weight: bold;
}

/** Navigation
-------------------------------------------------------------- */
ul#nav-left {
  float: left;
  margin: 0 0 0 10px;
}
ul#nav-right {
  float: right;
  margin: 0 10px 0 0;
}
ul#nav-left li {
  float: left;
}
ul#nav-right li {
  float: right;
}
ul#nav-left li,
ul#nav-right li {
  border-bottom: 5px solid <?php echo $navigation_bg; ?>;
  display: inline;
  height: 30px;
}
ul#nav-left li a,
ul#nav-right li a {
  display: block;
  line-height: 30px;
  padding: 3px 15px 3px 15px;
}
ul#nav-left li:hover,
ul#nav-right li:hover {
  border-bottom: 5px solid <?php echo $navigation_fg_hover; ?>;
}

/* Footer elements
-------------------------------------------------------------- */
#footer p {
  font-size: 75%;
}

/* Content elements
-------------------------------------------------------------- */

/** Section elements
-------------------------------------------------------------- */
#content .section {
  border-bottom: 5px solid <?php echo $section_borders; ?>;
  margin: 0 20px 0 20px;
  padding: 0 0 30px 0;
}
#content .section:last-child {
  border-bottom: none;
}

/** Link elements
-------------------------------------------------------------- */
a,
a:visited {
  color: <?php echo $body_a; ?>;
  text-decoration: none;
}
a:hover {
  color: <?php echo $body_a_hover; ?>;
  text-decoration: none;
}
#header a,
#navigation a,
#header a:visited,
#navigation a:visited,
#footer a,
#footer a:visited {
  color: <?php echo $head_foot_a; ?>;
}
#header a:hover,
#navigation a:hover,
#footer a:hover {
  color: <?php echo $head_foot_a_hover; ?>;
}

/** List elements
-------------------------------------------------------------- */
#content ul {
  list-style: disc inside;
  margin: 20px 0 0 0;
}
#content li {
  margin: 0 0 0 10px;
  padding: 10px 0 0 0;
}
#content li:first-child {
  padding: 0;
}

/** Header (h2, h3, h4, h5, h6) elements
-------------------------------------------------------------- */
#content h3 {
  font-size: 150%;
  font-weight: bold;
  margin: 20px 0 0 0;
  padding: 10px;
  background-color: <?php echo $head_foot_bg; ?>;
  color: <?php echo $navigation_fg; ?>;
}
#content h4 {
  background: url('/images/bullet.png') no-repeat scroll 0 100%;
  font-size: 125%;
  font-weight: bold;
  padding: 30px 0 0 20px;
}

/** Paragraph elements
-------------------------------------------------------------- */
#content p {
  margin: 20px 0 0 0;
}

/** Image elements
-------------------------------------------------------------- */
#content img {
  border: 0;
	padding-top: 20px;
}

/** Syntaxhighlighter
-------------------------------------------------------------- */
#content .syntaxhighlighter {
  border: 2px solid <?php echo $head_foot_bg; ?>;
  margin: 20px 0 0 0 !important;
  padding: 3px !important;
  width: 99% !important;
}
