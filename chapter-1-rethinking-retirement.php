<?php

$chapter = 1;
require_once('header.php');

?>

<div class="story_header_wrapper">
  <header class="story_header">
    <p><span>PBS NewsHour Presents</span></p>
    <h1><em>New Adventures</em> <small>for</small> <em>Older Workers</em></h1>
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
      More than <strong>half</strong> of today&rsquo;s households<br>
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

<section class="chapter_title chromefix">
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

<section class="copy increase_of_workers chromefix">
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

<section class="question age_and_retirement" id="weigh-in">
  <div class="contents">
    <p class="first">Everyone now knows that the workplace is graying. For a variety of reasons, many of us plan to work longer and retire later than we would have just 10 years ago. But for <em>how much</em> longer? The answer has been changing rapidly.</p>

    <p class="form_question">
      We&rsquo;re asking you to weigh in.
    </p>

    <div class="form_fields">
      <p class="disclaimer">
        Note that we are collecting data anonymously via our survey questions so we can provide you with a more personalized experience. Your answers also help us visualize in real time the trends appearing within the so-called &ldquo;death of retirement.&rdquo;
      </p>

      <div class="field age">
        <label class="field_title">How old are you?</label>
        <input type="number" min="13" max="116" name="age" class="user_age">
      </div>

      <div class="field radio_buttons">
        <p class="field_title">
          Are you a current retiree?
        </p>

        <label>
          <input type="radio" name="retiree" value="Yes, I am a retiree.&nbsp;">
          <span>Yes, I am a retiree.</span>
        </label>
        <label>
          <input type="radio" name="retiree" value="No, I am not a retiree.&nbsp;">
          <span>No, I am not a retiree.</span>
        </label>
      </div>

      <div class="field radio_buttons" id="under_65">
        <div class="live_pie-open" id="live_pie-under65-open">See how others responded</div>

        <p class="field_title">
          You&rsquo;re under 65. How long do you <strong>WANT</strong> to work?
        </p>

        <label>
          <input type="radio" name="retire_before" value="I want to retire before I reach age 65."
            id="group_1251379033_1" data-slug="pre65">
          <span>I want to retire before I reach age 65.</span>
        </label>

        <label>
          <input type="radio" name="retire_before" value="I want to work until I'm between 65 and 69."
            id="group_1251379033_2" data-slug="gte65">
          <span>I want to work until I'm between 65 and 69.</span>
        </label>

        <label>
          <input type="radio" name="retire_before" value="I want to work until I'm between 70 and 74."
            id="group_1251379033_3" data-slug="gte65">
          <span>I want to work until I'm between 70 and 74.</span>
        </label>

        <label>
          <input type="radio" name="retire_before" value="I want to work until I'm between 75 and 79."
            id="group_1251379033_4" data-slug="gte65">
          <span>I want to work until I'm between 75 and 79.</span>
        </label>

        <label>
          <input type="radio" name="retire_before" value="I want to work past 80.&nbsp;"
            id="group_1251379033_5" data-slug="gte65">
          <span>I want to work past 80.</span>
        </label>

        <label>
          <input type="radio" name="retire_before" value="Forever." id="group_1251379033_6" data-slug="never">
          <span>I never want to retire.</span>
        </label>
      </div>

      <div class="field radio_buttons" id="over_or_65">
        <div class="live_pie-open" id="live_pie-over65-open">See how others responded</div>

        <p class="field_title">
          You&rsquo;re 65 or older. Are you working, and are you satisfied?
        </p>

        <label>
          <input type="radio" name="satisfaction" value="I am currently working and am happy/OK with working.&nbsp;" >
          <span>I am currently working and am happy/OK with working.</span>
        </label>

        <label>
          <input type="radio" name="satisfaction" value="I am currently working and am unhappy -- I would prefer to not be working.&nbsp;" >
          <span>I am currently working and am unhappy&mdash;I would prefer to not be working.</span>
        </label>

        <label>
          <input type="radio" name="satisfaction" value="I am currently NOT working and am happy / OK with not working. &nbsp;">
          <span>I am currently NOT working and am happy/OK with not working.</span>
        </label>

        <label>
          <input type="radio" name="satisfaction" value="I am currently NOT working and am unhappy -- I would prefer to be working.&nbsp;">
          <span>I am currently NOT working and am unhappy&mdash;I would prefer to be working.</span>
        </label>
      </div>
    </div>
  </div>
</section>

<section class="results retirement_expectations">
  <div class="contents">
    <h2>
      Let&rsquo;s see if your expectations are realistic.
    </h2>

    <p>
      Age-of-retirement expectations for workers
      <span class="age_group age-all">of all ages</span>
      <span class="age_group age-25-34">aged 25&ndash;34</span>
      <span class="age_group age-35-44">aged 35&ndash;44</span>
      <span class="age_group age-45-54">aged 45&ndash;54</span>
      <span class="age_group age-55plus">aged 55 and older</span>
      have changed over the years. When asked &ldquo;When do you expect to retire?&rdquo; here&rsquo;s how that age group answered&mdash;10 years ago and today. Notice how few answered &ldquo;before age 65&rdquo; in 2013 versus ten years earlier.
    </p>

    <div class="splitbars twothousandthirteen">
      <h3>2013</h3>
      <div class="twothousandthirteen-chart splitbars-container">
        <div class="splitbar-item first pre65"><span><strong>your answer:</strong> before age 65</span></div>
        <div class="splitbar-item second gte65"><span><strong>your answer:</strong> after age 65</span></div>
        <div class="splitbar-item third never"><span><strong>your answer:</strong> never</span></div>
        <div class="splitbar-item fourth dunno"><span><strong>your answer:</strong> don&rsquo;t know</span></div>
      </div>
    </div>
    <div class="splitbars twothousandthree">
      <h3>2003</h3>
      <div class="twothousandthree-chart splitbars-container">
        <div class="splitbar-item first pre65"><span><strong>your answer:</strong> before age 65</span></div>
        <div class="splitbar-item second gte65"><span><strong>your answer:</strong> after age 65</span></div>
        <div class="splitbar-item third never"><span><strong>your answer:</strong> never</span></div>
        <div class="splitbar-item fourth dunno"><span><strong>your answer:</strong> don&rsquo;t know</span></div>
      </div>
    </div>
  </div>
</section>

<section class="copy one_in_four_workers chromefix">
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

<section class="copy half_of_american_households chromefix">
  <div class="contents">
    <p>
      Half of American households have less than $10,000 in savings.
    </p>
  </div>
</section>

<section class="labor_force">
  <div class="contents">
    <h2>
      An Aging Workforce
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

<section class="quotation paul">
  <div class="contents">
    <blockquote>
      <p>
        Hello, I&rsquo;m Paul Solman of the PBS NewsHour. At age 68, I&rsquo;m on the third green line right above my head in the chart on the left, in the dot at the far right. Note that I&rsquo;m hardly alone.
      </p>
      <p>
        I never imagined I would work in journalism, as I now have, for half a century, never thought I would work that long at all. And yet, though I have plenty to otherwise keep me thoroughly engaged&mdash;including five grandchildren within 20 minutes of the house and two more on the way&mdash;I work two jobs, teaching my brand of real-world economics to the NewsHour audience as the show&rsquo;s economics correspondent and to college students at Yale and elsewhere. Moreover, I intend to keep working until I&rsquo;m shown the door.
      </p>
      <p>
        The gratification I get from work may be somewhat atypical but, as this older worker project of ours and the charts above confirm, more Americans than ever, including more and more of my junior colleagues in the baby boom, are staying on the job past &quot;retirement age.&quot;
      </p>
      <p>
        In my current 65-69 age range, fully 50% more workers are still active than was the case just 20 years ago. What&rsquo;s more, as you can see in the chart above me on the right, the portion of people working past 75 has more than <strong>doubled</strong> since 1993.
      </p>
      <p>
        So here&rsquo;s the question we set out to answer: Is retirement as we know it becoming a thing of the past? How long are we likely to work and why? Will we be happy on the job, or grimly counting the dollars and days until retirement?
      </p>
      <p>
        The older worker team has spent much of the past year looking at the factors&mdash;demography, economics, and just plain personal preference&mdash;that help explain what&rsquo;s happening to the American workforce as it ages.
      </p>
      <cite>
        <strong>&mdash; Paul Solman</strong>
        Business and Economics Correspondent, The PBS NewsHour, 68
      </cite>
    </blockquote>
  </div>
</section>

<section class="copy outro">
  <div class="contents">
    <p>
      So what&rsquo;s going on? And what do statistics say about where you fit into the picture?
    </p>
  </div>
</section>

<div id="live_pie-under65">
  <div class="live_pie-under65-content">
    <a id="live_pie-under65-close">&times;</a>

    <h2>You&rsquo;re under 65.<br>How long do you want to work?</h2>

    <ul>
      <li class="red">I want to retire before I&rsquo;m 65</li>
      <li class="orange">I want to work until I&rsquo;m 65&ndash;69</li>
      <li class="green">I want to work until I&rsquo;m  70&ndash;74</li>
      <li class="teal">I want to work until I&rsquo;m  75&ndash;79</li>
      <li class="blue">I want to work past 80</li>
      <li class="yellow">Forever</li>
    </ul>

    <div class="live_pie-loading"></div>

    <iframe class="pie_container" src="chart-under65.html"></iframe>
  </div>
</div>

<div id="live_pie-over65">
  <div class="live_pie-over65-content">
    <a id="live_pie-over65-close">&times;</a>

    <h2>You&rsquo;re 65 or older.<br>Are you working, and are you satisfied?</h2>

    <ul>
      <li class="red">I&rsquo;m working and am happy</li>
      <li class="green">I&rsquo;m working and am unhappy</li>
      <li class="blue">I&rsquo;m NOT working and happy</li>
      <li class="yellow">I&rsquo;m NOT working and unhappy</li>
    </ul>

    <div class="live_pie-loading"></div>

    <iframe class="pie_container" src="chart-over65.html"></iframe>
  </div>
</div>

<?php require_once('footer.php') ?>