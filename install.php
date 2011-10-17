<?php include('header.php'); ?>

      <div id="content">
        <div class="section">
          <h3>Installation</h3>
          <ul>
            <li>
              Clone the source form <a href="https://github.com/tomthorgal/simple-framework">github</a>
              <pre class="brush: plain; gutter: false;">git clone git@github.com:tomthorgal/simple-framework.git</pre>
            </li>
            <li>
              Update the <code>$base_url</code> in the <code>header.php</code> file to your <abbr title="Fully Qualified Domain Name">FQDN</abbr>:
              <pre class="brush: php; gutter: false;">$base_url = 'http://monkey-coder.com/';</pre>
            </li>
            <li>
              Update the <code>$base_url</code> in the <code>style.php</code> file to your <abbr title="Fully Qualified Domain Name">FQDN</abbr>:
              <pre class="brush: php; gutter: false;">$base_url = 'http://monkey-coder.com/';</pre>
            </li>
            <li>Update the <code>style.php</code> color section with your color scheme.</li>
            <li>Replace/remove <code>install.php</code> and <code>changelog.php</code>, as well as replace the content of the <code>index.php</code> file to fit your needs.</li>
            <li>
              Update the <code>header.php</code> navigation links:
              <pre class="brush: html">
                &lt;ul id="nav-left"&gt;
                  &lt;li&gt;&lt;a href="&lt;?php echo $base_url; ?&gt;"&gt;Home&lt;/a&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;a href="&lt;?php echo $base_url; ?&gt;install.php"&gt;Install&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
                
                &lt;ul id="nav-right"&gt;
                  &lt;li&gt;&lt;a href="&lt;?php echo $base_url; ?&gt;changelog.php"&gt;Change Log&lt;/a&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;a href="https://github.com/tomthorgal/simple-framework"&gt;Find me on github&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
              </pre>
            </li>
            <li>Replace the <code>logo.png</code> with your logo.</li>
            <li>Replace or delete the <code>&lt;script&gt;</code> section in the <code>header.php</code> that is 
for google analytics.</li>
          </ul>
          <p>Thats it, quick and painless :)</p>
          <p><strong>If you have any issues, please report them on <a href="https://github.com/tomthorgal/simple-framework/issues/new">github</a>.</strong></p>
        </div>
      </div>
      
<?php include('footer.php'); ?>
