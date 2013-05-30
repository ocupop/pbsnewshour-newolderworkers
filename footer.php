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
  </div>
</footer>

<div class="credits">
  <h2>Credits</h2>

  <h3>Chapter Title Photos</h3>
  <ul>
    <li>Chapter 1, (park pathway): <a href="http://www.flickr.com/photos/paulmccoubrie/8676443510">Rum Bucolic Ape</a>
    <li>Chapter 2, (fishing boat): <a href="http://www.flickr.com/photos/63207993@N06/7442303106">Bluedee2010</a>
    <li>Chapter 3, (house): <a href="http://www.flickr.com/photos/reallyboring/6010493725">reallyboring</a>
    <li>Chapter 4, (house): <a href="http://www.flickr.com/photos/artibop/7351457166">Artibop</a>
    <li>Chapter 5, (man standing): <a href="http://www.flickr.com/photos/lenscrack/6385997903">Raymond Larose</a>
  </ul>
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

<--

# Photo credits:


-->

</body>

</html>