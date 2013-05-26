$(document).ready ()->
  $window = $(window)

  $window_height = $window.height()

  $page_height = $(document).height()

  # global scroll position handler
  pos = 1

  $window.on "scroll", ()->
    pos = $window.scrollTop()

  $window.on "resize", ()->
    $window_height = $window.height()

  $.fn.parallax = (rate)->
    $this = $(this)
    top = $this.offset().top
    prefix = Modernizr.prefixed('transform')

    $window.on "resize", ()->
      top = $this.offset().top

    do update = ()->
      window.requestAnimationFrame update
      next_css = if Modernizr.csstransforms3d
        "translate3d(0, #{(top - pos - $window_height) * rate}px, 0)"
      else
        "translateY(#{(top - pos - $window_height) * rate}px)"
      $this.css(prefix, next_css)

  scroll_actions = {}

  do onScroll = ()->
    # debounced window scroll binding
    setTimeout ()->
      # pos = $window.scrollTop()

      do scroll_actions[action] for action of scroll_actions

      $window.one 'scroll', onScroll
    , 300

  # Rethinking Retirement

  if $('body').hasClass('chapter-1-rethinking-retirement') then do ()->
    $site_header = $('.site_header')
    $story_header = $('.story_header_wrapper')
    $chapter_title = $('.chapter_title')
    $intro = $('.intro')
    chapter_title_top = $chapter_title.offset().top
    $expectation_chart = $('.expectation_chart')
    expectation_chart_top = $expectation_chart.offset().top
    $expectation_chart_points = $('.data_point', $expectation_chart)

    $('.background-image').each ()->
      $(this).parallax(.1)

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
      $expectation_chart_points.toggleClass 'active', (pos > (expectation_chart_top - 400))

  # Working in "Retirement"
  working_in_retirement = {}

  if $('body').hasClass('chapter-4-working-in-retirement') then do ()->
    $user_age = $('.user_age')
    $how_long_work = $('.how_long_work')

    # Toggle between "how long do you want to work" / are you retired already
    do set_how_long_work = ()->
      age = $user_age.val()
      $how_long_work.toggleClass 'show_over_65', (age >= 65)

    $user_age.on "keyup change", set_how_long_work