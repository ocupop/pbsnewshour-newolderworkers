<?php

$chapter = 3;
require_once('header.php');

?>

<section class="chapter_title">
  <div class="background_image"></div>

  <div class="contents">
    <p>
      Chapter Three
    </p>
    <h2>
      Working for<br>
      the Nest Egg
    </h2>
  </div>
</section>

<section class="intro">
  <div class="contents">
    <p>
      Americans are an estimated <strong>$6.6 trillion</strong> short of what we will need to maintain our current standard of living.
    </p>
  </div>
</section>

<section class="quotation jack_vanderhei if_you_look_at">
  <div class="contents">
    <blockquote>
      <p>
        If you look at the lowest income quartile of earners, 41% of them will run short of money within 10 years of retirement. I don&rsquo;t have a clue what will happen to them after that.
      </p>
      <cite>
        <strong>&mdash; Jack VanDerhei</strong>
        Employee Benefit Research Institute
      </cite>
    </blockquote>
  </div>
</section>

<section class="copy financially_unprepared">
  <div class="contents">
    <p class="first">
      53% of American workers 30 and older are<br>
      on a path that will leave them financially unprepared for retirement if they expect<br>
      to maintain a constant living standard.
    </p>
    <p class="second">
      In 2001, only 38% of Americans were at risk of declining living standards in old age.
    </p>
    <p class="third">
      In 1989, just 30% faced the same risk.
    </p>

    <div class="financially_unprepared-chart">
      <div class="data_point" id="financially_unprepared-chart-data_point-1"><strong>30%</strong></div>
      <div class="data_point" id="financially_unprepared-chart-data_point-2"><strong>38%</strong></div>
      <div class="data_point" id="financially_unprepared-chart-data_point-3"><strong>53%</strong></div>
    </div>
  </div>
</section>

<section class="copy death_of_the_pension-intro">
  <div class="contents">
    <h2>Death of the Pension</h2>

    <div class="years">
      <div class="first">
        <h3>1975</h3>
        <p>
          85% of private sector<br>
          employees had pensions
        </p>
      </div>
      <div class="second">
        <h3>2013</h3>
        <p>
          35% of private sector<br>
          employees have pensions
        </p>
      </div>
    </div>
  </div>
</section>

<section class="death_of_the_pension">
  <div class="background_image"></div>

  <div class="contents">
    <div class="percents">
      <div class="eightyfivepercent">85%</div>
      <div class="thirtyfivepercent">35%</div>
    </div>
  </div>
</section>

<section class="copy death_of_the_pension-outro">
  <div class="contents">
    <p class="first">
      In employer-maintained &ldquo;defined-benefit&rdquo; pensions you receive a fixed regular payout based on salary and how long you worked at the company.
    </p>

    <p class="second">
      Company pensions have largely been replaced by retirement savings accounts like 401(k)s funded by employee (and often matching employer) contributions.
    </p>
  </div>
</section>

<section class="question confidence">
  <div class="contents">
    <p class="form_question">
      Overall, how confident are you that you (or you and your spouse) will have enough money to live comfortably throughout your retirement years?
    </p>

    <div class="form_fields">
      <div class="field radio_buttons">
        <label>
          <input type="radio" name="confidence" value="Very confident">
          <span>Very confident</span>
        </label>

        <label>
          <input type="radio" name="confidence" value="Somewhat confident">
          <span>Somewhat confident</span>
        </label>

        <label>
          <input type="radio" name="confidence" value="Not too confident">
          <span>Not too confident</span>
        </label>

        <label>
          <input type="radio" name="confidence" value="Not atall confident">
          <span>Not at all confident</span>
        </label>

        <label>
          <input type="radio" name="confidence" value="I don't know">
          <span>Don&rsquo;t know</span>
        </label>
      </div>
    </div>
  </div>
</section>

<section class="results savings_confidence">
  <div class="contents">
    <h2>
      How does your confidence measure up?
    </h2>

    <p>
      Approximately 1,250 individuals (1,003 workers and 251 retirees) aged 25 and older were asked this same question in 1995, 2001, 2007, and 2013 by the Employee Benefit Research Institute. See how their answers have changed in eighteen years.
    </p>

    <div class="splitbars nineteenninetyfive">
      <h3>1995</h3>
      <div class="nineteenninetyfive-chart splitbars-container">
        <div class="first nineteenninetyfive-very"><span>somewhat</span></div>
        <div class="second nineteenninetyfive-somewhat"><span>somewhat</span></div>
        <div class="third nineteenninetyfive-not_too"><span>not too</span></div>
        <div class="fourth nineteenninetyfive-not_at_all"><span>not at all</span></div>
      </div>
    </div>
    <div class="splitbars twothousandthirteen">
      <h3>2013</h3>
      <div class="twothousandthirteen-chart splitbars-container">
        <div class="first twothousandthirteen-very"><span>somewhat</span></div>
        <div class="second twothousandthirteen-somewhat"><span>somewhat</span></div>
        <div class="third twothousandthirteen-not_too"><span>not too</span></div>
        <div class="fourth twothousandthirteen-not_at_all"><span>not at all</span></div>
      </div>
    </div>
  </div>
</section>

<section class="copy">
  <div class="contents">
    <h2>
      How much do you have saved for retirement, and how much do you need?
    </h2>

    <p>
      75% of folks nearing retirement in 2010 had less than $30,000 saved.
    </p>

    <!--
    We need to stress this is a very simple, rough ballpark estimate and is meant to only give users a sense of how much they should be saving. It should not be used as a replacement for expert financial advice. Information from Sheryl Garrett, CFP, AIF. Adapted; used with permission from her book Personal Finance Workbook For Dummies® (Wiley 2007, 2012).

    http://garrettplanningnetwork.com/books-by-garrett/
    -->
  </div>
</section>

<section class="question age">
  <div class="contents">
    <!--
    We'll need to ask them for their age if they haven't provided it, or just show them it if they already have.

    ---

    Current age -- take from answer above in DEMOGRAPHICS section.
    round to age that best works with options provided for this calculation:
    18, 25, 30, 35, 40 ,45, 50, 55, 60
    -->
  </div>
</section>

<section class="question how_much_income_for_retirement">
  <div class="contents">
    <p>How much income do you think you&rsquo;ll need per month? (Remember, a rule of thumb is 80% of your current income at a minimum. So, if you&rsquo;re making $1,250 per month, you&rsquo;d want to have at least $1,000 to maintain your current standard of living.)</p>

    <label>
      <input type="radio" name="xxxxxx" id="_1">
      <strong>$1,000/month</strong>
    </label>

    <label>
      <input type="radio" name="xxxxxx" id="_2">
      <strong>$2,000/month</strong>
    </label>

    <label>
      <input type="radio" name="xxxxxx" id="_3">
      <strong>$3,000/month</strong>
    </label>

    <label>
      <input type="radio" name="xxxxxx" id="_4">
      <strong>$4,000/month</strong>
    </label>

    <label>
      <input type="radio" name="xxxxxx" id="_5">
      <strong>$5,000/month</strong>
    </label>

    <label>
      <input type="radio" name="xxxxxx" id="_6">
      <strong>$5,000&ndash;$10,000/month</strong>
    </label>

    <label>
      <input type="radio" name="xxxxxx" id="_7">
      <strong>More than $10,000/month</strong>
    </label>
  </div>
</section>

<section class="data">
  <div class="contents">
    <!--
    Answers based on responses: (spreadsheet to be sent separately)

    Note: these numbers are based on a single person and do not take into account Social Security, pensions, etc. They also assume starting with $0 savings, retiring at 65, getting a 7% return on your savings, and leaving nothing for heirs or charity. All figures in 2012 dollars.
    -->
  </div>
</section>

<section class="copy">
  <div class="contents">
    <p>
      Warning: The 7% return presumes a portfolio mix of 60% stocks and 40% bonds, using actual historical returns for this mix of assets. But as Sheryl Garrett (CFP&reg;, AIF&reg;, founder of The Garrett Planning Network, Inc.), who provided the data, points out, timing can make all the difference. Volatility can change the outcome of a 7% average annual return dramatically. If markets nosedive in the first two or three years of your retirement, you will have far less money on which to earn a return than if they stayed level or soared. In other words, you could receive a 7% average annual return over 20 years, say, but if your nest egg shrank drastically in the first few years, you might have nothing to tide you over until markets rallied.
    </p>
    <p>
      According to the Social Security Administration, for most of us, Social Security alone will not provide enough income for a comfortable living, even assuming the program experiences no benefit cuts in coming years.
    </p>
  </div>
</section>

<section class="quotation sheryl_garrett">
  <div class="contents">
    <p class="first">
      The decline in pensions has meant that most people are now responsible for their own retirement investments.
    </p>

    <blockquote>
      <p>
        So many people are clueless when it comes to investing.
      </p>
      <cite>
        <strong>&mdash; Sheryl Garrett <small>CFP&reg;, AIF&reg;</small></strong>
        Founder of The Garrett Planning Network, Inc.
      </cite>
    </blockquote>

    <p class="second">
      Investment firm BlackRock has found that the average investor underperforms even inflation. S/he knows she is supposed to buy low and sell high. But check out this rather sobering chart, which shows that in fact individual investors, on average, buy high&mdash;joining the crowd when stocks or bonds are rising in value&mdash;and sell low&mdash;stampeding to get out of investments once they have lost value.
    </p>
  </div>
</section>

<section class="investor_underperforms">
  <div class="contents">
    <p class="first">
      The average investor underperforms inflation
    </p>

    <p class="second">
      20-year Annualized Returns by Type of Investment (from 1992&ndash;2011)
    </p>

    <div class="investor_underperforms-chart">
      <div class="data_point bar" id="investor_underperforms-chart-data_point-1"></div>
      <div class="data_point bar" id="investor_underperforms-chart-data_point-2"></div>
      <div class="data_point bar" id="investor_underperforms-chart-data_point-3"></div>
      <div class="data_point bar" id="investor_underperforms-chart-data_point-4"></div>
      <div class="data_point bar" id="investor_underperforms-chart-data_point-5"></div>
      <div class="data_point bar" id="investor_underperforms-chart-data_point-6"></div>
      <div class="data_point bar" id="investor_underperforms-chart-data_point-7"></div>
      <div class="data_point bar" id="investor_underperforms-chart-data_point-8"></div>
      <div class="data_point" id="investor_underperforms-chart-data_point-9">2.1%<br><span>ROI</span></div>
    </div>
  </div>
</section>

<section class="video babs_tatalias">
  <div class="contents">
    <div class="replay"></div>
    <video controls preload="auto" class="semi-autoplay">
      <source src="video/OlderWorkers-BabsTatalias.mp4" type="video/mp4">
      <source src="video/OlderWorkers-BabsTatalias.webm" type="video/webm">
    </video>

    <div class="caption">
      <h2>
        I retired.<br>
        Then the crash hit.
      </h2>

      <p>
        Babs Tatalias retired at 61. After being forced back to work by the stock market crash in 2008, she found a new passion and a new career.
      </p>
    </div>
  </div>
</section>

<section class="quotation diane_oakley a_third_of_baby_boomers">
  <div class="contents">
    <blockquote>
      <p>
        A third of the baby boomers have no retirement savings.
      </p>
      <cite>
        <strong>&mdash; Diane Oakley</strong>
        Executive Director of the National Institute on Retirement Security
      </cite>
    </blockquote>
  </div>
</section>

<section class="video charles_smith">
  <div class="contents">
    <div class="replay"></div>
    <video controls preload="auto" class="semi-autoplay">
      <source src="video/OlderWorkers-CharlesSmith.mp4" type="video/mp4">
      <source src="video/OlderWorkers-CharlesSmith.webm" type="video/webm">
    </video>


    <div class="caption">
      <h2>
        I can&rsquo;t afford to stop working yet.
      </h2>

      <p>
        Rather than retire after a long career in the federal government, 63 year old Charles Smith works in a produce department for $10 an hour to support his family
      </p>
    </div>
  </div>
</section>

<section class="quotation dante_chinni the_great_recession">
  <div class="contents">
    <p class="intro">
      The Great Recession swept away about 40% of Americans&rsquo; wealth, forcing many workers to stay on the job to try to recoup some of their savings losses. Some permanently left the stock market. Others were relying on the equity tied to their home values, which are still far below their peak. Again, we turn to Dante Chinni for insight about what&rsquo;s going on.
    </p>

    <blockquote>
      <p>
        The Great Recession took a toll on the country as a whole, but it had special implications for older workers, pushing them back into the workplace. While the number of Americans in the workforce as a whole declined between 2008 and 2012&mdash;from 64% to 60%&mdash;the percentage of older Americans in the workforce actually grew, if only slightly. Between 2008 and 2012, the percentage of 60-plus aged Americans working full- or part-time inched up from 26% to 27%. Among those 65 or older, the percentage in the workforce grew slightly more, from 16% to 18%. One reason: the collapse of the stock market dealt a major blow to older Americans living off of retirement accounts with investments tied to the markets.
      </p>

      <cite>
        <strong>&mdash; Dante Chinni</strong>
         Author of <em>Our Patchwork Nation</em>
      </cite>
    </blockquote>
  </div>
</section>

<section class="video mike_kemp">
  <div class="contents">
    <div class="replay"></div>
    <video controls preload="auto" class="semi-autoplay">
      <source src="video/OlderWorkers-MikeKemp.mp4" type="video/mp4">
      <source src="video/OlderWorkers-MikeKemp.webm" type="video/webm">
    </video>

    <div class="caption">
      <h2>
        Best-laid Plans
      </h2>

      <p>
        Though we may want to work longer, many of us have to hang it up earlier than planned&mdash;sometimes for health or family reasons&mdash;often, because we&rsquo;ve lost a job and can&rsquo;t find another.
      </p>

      <p>
        69-year-old bike store owner Mike Kemp would continue to work if his health would allow it.
      </p>
    </div>
  </div>
</section>

<section class="copy unemployed_but_wanting_to_work">
  <div class="contents">
    <h2>
      Unemployed But Wanting to Work
    </h2>

    <p>
      Older workers who lose their jobs have a harder time finding employment than their younger peers. In a survey after the onset of the recession, almost twice as many younger workers had found a full-time job than those who are 55 or older. And of the older workers who did find jobs, half were forced to take a pay cut.
    </p>
  </div>
</section>

<section class="video brutal_job_search">
  <div class="contents">
    <div class="replay"></div>
    <video controls preload="auto">
      <source src="video/Broadcast-BrutalJobSearch.mp4" type="video/mp4">
      <source src="video/Broadcast-BrutalJobSearch.webm" type="video/webm">
    </video>

    <div class="caption">
      <h2>
        Brutal Job Search Reality for Older Americans Out of Work for Six Months or More
      </h2>

      <p>
        Despite a rosier jobs picture in April 2013, the prospect of finding work is greatly limited for Americans ages 55 or older who have been unemployed long-term. We explore why older workers face joblessness and considerable financial strain.
      </p>
    </div>
  </div>
</section>

<section class="copy why_is_it_harder">
  <div class="contents">
    <p>
      Why is it harder for older folks who want to keep working to land a job? Economist Julie Zissimopoulos of the University of Southern California:
    </p>
  </div>
</section>

<section class="quotation julie_zissimopoulos">
  <div class="contents">
    <blockquote>
      <p>
        About half of unemployed middle aged and older workers are still unemployed two years later. If you are near retirement and an employer wants to hire you, there’s fixed costs to hiring you. They have to train you. They have to invest in you and if their investment is only going to be spread over a few years then that might not be the best investment for them compared to a worker where that investment might be spread over many more years.
      </p>
      <cite>
        <strong>&mdash; Julie Zissimopoulos</strong>
        Economist, University of Southern California
      </cite>
    </blockquote>
  </div>
</section>

<section class="video paul_transition">
  <div class="contents">
    <div class="replay"></div>
    <video controls preload="auto" class="semi-autoplay">
      <source src="video/Paul-Transition.mp4" type="video/mp4">
      <source src="video/Paul-Transition.webm" type="video/webm"/>
    </video>
  </div>
</section>

<?php require_once('footer.php') ?>