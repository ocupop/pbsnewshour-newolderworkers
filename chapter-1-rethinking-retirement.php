<?php

$chapter = 1;
require_once('header.php');

?>

<div class="story_header_wrapper">
  <header class="story_header">
    <p>PBS NewsHour Presents</p>
    <h1><small>The</small> <em>R</em><span>etiring</span> <small>of</small> <em>R</em><span>etirement</span></h1>
  </header>

  <div class="bleed fixed company_photo">
    <div class="background_image"></div>
  </div>

</div>

<section class="intro">
  <div class="contents">

    <div class="percent_92">
      <svg width="100" height="100">
        <clipPath id="circle_mask">
          <circle cx="50" cy="50" r="50" />
        </clipPath>
        <g clip-path="url(#circle_mask)">
          <rect x="0" y="0" width="100" height="100" fill="#383838"/>
          <rect fill="#528f85" x="50" y="0" width="50" height="100"/>
          <rect class="pie_slice" fill="#528f85" x="0" y="0" width="50" height="100"/>
        </g>
      </svg>
      <img src="img/1/92percent.png" id="92percent">
    </div>

    <p class="first">
      <strong>92%</strong> of Americans think<br>
      there&rsquo;s a retirement crisis.
    </p>

    <p class="second">
      And they&rsquo;re right.
    </p>

    <p class="third">
      Over <strong>half</strong> of today&rsquo;s households<br>
      won&rsquo;t have enough money for retirement.
    </p>

    <div class="percent_50">
      <svg width="100" height="100">
        <clipPath id="circle_mask_2">
          <circle cx="50" cy="50" r="50" />
        </clipPath>
        <g clip-path="url(#circle_mask_2)">
          <rect x="0" y="0" width="100" height="100" fill="#383838"/>
          <rect class="pie_slice" fill="#528f85" x="50" y="0" width="50" height="100"/>
          <rect fill="#383838" x="0" y="0" width="50" height="100"/>
        </g>
      </svg>
      <img src="img/1/50percent.png" id="50percent">
    </div>

  </div>
</section>

<section class="chapter_title">
  <div class="background_image"></div>

  <div class="contents">
    <p>
      Chapter One
    </p>
    <h2>
      Rethinking Retirement
    </h2>
  </div>
</section>

<section class="percentage_of_workers">
  <div class="contents">
    <p>
      The percentage of workers<br>
      who expect to work past 65<br>
      has more than tripled in 30 years.
    </p>

    <div class="percentage_of_workers-chart">
      <div class="data_point" id="percentage_of_workers-chart-data_point-1">from <strong>11%</strong> in 1991</div>
      <div class="data_point" id="percentage_of_workers-chart-data_point-2">to <strong>17%</strong> in 1997</div>
      <div class="data_point" id="percentage_of_workers-chart-data_point-3">to <strong>18%</strong> in 2002</div>
      <div class="data_point" id="percentage_of_workers-chart-data_point-4">to <strong>24%</strong> in 2007</div>
      <div class="data_point" id="percentage_of_workers-chart-data_point-5">and now <strong>36%</strong> in 2013</div>
    </div>
  </div>
</section>

<section class="copy increase_of_workers">
  <div class="background_image"></div>
  <div class="contents">
    <p class="first">
      The increase of workers
      <span>
        <strong>65+</strong>
      </span>
      is due to a variety of factors&mdash;the  implications of living longer chief among them.
    </p>

    <p class="second">
      Nearly
      <span>
        <strong>4</strong>
        in
        <strong>10</strong>
      </span>
      adults working past the median retirement age of 62 say it is because of the Great Recession.
    </p>
  </div>
</section>

<section class="question age_and_retirement">
  <div class="contents">
    <p>
      Everyone now knows that the workplace is greying. For a variety of reasons, many of us plan to work longer and retire later than we would have just 10 years ago. But for <em>how much</em> longer? The answer has been changing rapidly.
    </p>

    <!-- form questions from: http://www.pbs.org/newshour/businessdesk/2013/03/how-long-will-you-work.html -->

    <label>How old are you?</label>
    <input type="number" min="13" max="116" name="entry.1280847796" id="entry_1280847796">

    <hr>

    <label>Are you a current retiree?</label>
    <select name="entry.981715763" id="entry_981715763">
      <option value=""></option>
      <option value="Yes, I am a retiree.&nbsp;">Yes, I am a retiree.&nbsp;</option>
      <option value="No, I am not a retiree.&nbsp;">No, I am not a retiree.&nbsp;</option>
    </select>

    <hr>

    <p>
      If you are under 65 and not yet fully retired, how long do you WANT to work?
    </p>

    <label>
      <input type="radio" name="entry.1251379033" value="I want to retire before I reach age 65." id="group_1251379033_1">
      <span>I want to retire before I reach age 65.</span>
    </label>

    <label>
      <input type="radio" name="entry.1251379033" value="I want to work until I'm between 65 and 69." id="group_1251379033_2">
      <span>I want to work until I'm between 65 and 69.</span>
    </label>

    <label>
      <input type="radio" name="entry.1251379033" value="I want to work until I'm between 70 and 74." id="group_1251379033_3">
      <span>I want to work until I'm between 70 and 74.</span>
    </label>

    <label>
      <input type="radio" name="entry.1251379033" value="I want to work until I'm between 75 and 79." id="group_1251379033_4">
      <span>I want to work until I'm between 75 and 79.</span>
    </label>

    <label>
      <input type="radio" name="entry.1251379033" value="I want to work past 80.&nbsp;" id="group_1251379033_5">
      <span>I want to work past 80.</span>
    </label>

    <label>
      <input type="radio" name="entry.1251379033" value="Forever." id="group_1251379033_6">
      <span>Forever.</span>
    </label>

    <hr>

    <p>
      If you are 65 or older, tell us if you&rsquo;re working or not working and whether you are satisfied with that.
    </p>

    <label>
      <input type="radio" name="entry.1192439293" value="I am currently working and am happy/OK with working.&nbsp;" id="group_1192439293_1">
      I am currently working and am happy/OK with working.
    </label>

    <label>
      <input type="radio" name="entry.1192439293" value="I am currently working and am unhappy -- I would prefer to not be working.&nbsp;" id="group_1192439293_2">
      I am currently working and am unhappy&mdash;I would prefer to not be working.
    </label>

    <label>
      <input type="radio" name="entry.1192439293" value="I am currently NOT working and am happy / OK with not working. &nbsp;" id="group_1192439293_3">
      I am currently NOT working and am happy/OK with not working.
    </label>

    <label>
      <input type="radio" name="entry.1192439293" value="I am currently NOT working and am unhappy -- I would prefer to be working.&nbsp;" id="group_1192439293_4">
      I am currently NOT working and am unhappy&mdash;I would prefer to be working.
    </label>

  </div>
</section>

<section class="data">
  <div class="contents">
    <h2>TODO: RESULTS</h2>

    <p>Based on both answers above, show visualized expected age of retirement, where they fit, and how that&rsquo;s changed over the last 10 years based on this data from EBRI (anyone younger than 25 should be put in with ALL WORKERS).</p>
  </div>
</section>

<section class="copy one_in_four_workers">
  <div class="background_image"></div>
  <div class="contents">
    <div>
      <p class="first">
        Nearly one in four workers will be over<br>
        the age of 55 by 2016.
      </p>
      <p class="second">
        Why? Mainly because older Americans are<br>
        working longer, and there are more of them.<br>
        (The Baby Boom, remember.)
      </p>
    </div>
  </div>
</section>

<section class="quotation robert_martin working_about_the_right_amount">
  <div class="contents">
    <blockquote>
      <p>I am working about the right amount. I want to contribute and keep alert. Note however, though I may wake up every morning sharp as a tack, some days I&rsquo;m not sure which end it is. ;-)</p>
      <cite>
        <strong>&mdash; Robert A. Martin, J.D.</strong>
        76 and working part-time as a consultant.
      </cite>
    </blockquote>
  </div>
</section>

<section class="copy half_of_american_households">
  <div class="background_image"></div>
  <div class="contents">
    <p>
      Half of American households have less than $10,000 in savings.
    </p>
  </div>
</section>

<section class="quotation paul">
  <div class="contents">
    <blockquote>
      <p>
        At 68, I have now worked in journalism for 50 years (counting college). I have five grandchildren who demand, deserve and bounteously repay my attention. What hair I still have has been gray for years, and I feel the need to touch up my mustache with mascara. My fastball would be lucky to break 40 mph, but a cranky shoulder prevents me from even trying. And yet, I work two jobs&mdash;teaching my brand of real-world economics on the NewsHour (though technically, I&rsquo;m the show&rsquo;s economics reporter) and to college students, mainly at Yale but, occasionally, elsewhere.
      </p>
      <p>
        I consider the jobs a privilege, regardless of age, consider myself &ldquo;absurdly fortunate&rdquo; (as my father once said in discussing my NewsHour job). So I intend to keep working as long as I possibly can.
      </p>
      <p>
        As I pretty much knew, and have confirmed in the course of reporting for this older workers series, my situation is hardly typical of aging workers in America these days. And yet more Americans than ever, including more and more of my junior colleagues in the baby boom, are staying on the job past what was long considered retirement age. In twenty years workers 65&ndash;69 have doubled in their share of the labor force, and now almost a third of folks in that age range are working, up from one in five twenty years ago. What&rsquo;s more, the portion of people working past 75 has almost tripled since 1993.
      </p>
      <cite>
        <strong>&mdash; Paul Solman</strong>
        PBS Journalist, 68
      </cite>
    </blockquote>
  </div>
</section>

<section class="labor_force">
  <div class="contents">
    <h2>
      Labor Force Participation Rates by Age Group
    </h2>
  
    <h3 class="first">
      Total Percentage of Laborers Working Per Age Group Since 1993
    </h3>

    <h3 class="second">
      Percentage Change Per Age Group Since 1993
    </h3>

    <div class="labor_force-chart">
      <div class="data_point line" id="labor_force-chart-data_point-1"></div>
      <div class="data_point line" id="labor_force-chart-data_point-2"></div>
      <div class="data_point line" id="labor_force-chart-data_point-3"></div>
      <div class="data_point line" id="labor_force-chart-data_point-4"></div>
      <div class="data_point bar" id="labor_force-chart-data_point-5"></div>
      <div class="data_point bar" id="labor_force-chart-data_point-6"></div>
      <div class="data_point bar" id="labor_force-chart-data_point-7"></div>
      <div class="data_point bar" id="labor_force-chart-data_point-8"></div>
      <div class="data_point" id="labor_force-chart-data_point-9">58%</div>
    </div>
  </div>
</section>

<section class="copy outro">
  <div class="contents">
    <p class="first">
      Is retirement as we know it becoming a thing of the past? How long are we likely to work and why? Will we be happy on the job, or miserable and counting the dollars and days until retirement? We&rsquo;ve spent much of the past year looking at the factors&mdash;demography, economics, and just plain personal preference&mdash;that help explain what&rsquo;s happening to the American workforce as it ages.
    </p>
    <p class="second">
      So what&rsquo;s going on? And what do statistics say about where you fit into the picture?
    </p>
  </div>
</section>

<?php require_once('footer.php') ?>