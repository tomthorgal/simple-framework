Simple Framework ¯\_(ツ)_/¯  

Version: 0.4.3  
Author: Thomas Vollath (aka tomthorgal)  
License: Have fun!  
Website: http://simple-framework.monkey-coder.com/  
Source: https://github.com/tomthorgal/simple-framework    

####Installation:####

Clone the source form github  
`git clone git@github.com:tomthorgal/simple-framework.git`

Update the $base_url in the header.php file to your FQDN:  
`$base_url = 'http://simple-framework.monkey-coder.com/';`

Update the $base_url in the style.php file to your FQDN:  
`$base_url = 'http://simple-framework.monkey-coder.com/';`

Update the `style.php` color section with your color scheme.  

Replace/remove `install.php` and `changelog.php`, as well as replace the content of the `index.php` file to fit your needs.  

Update the header.php navigation links:  

    <ul id="nav-left">
      <li><a href="<?php echo $base_url; ?>">Home</a></li>
      <li><a href="<?php echo $base_url; ?>install.php">Install</a></li>
    </ul>
    
    <ul id="nav-right">
      <li><a href="<?php echo $base_url; ?>changelog.php">Change Log</a></li>
      <li><a href="https://github.com/tomthorgal/simple-framework">Find me on github</a></li>
    </ul>

Replace the `logo.png` with your logo.  

Replace or delete the `<script>` section in the `header.php` that is for google analytics.  
