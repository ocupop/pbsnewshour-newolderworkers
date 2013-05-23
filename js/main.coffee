$(document).ready ()->
  console.log Date.now()

  $window = $(window)

  # global scroll position handler
  pos = 1

  do onScroll = ()->
    # debounced window scroll binding
    setTimeout ()->
      pos = $window.scrollTop()

      rethinking_retirement.fade_header()
      
      $window.one 'scroll', onScroll
    , 100


  # Rethinking Retirement
  rethinking_retirement = {}

  do ()->
    $company_photo = $('.company_photo')
    company_photo_height = $company_photo.height()

    rethinking_retirement.fade_header = ()->
      factor = 0
      offset = 0
      $company_photo.css {opacity: Math.max(0 , (1 + factor) * (offset + company_photo_height - pos) / company_photo_height) }
