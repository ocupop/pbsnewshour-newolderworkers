</article>

<footer>
  <div class="navigation">
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
  </div>

  <div class="links">
    <div class="contents"> 
      <p class="pbs">
        <a href="http://www.pbs.org/newshour/">
          <img src="img/pbs-logotype.png">
        </a>
      </p>

      <p class="extra">
        <a id="sources-open">Sources</a>
        <a id="credits-open">Credits</a>
      </p>

      <p class="sloan_foundation">
        <a href="http://www.sloan.org/">
          <img src="img/sloan_foundation.png">
        </a>
        <span>The Sloan Center is funded by the Alfred P. Sloan Foundation, which is an underwriter of this project and the PBS NewsHour.</p>
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
      <li><strong>Paul Solman</strong> Economics Correspondent</li>
      <li><strong>Elizabeth Shell</strong> principal editor, writer, researcher</li>
      <li><strong>Vanessa Dennis</strong> principal editor, director</li>
      <li><strong>Patti Parson</strong> editorial oversight</li>
      <li><strong>Diane Lincoln Estes</strong> editorial oversight</li>
      <li><strong>Travis Daub</strong> creative director</li>
      <li><strong>Tom Kennedy</strong> editorial oversight</li>
      <li><strong>Margaret Myers</strong> editorial oversight</li>
      <li><strong>Dante Chinni</strong> Director of the American Communities Project at American University</li>
      <li><strong>David Pelcyger</strong> video reporter</li>
      <li><strong>Justin Scuiletti</strong> videographer, video quality control editor</li>
      <li><strong>Mike Fritz</strong> videographer</li>
      <li><strong>Bob Burns</strong> videographer</li>
      <li><strong>Joshua Barajas</strong> videographer</li>
      <li><strong>Colleen Shalby</strong> social media editor</li>
      <li><strong>Mallory Sofastaii</strong> fact checker</li>
      <li><strong>Elise Garofalo</strong> fact checker</li>
    </ul>

    <h3>Design and Development: Ocupop</h3>
    <ul>
      <li><strong>Abby Lindstrom</strong> design and illustration</li>
      <li><strong>Matthew McVickar</strong> art direction and development</li>
      <li><strong>Justin Falcone</strong> development</li>
      <li><strong>Michael Nieling</strong> art direction</li>
      <li><strong>Nick Krusick</strong> video editing and design</li>
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

    <h3>AARP</h3>

    <ul>
      <li><a href="http://www.aarp.org/content/dam/aarp/research/public_policy_institute/econ_sec/2012/boomers-and-the-great-recession-struggling-to-recover-v2-AARP-ppi-econ-sec.pdf">Boomers and the Great Recession: Struggling to Recover</a></li>
      <li><a href="http://www.aarp.org/money/investing/info-10-2012/boomer-women-feeling-more-financially-insecure-than-men-AARP-ppi-econ-sec.html">Boomer Women Feeling More Financially Insecure than Men</a></li>
      <li><a href="http://www.aarp.org/content/dam/aarp/research/public_policy_institute/econ_sec/2013/the-employment-situation-january-2013-AARP-ppi-econ-sec.pdf">The Employment Situation, January 2013: Jobs Added to the Economy but Unemployment for Older Workers Holds Fast</a></li>
    </ul>

    <h3>AARP/USA Today</h3>

    <ul>
      <li><a href="http://www.usatoday.com/story/money/personalfinance/2013/01/13/older-workers-stay-working/1780291/">More Americans 75 and older keep working</a></li>
    </ul>

    <h3>Census</h3>

    <ul>
      <li><a href="http://www.census.gov/prod/2013pubs/acsbr11-09.pdf">Labor Force Participation and Work Status of People 65 Years and Older</a></li>
      <li><a href="http://blogs.census.gov/2013/02/25/men-in-nursing-occupations/">Men in Nursing Occupations</a></li>
    </ul>

    <h3>Center for Retirement Research at Boston College</h3>

    <ul>
      <li><a href="http://crr.bc.edu/wp-content/uploads/2012/11/IB_12-20.pdf">The National Retirement Risk Index: An Update</a></li>
      <li><a href="http://crr.bc.edu/briefs/national-retirement-risk-index-how-much-longer-do-we-need-to-work/">National Retirement Risk Index: How Much Longer Do We Need to Work?</a></li>
      <li><a href="http://crr.bc.edu/wp-content/uploads/2012/09/IB_12-16.pdf">The Pension Coverage Problem in the Private Sector</a></li>
    </ul>

    <h3>CNN</h3>

    <ul>
      <li><a href="http://money.cnn.com/2012/10/23/retirement/delaying-retirement/index.html">More Americans delaying retirement until their 80s</a></li>
    </ul>

    <h3>The Economist</h3>

    <ul>
      <li><a href="http://www.economist.com/node/13900145">The end of retirement</a></li>
    </ul>

    <h3>The Employee Benefit Research Institute (EBRI)</h3>

    <ul>
      <li><a href="http://www.ebri.org/pdf/surveys/rcs/2013/PR1013.19Mar13.RCS.pdf">2013 Retirement Confidence Survey</a></li>
      <li><a href="http://www.ebri.org/pdf/surveys/rcs/2012/EBRI_IB_03-2012_No369_RCS.pdf">2012 Retirement Confidence Survey</a></li>
      <li><a href="http://www.washingtonpost.com/blogs/wonkblog/wp/2013/02/04/everybodys-working-for-the-health-care-benefits/">EBRI via WaPo</a></li>
      <li><a href="http://www.ebri.org/publications/ib/index.cfm?fa=ibDisp&content_id=5128">Employment-Based Retirement Plan Participation: Geographic Differences and Trends, 2011</a></li>
    </ul>

    <h3>MSN Money</h3>

    <ul>
      <li><a href="http://money.msn.com/baby-boomers/5-reasons-boomers-will-go-bust-fiscaltimes.aspx">5 reasons boomers will go bust</a></li>
    </ul>

    <h3>National Bureau of Economic Research</h3>

    <ul>
      <li><a href="http://www.nytimes.com/2013/01/13/business/how-5-older-workers-saw-a-chance-to-remake-their-careers.html?pagewanted=all&_r=0">Who Killed the Private Sector DB Plan?</a></li>
      <li><a href="http://www.nirsonline.org/index.php?option=com_content&task=view&id=174&Itemid=48">Pensions and Retirement Security: A Roadmap for Policy Makers</a></li>
    </ul>

    <h3>The New York Times</h3>

    <ul>
      <li><a href="http://www.nytimes.com/2013/01/13/business/how-5-older-workers-saw-a-chance-to-remake-their-careers.html?pagewanted=all&_r=0">Over 50, and Under No Illusions</a></li>
      <li><a href="http://www.nytimes.com/2013/02/03/business/americans-closest-to-retirement-were-hardest-hit-by-recession.html">Heldrich Center for Workforce Development at Rutgers University survey</a></li>
    </ul>

    <h3>The Pew Charitable Trusts</h3>

    <ul>
      <li><a href="http://www.pewtrusts.org/news_room_detail.aspx?id=54934">Economy, Better Health Lead to Longer Time in Workforce</a></li>
    </ul>

    <h3>Pew Research Center</h3>

    <ul>
      <li><a href="http://www.pewresearch.org/2009/09/03/recession-turns-a-graying-office-grayer/">Recession Turns a Graying Office Grayer</a></li>
    </ul>

    <h3>Pew Research Social & Demographic Trends</h3>

    <ul>
      <li><a href="http://www.pewsocialtrends.org/2009/09/17/take-this-job-and-love-it/">Pew: Take this Job and Love It</a></li>
      <li><a href="http://www.pewsocialtrends.org/2012/10/22/more-americans-worry-about-financing-retirement/">More Americans Worry about Financing Retirement</a></li>
    </ul>

    <h3>Retirement Security Project; Senate Committee on Health, Education, Labor, and Pensions</h3>

    <ul>
      <li><a href="http://www.harkin.senate.gov/documents/pdf/5011b69191eb4.pdf">The retirement crisis and a plan to solve it</a></li>
    </ul>

    <h3>The Schwartz Center for Economic Policy Analysis</h3>

    <ul>
      <li><a href="http://www.economicpolicyresearch.org/guaranteeing-retirement-income/528-retirement-account-balances-by-income-even-the-highest-earners-dont-have-enough.html">Retirement Account Balances by Income: Even the Highest Earners Don't Have Enough</a></li>
    </ul>

    <h3>Social Security Administration</h3>

    <ul>
      <li><a href="http://www.socialsecurity.gov/retire2/retirechart.htm">Retirement Planner: Full Retirement Age</a></li>
    </ul>

    <h3>Vanguard</h3>

    <ul>
      <li><a href="http://vanguardblog.com/2012/02/21/retirement-ready-or-not/">Retirement ready&mdash;or not?</a></li>
    </ul>

    <h3>The Washington Post</h3>

    <ul>
      <li><a href="http://www.washingtonpost.com/business/economy/2013/02/25/6ffd292c-7f9d-11e2-b99e-6baf4ebe42df_story.html">Americans anxious about retirement</a></li>
      <li><a href="http://www.washingtonpost.com/business/economy/fiscal-trouble-ahead-for-most-future-retirees/2013/02/16/ae8c7350-5905-11e2-88d0-c4cf65c3ad15_story.html">Fiscal trouble ahead for most future retirees</a></li>
      <li><a href="http://www.washingtonpost.com/business/economy/401k-breaches-undermining-retirement-security-for-millions/2013/01/14/f54a0e90-5e70-11e2-8acb-ab5cb77e95c8_story.html">401(k) breaches undermining retirement security for millions</a></li>
      <li><a href="http://www.washingtonpost.com/business/economy/young-workers-retirement-hopes-grow-bleaker-amid-economic-downturn/2012/11/05/3ea7ed3c-13c1-11e2-ba83-a7a396e6b2a7_story.html">Young workers’ retirement hopes grow bleaker amid economic downturn</a></li>
    </ul>

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
