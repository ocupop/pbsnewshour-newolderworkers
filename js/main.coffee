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

  # Rethinking Retirement
  rethinking_retirement = {}

  do ()->
    $company_photo = $('.company_photo')
    company_photo_height = $company_photo.find('img').height()
    $site_header = $('.site_header')

    $window.on "resize", ()->
      company_photo_height = $company_photo.find('img').height()

    rethinking_retirement.fade_header = ()->
      factor = 0
      offset = 0
      if company_photo_height > pos
        $company_photo.css {opacity: (1 + factor) * (offset + company_photo_height - pos) / company_photo_height }
        $site_header.css {opacity: 1 * (100 + company_photo_height - pos) / company_photo_height }

    rethinking_retirement.shrink_header = ()->
      company_photo_height = $company_photo.find('img').height()
      $site_header.toggleClass('small', (pos > company_photo_height))
