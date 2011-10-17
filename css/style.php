<?php
  /* This header declaration is very important. It is needed or the file
   * won't be rendered as an actual css file to the browser.
   * Of course you can make a SASS or LESS file out of this too, but I don't
   * know a lot of developers using SASS or LESS yet. */
  header('Content-type: text/css; charset: UTF-8');
  
  /* Why the heck do you have the $base_url in this css file?
   * I run this simple framework mostly in subfolders or subdomains
   * and it makes it much easier to use relative paths' to me. */
  $base_url = 'http://monkey-coder.com/';
  
  /* if you don't like the undescriptive $colorX variables, just do a
   * find/replace with more descriptive names */
  $color1 = '#AF9F7B'; /* beige, light brown; eg: header and footer bg */
  $color2 = '#775E43'; /* dark brown; eg: navigation bg */
  $color3 = '#EEEEEE'; /* dark white; eg: body bg */
  $color4 = '#FFFFFF'; /* white; eg: well, white as in white */
  $color5 = '#73895D'; /* dark gray green; eg: contents hyperlinks */
  $color6 = '#CB842E'; /* dark gray orange; eg: contents hyperlinks hover */
  $color7 = '#DDDDDD'; /* light gray; eg: <code> bg */
?>

/* Resets
-------------------------------------------------------------- */
@import url(reset.css);

/* Layout
-------------------------------------------------------------- */
#page-wrap {
  min-width: 460px;
  background-color: <?php echo $color3; ?>;
}
#header {
  background-color: <?php echo $color1; ?>;
  padding: 20px;
  text-align: center;
}
#navigation {
  background-color: <?php echo $color2; ?>;
  border-top: 1px solid <?php echo $color3; ?>;
}
#content {
  margin: 0 10px 0 10px;
}
#footer {
  background-color: <?php echo $color1; ?>;
  padding: 20px;
  text-align: center;
}
.clear {
  clear: both;
}

/* Global elements
-------------------------------------------------------------- */
body {
  background-color: <?php echo $color1; ?>;
  color: #000;
  font-family: Georgia, serif;
  /* font-family: Helvetica, Arial, "Nimbus Sans L", sans-serif; */
  font-size: 16px;
}
code {
  padding: 0 5px;
  font-family: Consolas, monospace;
  background-color: <?php echo $color7; ?>;
}
small {
  font-size: 80%;
  font-style: italic;
}
abbr {
  border-bottom: 1px dotted <?php echo $color5; ?>;
  cursor: help;
}
strong {
  font-weight: bold;
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
  border-bottom: 5px solid <?php echo $color2; ?>;
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
  border-bottom: 5px solid <?php echo $color1; ?>;
}
ul#nav-left li a:hover,
ul#nav-right li a:hover {
  color: <?php echo $color4; ?>;
}

/* Footer elements
-------------------------------------------------------------- */
#footer p {
  font-size: 75%;
  line-height: 140%;
}

/* Content elements
-------------------------------------------------------------- */

/** Section elements
-------------------------------------------------------------- */
#content .section {
  border-bottom: 3px dotted <?php echo $color1; ?>;
  margin: 0 20px;
  padding: 0 0 15px 0;
}
#content .section:last-child {
  border-bottom: none;
}

/** Link elements
-------------------------------------------------------------- */
a,
a:visited {
  color: <?php echo $color5; ?>;
  text-decoration: none;
}
a:hover {
  color: <?php echo $color6; ?>;
  text-decoration: none;
}
#header a,
#navigation a,
#header a:visited,
#navigation a:visited,
#footer a,
#footer a:visited {
  color: <?php echo $color4 ?>;
}
#header a:hover,
#navigation a:hover,
#footer a:hover {
  color: <?php echo $color4; ?>;
}

/** List elements
-------------------------------------------------------------- */
#content ul {
  list-style: disc outside;
  margin: 10px 0 0 0;
}
#content li {
  margin: 0 0 0 30px;
  line-height: 160%;
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
  background-color: <?php echo $color5; ?>;
  color: <?php echo $color3; ?>;
}
#content h4 {
  background: url('/images/bullet.png') no-repeat scroll 0 100%;
  font-size: 125%;
  font-weight: bold;
  padding: 15px 0 0 20px;
}

/** Paragraph elements
-------------------------------------------------------------- */
#content p {
  margin: 15px 0 0 0;
  line-height: 120%;
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
  border: 1px solid <?php echo $color1; ?>;
  margin: 10px 0 0 0 !important;
  padding: 3px !important;
  width: 99% !important;
}
#content li .syntaxhighlighter {
  margin: 5px 0 !important; 
}
