<?php include('header.php'); ?>

      <div id="content">
        <div class="section">
          <h3>What and Why?</h3>
          <p>Hi, my name is Thomas Vollath (aka tomthorgal) and I am a programmer.</p>
          <p>I usually spend my time programming web applications in Ruby on Rails, PHP, and RPG. I also have a lot of experience with Javascript, HTML, and CSS, but I don't consider myself a front-end designer. I get the job done if needed, but there are many more talented - and real - designers out there.</p>
          <p>For my daily job(s) I often need to setup a quick website, if it's to track a new project and keep everyone informed about it, a quick photo album, or just a site to share some code between developers, I often find myself making very simple static websites.</p>
          <p>I don't always have the need to use an engine like Wordpress, Joomla, Django, or any other of the 
great open source website frameworks that you can download because not everything needs to be database driven or have user accounts, replies, and tags.</p>
          <p>I created this framework for this purpose. This framework is very simple in functionality, and quick to setup for a new project or whatever is asked of me to put together in a hurry :)</p>
          <p>This simple framework comes with components that I use the most for the sites I setup for my projects:
            <ul>
              <li>JQuery</li>
              <li>Syntax Highlighter</li>
              <li>Fancybox</li>
              <li>A basic stylesheet.</li>
              <li>A responsive layout.</li>
            </ul>
          </p>
          <p>Enjoy, and feel free to share everything and all you find here. If you have some ideas or fixes, don't be shy and <a href="https://github.com/tomthorgal/simple-framework/fork">fork this on github</a>.</p>
          <p><strong>If you have any issues, please report them on <a href="https://github.com/tomthorgal/simple-framework/issues/new">github</a>.</strong></p>
        </div>
        <div class="section">
          <h3>Examples</h3>
          <p><small>Make sure to check out the <a href="<?php echo $base_url; ?>changelog.php">Change Log</a> to see most of the functionality in action.</small></p>
          <p>Syntax Highlighter: <a href="">http://code.google.com/p/syntaxhighlighter/</a> by <a href="http://alexgorbatchev.com/SyntaxHighlighter/">http://alexgorbatchev.com/SyntaxHighlighter/</a></p>
          <pre class="brush: jscript">
            // SyntaxHighlighter makes your code snippets beautiful without tiring your servers.
            // http://alexgorbatchev.com
            var setArray = function(elems) {
                this.length = 0;
                push.apply(this, elems);
                return this;
            }
          </pre>
          <p><small>Tip: Convert your source code with <a href="http://www.elliotswan.com/postable/">postable</a> first before pasting it between your <code>&lt;pre&gt;&lt;/pre&gt;</code> tags.</small></p>
          <p>You get the following brushes by default:</p>
          <ul>
            <li>applescript</li>
            <li>actionscript3 as3</li>
            <li>bash shell</li>
            <li>coldfusion cf</li>
            <li>cpp c</li>
            <li>c# c-sharp csharp</li>
            <li>css</li>
            <li>delphi pascal</li>
            <li>diff patch pas</li>
            <li>erl erlang</li>
            <li>groovy</li>
            <li>java</li>
            <li>jfx javafx</li>
            <li>js jscript javascript</li>
            <li>perl pl</li>
            <li>php</li>
            <li>text plain</li>
            <li>py python</li>
            <li>ruby rails ror rb</li>
            <li>sass scss</li>
            <li>scala</li>
            <li>sql</li>
            <li>vb vbnet</li>
            <li>xml xhtml xslt html</li>
          </ul>
        </div>
        <div class="section">
          <p>Fancybox: <a href="http://fancybox.net/">http://fancybox.net/</a></p>
          <a id="inline" title='photo credit: <a href="http://www.flickr.com/people/kharied/">katie harris</a>' href="images/example.jpg">
            <img src="images/example-tn.jpg" alt="example picture" />
          </a>
        </div>
      </div>
      
<?php include('footer.php'); ?>
