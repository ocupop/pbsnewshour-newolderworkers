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

      $window.one 'scroll', onScroll
    , 200

  $window_height = $window.height()

  $window.on "resize", ()->
    $window_height = $window.height()

  # Rethinking Retirement
  rethinking_retirement = {}

  do ()->
    $company_photo = $('.company_photo')
    $site_header = $('.site_header')

    rethinking_retirement.fade_header = ()->
      factor = 0
      offset = 0
      if $window_height > pos
        $company_photo.css {opacity: (1 + factor) * (offset + $window_height - pos) / $window_height }
        $site_header.css {opacity: 1 * (100 + $window_height - pos) / $window_height }

    rethinking_retirement.shrink_header = ()->
      pos_percent = pos / $window_height * 100

      $site_header.toggleClass 'big',   (pos_percent < 90)
      $site_header.toggleClass 'small', (pos_percent > 90)
      $site_header.toggleClass 'shown', (pos_percent > 100)
