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
    return if $this.length is 0
    top = $this.offset().top
    prefix = Modernizr.prefixed('transform')

    $window.on "resize", ()->
      top = $this.offset().top

    do update = ()->
      window.requestAnimationFrame update

      next_css = if Modernizr.csstransforms3d
        "translate3d(0, #{Math.floor((top - pos) * rate)}px, 0)"
      else
        "translateY(#{(top - pos ) * rate}px)"
      $this.css(prefix, next_css)

  # apply parallax to all background image containers
  $('.background_image', 'section').each ()->
    $(this).parallax(-0.3)

  # and to the intro photo
  $('.background_image', '.company_photo').parallax(0.3)


  # container for scroll actions
  scroll_actions = {}

  do onScroll = ()->
    # debounced window scroll binding
    setTimeout ()->

      do scroll_actions[action] for action of scroll_actions

      $window.one 'scroll', onScroll
    , 300

  # form handlers

  # autofill form with existing data
  $('input').each ()->
    $this = $(this)
    data = $.cookie("retiring__#{$this.attr('name')}")
    $this.val(data) if data


  # cookie inputs in "retiring__" pseudo-namespace
  # auto-expires in 1 day
  $('input').on "keyup change", (e)->
    $this = $(this)
    $.cookie( "retiring__#{$this.attr('name')}", $this.val(), {expires: 1} )

  # TEST url
  form_url = "https://docs.google.com/forms/d/1cujY_8JrgdzcwsScxv47lF_BY-g9Oz6u0vlrDNjZxGY/formResponse"

  $('#the_form').submit (e)->
    e.preventDefault()

    # disable form from submitting again
    $(this).find('input')
      .attr('disabled', 'disabled')
      .val("Sending...")

    # set generalized cookie values to form-specific ids
    data = {
      "entry.1728150349" : $.cookie("retiring__age")
    }

    $.post "ba-simple-proxy.php?url=#{form_url}", data, ()->
      # remove old cookies
      $.removeCookie("retiring__age")

      console.log "Success!"


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
      $percentage_of_workers_chart_points.toggleClass 'active', (pos > (percentage_of_workers_chart_top - 400))


  # Chapter 2: A Snapshot

  # if $('body').hasClass('chapter-2-a-snapshot') then do ()->


  # Chapter 3: Working for the Nest Egg

  if $('body').hasClass('chapter-3-working-for-the-nest-egg') then do ()->
    $financially_unprepared_chart = $('.financially_unprepared-chart')
    financially_unprepared_chart_top = $financially_unprepared_chart.offset().top
    $financially_unprepared_chart_points = $('.data_point', $financially_unprepared_chart)
    $investor_underperforms_chart = $('.investor_underperforms-chart')
    investor_underperforms_chart_top = $investor_underperforms_chart.offset().top
    $investor_underperforms_chart_points = $('.data_point', $investor_underperforms_chart)

    scroll_actions.show_data_points = ()->
      $financially_unprepared_chart_points.toggleClass 'active', (pos > (financially_unprepared_chart_top - 400))

  # Chapter 4: Working in "Retirement"

  if $('body').hasClass('chapter-4-working-in-retirement') then do ()->
    $user_age = $('.user_age')
    $how_long_work = $('.how_long_work')

    # Toggle between "how long do you want to work" / are you retired already
    do set_how_long_work = ()->
      age = $user_age.val()
      $how_long_work.toggleClass 'show_over_65', (age >= 65)

    $user_age.on "keyup change", set_how_long_work


  # Chapter 5: Moving Forward

  # if $('body').hasClass('chapter-5-moving-forward') then do ()->


  # Credits

  $('#credits-open').on "click", ()->
    $('#credits').show()

  $('#credits-close').on "click", (e)->
    e.preventDefault()
    $('#credits').hide()