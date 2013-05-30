</article>

<footer>
  <div class="contents">
    <nav>
      <ul>
        <?php
        $previous_chapter = $chapter_list[$chapter - 1];
        $next_chapter = $chapter_list[$chapter + 1];

        if ($chapter > 1)
          echo '<li class="previous"><a href="' . $previous_chapter['slug'] . '.php"><span class="label">Previous</span><span class="chapter_title">' . $previous_chapter['title'] . '</span></a></li>';

        if ($chapter < 5)
          echo '<li class="next"><a href="' . $next_chapter['slug']. '.php"><span class="label">Next</span><span class="chapter_title">' . $next_chapter['title'] . '</span></a></li>';
        ?>
      </ul>
    </nav>

    <div>
      <p class="pbs">
        <a href="http://www.pbs.org/newshour/">
          <img src="img/pbs-dark_background.svg">
          <span>PBS NewsHour</span>
        </a>
      </p>

      <p class="extra">
        <a id="sources-open">Sources</a>
        <a id="credits-open">Credits</a>
      </p>
    </div>
  </div>
</footer>

<div id="credits">
  <div class="credits-content">
    <a id="credits-close">&times;</a>

    <h2>Credits</h2>

    <h3>PBS NewsHour: Content and Editorial</h3>
    <ul>
      <li><strong>Paul Solman</strong></li>
      <li><strong>Patti Parson</strong></li>
      <li><strong>Elizabeth Shell</strong></li>
      <li><strong>Vanessa Dennis</strong></li>
      <li><strong>Travis Daub</strong></li>
      <li><strong>Diane Lincoln Estes</strong></li>
      <li><strong>Dante Chinni</strong></li>
      <li><strong>David Pelcyger</strong></li>
      <li><strong>Justin Scullietti</strong></li>
      <li><strong>Mike Fritz</strong></li>
      <li><strong>Bob Burns</strong></li>
      <li><strong>Joshua Barajas</strong></li>
    </ul>

    <h3>Design and Development: Ocupop</h3>
    <ul>
      <li><strong>Abby Lindstrom</strong> design and illustration</li>
      <li><strong>Matthew McVickar</strong> art direction and development</li>
      <li><strong>Justin Falcone</strong> development</li>
      <li><strong>Nick Krusick</strong> video editing</li>
      <li><strong>Michael Nieling</strong> art direction</li>
    </ul>

    <div class="photo_credits">
      <h3>Chapter Title Photos <span>from Flickr users</span></h3>
      <ul>
        <li><strong>Chapter 1 (park pathway)</strong> <a href="http://www.flickr.com/photos/paulmccoubrie/8676443510">Rum Bucolic Ape</a>
        <li><strong>Chapter 2 (fishing boat)</strong> <a href="http://www.flickr.com/photos/63207993@N06/7442303106">Bluedee2010</a>
        <li><strong>Chapter 3 (house)</strong> <a href="http://www.flickr.com/photos/reallyboring/6010493725">reallyboring</a>
        <li><strong>Chapter 4 (house)</strong> <a href="http://www.flickr.com/photos/artibop/7351457166">Artibop</a>
        <li><strong>Chapter 5 (man standing)</strong> <a href="http://www.flickr.com/photos/lenscrack/6385997903">Raymond Larose</a>
      </ul>
    </div>
  </div>
</div>

<div id="sources">
  <div class="sources-content">
    <a id="sources-close">&times;</a>

    <h2>Sources</h2>

    
  </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
<script src="js/vendor/raf-polyfill.js"></script>
<script src="js/vendor/jquery.cookie.js"></script>
<script src="js/main.js"></script>

<script>
  var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
  g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
  s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

</body>

</html>
