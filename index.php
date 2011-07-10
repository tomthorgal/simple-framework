<?php include('header.php'); ?>

      <div id="content">
        <div class="section">
          <h4>version 0.4.2 &raquo; 07/07/2011</h4>
          <ul>
            <li>removed ie7 script; doesn't work properly</li>
            <li>added meta tag for mobile browser support</li>
          </ul>
          <pre class="brush: html">
            &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;
          </pre>
          <ul>
            <li>changed the header to get jquery from google and fallback to local if google is offline</li>
          </ul>
          <pre class="brush: html">
            &lt;script type=&quot;text/javascript&quot; src=&quot;//ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js&quot;&gt;&lt;/script&gt;
            &lt;script&gt;window.jQuery || document.write(&#39;&lt;script src=&quot;js/jquery-1.6.1.min.js&quot;&gt;&lt;\/script&gt;&#39;)&lt;/script&gt;
          </pre>
        </div>
        <div class="section">
          <h4>version 0.4.1 &raquo; 05/21/2011</h4>
          <ul>
            <li>changed the style.css to style.php</li>
          </ul>
        </div>
        <div class="section">
          <h4>version 0.4.0 &raquo; 05/20/2011</h4>
          <ul>
            <li>moved the framework to monkey-coder.com for actual use as my personal programmer website</li>
            <li>upgraded jquery to 1.6.1</li>
          </ul>
        </div>
        <div class="section">
          <h4>version 0.3.1 &raquo; 09/24/2010</h4>
          <ul>
            <li>implemented ie7 script (<a href="http://code.google.com/p/ie7-js/">http://code.google.com/p/ie7-js/</a>)</li>
            <li>changed syntaxhighlighter css to suite the frameworks overall style better</li>
          </ul>
          <pre class="brush: css">
            /** Syntaxhighlighter
            -------------------------------------------------------------- */
            #content .syntaxhighlighter {
              border: 3px solid #DDD;
              margin: 1.25em 0 0 0 !important;
              padding: 3px !important;
              width: 97% !important;
            }
          </pre>
        </div>
        <div class="section">
          <h4>version 0.3 &raquo; 09/22/2010</h4>
          <ul>
            <li>internet explorer bug fix for fancybox to display close and title image properly</li>
          </ul>
          <pre class="brush: css">
            /* in /js/fancybox/jquery.fancybox.css */
            /* replaced all relative paths with full paths */
                       
            /* eg: */
                       
            background-image: url(&#39;fancybox.png&#39;);
            /* replaced with: */
            background-image: url(&#39;/js/fancybox/fancybox.png&#39;);
                       
            /* eg: */
                       
            ...src=&#39;fancybox/fancy_loading.png&#39;...
            /* replaced with */
            ...src=&#39;/js/fancybox/fancy_loading.png&#39;...
          </pre>
        </div>
        <div class="section">
          <h4>version 0.2 &raquo; 09/20/2010</h4>
          <ul>
            <li>implemented fancybox (<a href="http://fancybox.net/">http://fancybox.net/</a>)</li>
            <li>example image:</li>
          </ul>
          <a id="inline" title="example picture" href="images/example.jpg">
            <img src="images/example-tn.jpg" alt="example picture" />
          </a>
        </div>
        <div class="section">
          <h4>version 0.1.1 &raquo; 09/17/2010</h4>
          <ul>
            <li>updated syntaxhighlighter source to 3.0.83</li>
          </ul>
        </div>
        <div class="section">
          <h4>version 0.1 &raquo; 05/10/2010</h4>
          <ul>
            <li>basic xhtml, css, jquery (<a href="http://jquery.com/">http://jquery.com/</a>) and syntaxhighlighter (<a href="">http://code.google.com/p/syntaxhighlighter/</a> by <a href="http://alexgorbatchev.com/SyntaxHighlighter/">http://alexgorbatchev.com/SyntaxHighlighter/</a>)</li>
          </ul>
        </div>
      </div>
      
<?php include('footer.php'); ?>
