</article>

<footer>
  <div class="contents">
    <nav>
      <ul>
        <?php
        $previous_chapter = $current_chapter_number - 1;
        $next_chapter = $current_chapter_number + 1;

        if ($current_chapter_number != '1')
          echo '<li class="previous"><a href="/' . $chapters[$previous_chapter]['slug'] . '.php"><span class="label">Previous</span><span class="chapter_title">' . $chapters[$previous_chapter]['title'] . '</span></a></li>';

        if ($current_chapter_number != '5')
          echo '<li class="next"><a href="/' . $chapters[$next_chapter]['slug'] . '.php"><span class="label">Next</span><span class="chapter_title">' . $chapters[$next_chapter]['title'] . '</span></a></li>';
          
        ?>
      </ul>
    </nav>
  </div>
</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
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