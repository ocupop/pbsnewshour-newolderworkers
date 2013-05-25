$(document).ready ()->
  $window = $(window)

  # global scroll position handler
  pos = 1

  do onScroll = ()->
    # debounced window scroll binding
    setTimeout ()->
      pos = $window.scrollTop()

      rethinking_retirement.fade_header()
      rethinking_retirement.shrink_header()
      rethinking_retirement.snag_monument()

      $window.one 'scroll', onScroll
    , 10

  $window_height = $window.height()

  $page_height = $(document).height()

  $window.on "resize", ()->
    $window_height = $window.height()


  # Rethinking Retirement
  rethinking_retirement = {}

  do ()->
    $company_photo = $('.company_photo')
    $site_header = $('.chapter-1-rethinking-retirement .site_header')
    $story_header = $('.chapter-1-rethinking-retirement .story_header')
    $chapter_title = $('.chapter_title')
    chapter_title_top = $chapter_title.offset().top

    rethinking_retirement.fade_header = ()->
      factor = 0
      offset = 0
      if $window_height > pos
        $company_photo.css { opacity: (1 + factor) * (offset + $window_height - pos) / $window_height }
        $story_header.css { opacity: (1 + factor) * (offset + $window_height - pos) / $window_height }

    rethinking_retirement.shrink_header = ()->
      pos_percent = pos / $window_height * 100
      $site_header.toggleClass 'shown', (pos_percent > 100)

    rethinking_retirement.snag_monument = ()->
      $chapter_title.css('background-position-y', "#{(pos - chapter_title_top) * -5 / chapter_title_top * 100}%" )

  # Working in "Retirement"
  working_in_retirement = {}

  do ()->
    $user_age = $('.user_age')
    $how_long_work = $('.how_long_work')


    # Toggle between "how long do you want to work" / are you retired already
    do set_how_long_work = ()->
      age = $user_age.val()
      $how_long_work.toggleClass 'show_over_65', (age >= 65)

    $user_age.on "keyup change", set_how_long_work

