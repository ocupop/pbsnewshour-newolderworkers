PRODUCTION_URL = "http://www.pbs.org/"

$(document).ready ()->
  $window = $(window)
  $window_height = $window.height()
  $page_height = $(document).height()

  # global scroll position handler
  pos = 1

  do set_pos = ()->
    window.requestAnimationFrame set_pos
    pos = $window.scrollTop()

  $window.on "resize", ()->
    $window_height = $window.height()

  # parallax effect
  $.fn.parallax = (rate)->
    $this = $(this)
    # return if $this.length is 0
    top = $this.offset().top
    prefix = Modernizr.prefixed('transform')

    $window.on "resize", ()->
      top = $this.offset().top

    do update = ()->
      window.requestAnimationFrame update

      # translate3d makes other backgrounds sad :(
      $this.css(prefix, "translateY(#{(top - pos ) * rate}px)")

  # # apply parallax to all background image containers
  # $('.background_image', 'section').each ()->
  #   $(this).parallax( $(this).data('plax') || -0.3)

  # and to the intro photo
  $('.parallax').each ()->
    $(this).parallax( $(this).data('plax') || -0.3)

  # container for scroll actions
  scroll_actions = {}

  do onScroll = ()->
    # debounced window scroll binding
    setTimeout ()->

      do scroll_actions[action] for action of scroll_actions

      $window.one 'scroll', onScroll
    , 300

  # form handlers
  submit_user_data = null

  do form_handlers = ()->
    # autofill form with existing data
    $('input').each ()->
      $this = $(this)
      # store cookies in "retiring__" pseudo-namespace
      cookie_name = "retiring__#{$this.attr('name')}"

      # set to previous value
      data = $.cookie(cookie_name)

      if $this.attr('type') is "radio"
        $this.attr('checked', true) if ($this.val() is data)
        $this.on "click", ()->
          $.cookie(cookie_name, $this.val())
      else
        $this.val(data) if data

        $this.on "keyup change", (e)->
          $.cookie(cookie_name, $this.val())

    # PRODUCTION url
    form_url = "https://docs.google.com/forms/d/18Sj-Hj1y3-n-4fBjxY_lu_sWjHvHGg9ZWzryNbZLiPQ/formResponse"

    submit_user_data = ()->

      # set generalized cookie values to form-specific ids
      data = {
        "entry.1280847796"  : $.cookie("retiring__age")
        "entry.981715763"   : $.cookie("retiring__retiree")
        "entry.1251379033"  : $.cookie("retiring__retire_before")
        "entry.1192439293"  : $.cookie("retiring__satisfaction")
        "entry.2021902959"  : $.cookie("retiring__gender")
        "entry.1488207989"  : $.cookie("retiring__community_size")
      }

      $.post "ba-simple-proxy.php?url=#{form_url}", data, ()->
        # remove old cookies
        $.removeCookie("retiring__age")
        $.removeCookie("retiring__retiree")
        $.removeCookie("retiring__retire_before")
        $.removeCookie("retiring__satisfaction")
        $.removeCookie("retiring__gender")
        $.removeCookie("retiring__community_size")


  do video_handler = ()->
    window.video_stack = []
    to_s = Popcorn.util.toSeconds

    $('.video-container').each ()->
      $video = $(this)
      $container = $video.closest('.video')

      url = "http://www.youtube.com/watch?v=#{$video.data('src')}&rel=0&showinfo=0&modestbranding=1"

      if $video.data('start') then url += "&start=#{to_s($video.data('start'))}"

      pop = Popcorn.youtube( "##{this.id}", url )

      video_stack.push pop #that's a programmer joke for ya

      if $video.data('end') then pop.cue (to_s $video.data('end') ), ()->
        pop.pause()
        pop.currentTime to_s( $video.data('start') || 0)
        $container.removeClass('playing')

      pop.on "play", ()->
        video.pause() for video in video_stack when (video isnt pop)
        $container.addClass('playing')

      pop.on "ended", ()->
        $container.removeClass('playing')

      # youtube has own "replay" button, unneccessary?
      $container.find('.play').on "click", ()->
        pop.play(0)

      if $video.data('autoplay')
        top = $video.offset().top

        scroll_actions[this.id] = ()->
          if !$video.hasClass('played') and pos + ($window_height / 2) > top
            $video.addClass('played')
            pop.play()





  # Chapter 1: Rethinking Retirement

  if $('body').hasClass('chapter-1-rethinking-retirement') then do ()->
    $site_header = $('.site_header')
    $story_header = $('.story_header_wrapper')
    $chapter_title = $('.chapter_title')
    $intro = $('.intro')
    chapter_title_top = $chapter_title.offset().top
    $percentage_of_workers_chart = $('.percentage_of_workers-chart')
    percentage_of_workers_chart_top = $percentage_of_workers_chart.offset().top
    $percentage_of_workers_chart_points = $('.data_point', $percentage_of_workers_chart)
    $labor_force_chart = $('.labor_force-chart')
    labor_force_chart_top = $labor_force_chart.offset().top
    $labor_force_chart_points = $('.data_point', $labor_force_chart)
    $user_age = $('.user_age')
    $age_and_retirement = $('.age_and_retirement')
    $retirement_expectations = $('.retirement_expectations')

    scroll_actions.fade_header = ()->
      factor = 0
      offset = 0
      if $window_height > pos
        $story_header.css { opacity: (1 + factor) * (offset + $window_height - pos) / $window_height }

    scroll_actions.shrink_header = ()->
      pos_percent = pos / $window_height * 100
      $site_header.toggleClass 'shown', (pos_percent > 100)

    scroll_actions.animate_pies = ()->
      $intro.toggleClass "active", (pos > chapter_title_top - $window_height)

    scroll_actions.show_data_points = ()->
      $percentage_of_workers_chart_points.toggleClass 'active', (pos + (2 * $window_height / 3) > percentage_of_workers_chart_top)
      $labor_force_chart_points.toggleClass 'active', (pos + (2 * $window_height / 3) > labor_force_chart_top)

    # Toggle between "how long do you want to work" / are you retired already
    do set_how_long_work = ()->
      age = $user_age.val()
      $age_and_retirement.toggleClass 'show_over_65', (age >= 65)

      expectations_class = if age < 25
        "age-all"
      else if age < 35
        "age-25-34"
      else if age < 45
        "age-35-44"
      else if age < 55
        "age-45-54"
      else
        "age-55plus"

      $retirement_expectations.removeClass("age-all age-25-34 age-35-44 age-45-54 age-55plus").addClass(expectations_class)

    $user_age.on "keyup change", set_how_long_work

    do set_splitbars = ()->
      if $user_age.val() < 65
        slug = $("[name='retire_before']:checked").data('slug')
        $(".splitbar-item").removeClass('your_answer').filter(".#{slug}").addClass('your_answer')
      else
        $(".splitbar-item").removeClass('your_answer')

    $user_age.on "keyup change", set_splitbars
    $("[name='retire_before']").on "click", set_splitbars


  # Chapter 2: A Snapshot

  if $('body').hasClass('chapter-2-a-snapshot') then do ()->
    $gender_selector = $("#gender_selector")
    $gender_container = $("#gender_container")
    container_top = $gender_selector.offset().top
    container_bottom = $gender_container.offset().top + $gender_container.height()
    $community_changes = $('.community_changes')

    scroll_actions.sticky_gender_selector = ()->
      $gender_selector.toggleClass 'sticky', (container_top - 60) < pos < (container_bottom - 240)

    $('.community_size_selection').each ()->
      $this = $(this)
      $target = $community_changes.find(".#{$this.data('value')}")
      $this.hover ()->
        # toggleClass is buggy for this use case
        $target.addClass('hover')
      , ()->
        $target.removeClass('hover')
      $this.on "click", ()->
        $('.community_size_selection.click').removeClass("click")
        $this.addClass("click")
        $community_changes.find(".click").removeClass("click")
        $target.addClass("click")


  # Chapter 3: Working for the Nest Egg

  if $('body').hasClass('chapter-3-working-for-the-nest-egg') then do ()->
    $financially_unprepared_chart = $('.financially_unprepared-chart')
    financially_unprepared_chart_top = $financially_unprepared_chart.offset().top
    $financially_unprepared_chart_points = $('.data_point', $financially_unprepared_chart)
    $investor_underperforms_chart = $('.investor_underperforms-chart')
    investor_underperforms_chart_top = $investor_underperforms_chart.offset().top
    $investor_underperforms_chart_points = $('.data_point', $investor_underperforms_chart)
    $user_age = $('.user_age')
    $estimated_income = $('input[name="estimated_income"]')

    window.calculator_data =
      18: {"1k": "$48",    "2k": "$96",    "3k": "$144",    "4k": "$192",    "5k": "$240",    "5-10k": "$480"    },
      25: {"1k": "$86",    "2k": "$172",   "3k": "$258",    "4k": "$344",    "5k": "$430",    "5-10k": "$860"    },
      30: {"1k": "$131",   "2k": "$262",   "3k": "$393",    "4k": "$524",    "5k": "$655",    "5-10k": "$1,310"  },
      35: {"1k": "$201",   "2k": "$402",   "3k": "$603",    "4k": "$804",    "5k": "$1,005",  "5-10k": "$2,010"  },
      40: {"1k": "$315",   "2k": "$630",   "3k": "$945",    "4k": "$1,260",  "5k": "$1,575",  "5-10k": "$3,150"  },
      45: {"1k": "$509",   "2k": "$1,018", "3k": "$1,527",  "4k": "$2,036",  "5k": "$2,545",  "5-10k": "$5,090"  },
      50: {"1k": "$867",   "2k": "$1,734", "3k": "$2,601",  "4k": "$3,468",  "5k": "$4,335",  "5-10k": "$8,670"  },
      55: {"1k": "$1,640", "2k": "$3,280", "3k": "$4,920",  "4k": "$6,560",  "5k": "$8,200",  "5-10k": "$16,400" },
      60: {"1k": "$4,083", "2k": "$8,166", "3k": "$12,249", "4k": "$16,332", "5k": "$20,415", "5-10k": "$40,830" }

    do calculate_retirement_savings = ()->
      age = +$user_age.val()
      estimated_income = $('input[name="estimated_income"]:checked').val()
      rounded_age = if (age < 25)
        18
      else if (age > 60)
        60
      else
        Math.floor(age/5) * 5

      need_saved = calculator_data[rounded_age]?[estimated_income]

      if need_saved
        $('#calculator-result-value').text(need_saved)
        $('.form_conclusion').addClass('show_result')

    $user_age.on "change", calculate_retirement_savings
    $estimated_income.on "change", calculate_retirement_savings

    scroll_actions.show_data_points = ()->
      $financially_unprepared_chart_points.toggleClass 'active', (pos + (2 * $window_height / 3) > financially_unprepared_chart_top)
      $investor_underperforms_chart_points.toggleClass 'active', (pos + (2 * $window_height / 3) > investor_underperforms_chart_top)

    do set_splitbars = ()->
      slug = $("[name='confidence']:checked").data('slug')
      $(".splitbar-item").removeClass('your_answer').filter(".#{slug}").addClass('your_answer')

    $("[name='confidence']").on "click", set_splitbars


    # submit form
    $('.next', 'footer').on "click", ()->
      submit_user_data()


  # Chapter 4: Working in "Retirement"

  if $('body').hasClass('chapter-4-working-in-retirement') then do ()->

    $top_three_reasons = $('.top_three_reasons')
    top_three_reasons_top = $top_three_reasons.offset().top
    $reasons_for_working_chart = $('.reasons_for_working-chart')
    reasons_for_working_chart_top = $reasons_for_working_chart.offset().top
    $reasons_for_working_chart_points = $('.data_point', $reasons_for_working_chart)

    scroll_actions.animate_pies = ()->
      $top_three_reasons.toggleClass "active", (pos > top_three_reasons_top - $window_height)

    scroll_actions.show_data_points = ()->
      $reasons_for_working_chart_points.toggleClass 'active', (pos + (2 * $window_height / 3) > reasons_for_working_chart_top)


  # Chapter 5: Moving Forward

  if $('body').hasClass('chapter-5-moving-forward') then do ()->
    $share_options = $(".share_options")
    title = encodeURI ("PBS NewsHour: The Retiring of Retirement")
    messages = {
      half_of_american_households: "Half of American households have less than $10k in savings."
      death_of_the_pension: "In 1975, 85% of private sector employees had pensions. In 2013, only 35% do."
      average_investor: "The average investor underperforms during inflation."
      no_retirement_savings: "A third of Baby Boomers have no retirement savings."
    }

    email_body = """
      Hi,

      I just finished reading this piece on PBS NewsHour called 'The Retiring of Retirement' about the retirement crisis. Did you know:

      - Over half of today's households have less than $10k in savings--nowhere near enough money for retirement.
      - The percentage of workers who expect to work past 65 has more than tripled in 30 years.
      - In 1975, 85% of private sector employees had pensions. In 2013, only 35% do.
      - A third of Baby Boomers have no retirement savings.

      There's a lot more. I thought you might be interested. You can read the whole thing here:

      #{PRODUCTION_URL}

      Cheers!
    """

    $('a', $share_options).each ()->
      $this = $(this)
      parent_id = $this.closest('li').attr('id')
      message = encodeURI(messages[parent_id])
      $this.attr("target", "_blank")
      if $this.hasClass("twitter")
        $this.attr("href", "http://twitter.com/share?text=#{message}%20#{title}&url=#{PRODUCTION_URL}")
      else if $this.hasClass("facebook")
        $this.attr("href", "http://www.facebook.com/sharer.php?s=100&p[title]=#{title}&p[summary]=#{message}&p[url]=#{PRODUCTION_URL}" )
      else
        $this.attr("href", "mailto:?subject=#{title}&body=#{encodeURI(email_body)}")


  # Live Data Pie Charts

  $('#live_pie-under65-open').on "click", ()->
    $('#live_pie-under65').fadeIn()

  $('#live_pie-under65-close').on "click", (e)->
    e.preventDefault()
    $('#live_pie-under65').fadeOut()

  $('#live_pie-over65-open').on "click", ()->
    $('#live_pie-over65').fadeIn()

  $('#live_pie-over65-close').on "click", (e)->
    e.preventDefault()
    $('#live_pie-over65').fadeOut()

  $('#live_pie-gender-open').on "click", ()->
    $('#live_pie-gender').fadeIn()

  $('#live_pie-gender-close').on "click", (e)->
    e.preventDefault()
    $('#live_pie-gender').fadeOut()

  $('#live_pie-community-open').on "click", ()->
    $('#live_pie-community').fadeIn()

  $('#live_pie-community-close').on "click", (e)->
    e.preventDefault()
    $('#live_pie-community').fadeOut()


  # Sources

  $('#sources-open').on "click", ()->
    $('#sources').fadeIn()

  $('#sources-close').on "click", (e)->
    e.preventDefault()
    $('#sources').fadeOut()


  # Credits

  $('#credits-open').on "click", ()->
    $('#credits').fadeIn()

  $('#credits-close').on "click", (e)->
    e.preventDefault()
    $('#credits').fadeOut()


  # Close popups with ESC key.

  $(document).on "keyup", (e)->
    if (e.keyCode == 27)
      $('#live_pie-under65').fadeOut()
      $('#live_pie-over65').fadeOut()
      $('#live_pie-gender').fadeOut()
      $('#live_pie-community').fadeOut()
      $('#sources').fadeOut()
      $('#credits').fadeOut()