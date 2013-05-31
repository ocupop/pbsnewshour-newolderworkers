// Generated by CoffeeScript 1.6.1
(function() {
  var PRODUCTION_URL;

  PRODUCTION_URL = "http://www.pbs.org/";

  $(document).ready(function() {
    var $page_height, $window, $window_height, form_handlers, onScroll, pos, scroll_actions, set_pos, submit_user_data;
    $window = $(window);
    $window_height = $window.height();
    $page_height = $(document).height();
    pos = 1;
    (set_pos = function() {
      window.requestAnimationFrame(set_pos);
      return pos = $window.scrollTop();
    })();
    $window.on("resize", function() {
      return $window_height = $window.height();
    });
    $.fn.parallax = function(rate) {
      var $this, prefix, top, update;
      $this = $(this);
      if ($this.length === 0) {
        return;
      }
      top = $this.offset().top;
      prefix = Modernizr.prefixed('transform');
      $window.on("resize", function() {
        return top = $this.offset().top;
      });
      return (update = function() {
        var next_css;
        window.requestAnimationFrame(update);
        next_css = Modernizr.csstransforms3d ? "translate3d(0, " + (Math.floor((top - pos) * rate)) + "px, 0)" : "translateY(" + ((top - pos) * rate) + "px)";
        return $this.css(prefix, next_css);
      })();
    };
    $('.background_image', 'section').each(function() {
      return $(this).parallax($(this).data('plax') || -0.3);
    });
    $('.background_image', '.company_photo').parallax(0.3);
    scroll_actions = {};
    (onScroll = function() {
      return setTimeout(function() {
        var action;
        for (action in scroll_actions) {
          scroll_actions[action]();
        }
        return $window.one('scroll', onScroll);
      }, 300);
    })();
    submit_user_data = null;
    (form_handlers = function() {
      var form_url;
      $('input').each(function() {
        var $this, cookie_name, data;
        $this = $(this);
        console.log($this.val());
        cookie_name = "retiring__" + ($this.attr('name'));
        data = $.cookie(cookie_name);
        if ($this.attr('type', 'radio')) {
          if ($this.val() === data) {
            $this.attr('checked', true);
          }
          return $this.on("click", function() {
            console.log("set", $this.val(), cookie_name);
            return $.cookie(cookie_name, $this.val());
          });
        } else {
          if (data) {
            $this.val(data);
          }
          return $this.on("keyup change", function(e) {
            console.log("set", $this.val(), cookie_name);
            return $.cookie(cookie_name, $this.val());
          });
        }
      });
      form_url = "https://docs.google.com/forms/d/18Sj-Hj1y3-n-4fBjxY_lu_sWjHvHGg9ZWzryNbZLiPQ/formResponse";
      return submit_user_data = function() {
        var data;
        data = {
          "entry.1280847796": $.cookie("retiring__age"),
          "entry.981715763": $.cookie("retiring__retiree"),
          "entry.1251379033": $.cookie("retiring__retire_before"),
          "entry.1192439293": $.cookie("retiring__satisfaction"),
          "entry.2021902959": $.cookie("retiring__gender"),
          "entry.1488207989": $.cookie("retiring__community_size")
        };
        return $.post("ba-simple-proxy.php?url=" + form_url, data, function() {
          $.removeCookie("retiring__age");
          $.removeCookie("retiring__retiree");
          $.removeCookie("retiring__retire_before");
          $.removeCookie("retiring__satisfaction");
          $.removeCookie("retiring__gender");
          return $.removeCookie("retiring__community_size");
        });
      };
    })();
    $('video').each(function() {
      var $container, $this;
      $this = $(this);
      $container = $this.closest('.video');
      $container.find('.replay').on("click", function() {
        return $this[0].play();
      });
      $this.on("play", function() {
        var video, _i, _len, _ref;
        _ref = $('video');
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
          video = _ref[_i];
          if (video !== $this[0]) {
            video.pause();
          }
        }
        return $container.addClass('playing');
      });
      return $this.on("ended", function() {
        return $container.removeClass('playing');
      });
    });
    $('.semi-autoplay').each(function(index) {
      var $this, top;
      $this = $(this);
      top = $this.offset().top;
      return scroll_actions["video_" + index] = function() {
        if (!$this.hasClass('played') && pos + $window_height / 2 > top) {
          return $this.addClass('played')[0].play();
        }
      };
    });
    if ($('body').hasClass('chapter-1-rethinking-retirement')) {
      (function() {
        var $age_and_retirement, $chapter_title, $intro, $labor_force_chart, $labor_force_chart_points, $percentage_of_workers_chart, $percentage_of_workers_chart_points, $site_header, $story_header, $user_age, chapter_title_top, labor_force_chart_top, percentage_of_workers_chart_top, set_how_long_work;
        $site_header = $('.site_header');
        $story_header = $('.story_header_wrapper');
        $chapter_title = $('.chapter_title');
        $intro = $('.intro');
        chapter_title_top = $chapter_title.offset().top;
        $percentage_of_workers_chart = $('.percentage_of_workers-chart');
        percentage_of_workers_chart_top = $percentage_of_workers_chart.offset().top;
        $percentage_of_workers_chart_points = $('.data_point', $percentage_of_workers_chart);
        $labor_force_chart = $('.labor_force-chart');
        labor_force_chart_top = $labor_force_chart.offset().top;
        $labor_force_chart_points = $('.data_point', $labor_force_chart);
        $user_age = $('.user_age');
        $age_and_retirement = $('.age_and_retirement');
        scroll_actions.fade_header = function() {
          var factor, offset;
          factor = 0;
          offset = 0;
          if ($window_height > pos) {
            return $story_header.css({
              opacity: (1 + factor) * (offset + $window_height - pos) / $window_height
            });
          }
        };
        scroll_actions.shrink_header = function() {
          var pos_percent;
          pos_percent = pos / $window_height * 100;
          return $site_header.toggleClass('shown', pos_percent > 100);
        };
        scroll_actions.animate_pies = function() {
          return $intro.toggleClass("active", pos > chapter_title_top - $window_height);
        };
        scroll_actions.show_data_points = function() {
          $percentage_of_workers_chart_points.toggleClass('active', pos + (2 * $window_height / 3) > percentage_of_workers_chart_top);
          return $labor_force_chart_points.toggleClass('active', pos + (2 * $window_height / 3) > labor_force_chart_top);
        };
        (set_how_long_work = function() {
          var age;
          age = $user_age.val();
          return $age_and_retirement.toggleClass('show_over_65', age >= 65);
        })();
        return $user_age.on("keyup change", set_how_long_work);
      })();
    }
    if ($('body').hasClass('chapter-2-a-snapshot')) {
      (function() {
        var $gender_container, $gender_selector, container_bottom, container_top;
        $gender_selector = $("#gender_selector");
        $gender_container = $("#gender_container");
        container_top = $gender_selector.offset().top;
        container_bottom = $gender_container.offset().top + $gender_container.height();
        return scroll_actions.sticky_gender_selector = function() {
          return $gender_selector.toggleClass('sticky', ((container_top - 60) < pos && pos < (container_bottom - 240)));
        };
      })();
    }
    if ($('body').hasClass('chapter-3-working-for-the-nest-egg')) {
      (function() {
        var $calculator_data, $financially_unprepared_chart, $financially_unprepared_chart_points, $investor_underperforms_chart, $investor_underperforms_chart_points, financially_unprepared_chart_top, investor_underperforms_chart_top;
        $financially_unprepared_chart = $('.financially_unprepared-chart');
        financially_unprepared_chart_top = $financially_unprepared_chart.offset().top;
        $financially_unprepared_chart_points = $('.data_point', $financially_unprepared_chart);
        $investor_underperforms_chart = $('.investor_underperforms-chart');
        investor_underperforms_chart_top = $investor_underperforms_chart.offset().top;
        $investor_underperforms_chart_points = $('.data_point', $investor_underperforms_chart);
        $calculator_data = [
          {
            "age": "18",
            "1k": "$48",
            "2k": "$96",
            "3k": "$144",
            "4k": "$192",
            "5k": "$240",
            "5-10k": "$480"
          }, {
            "age": "25",
            "1k": "$86",
            "2k": "$172",
            "3k": "$258",
            "4k": "$344",
            "5k": "$430",
            "5-10k": "$860"
          }, {
            "age": "30",
            "1k": "$131",
            "2k": "$262",
            "3k": "$393",
            "4k": "$524",
            "5k": "$655",
            "5-10k": "$1,310"
          }, {
            "age": "35",
            "1k": "$201",
            "2k": "$402",
            "3k": "$603",
            "4k": "$804",
            "5k": "$1,005",
            "5-10k": "$2,010"
          }, {
            "age": "40",
            "1k": "$315",
            "2k": "$630",
            "3k": "$945",
            "4k": "$1,260",
            "5k": "$1,575",
            "5-10k": "$3,150"
          }, {
            "age": "45",
            "1k": "$509",
            "2k": "$1,018",
            "3k": "$1,527",
            "4k": "$2,036",
            "5k": "$2,545",
            "5-10k": "$5,090"
          }, {
            "age": "50",
            "1k": "$867",
            "2k": "$1,734",
            "3k": "$2,601",
            "4k": "$3,468",
            "5k": "$4,335",
            "5-10k": "$8,670"
          }, {
            "age": "55",
            "1k": "$1,640",
            "2k": "$3,280",
            "3k": "$4,920",
            "4k": "$6,560",
            "5k": "$8,200",
            "5-10k": "$16,400"
          }, {
            "age": "60",
            "1k": "$4,083",
            "2k": "$8,166",
            "3k": "$12,249",
            "4k": "$16,332",
            "5k": "$20,415",
            "5-10k": "$40,830"
          }
        ];
        scroll_actions.show_data_points = function() {
          $financially_unprepared_chart_points.toggleClass('active', pos + (2 * $window_height / 3) > financially_unprepared_chart_top);
          return $investor_underperforms_chart_points.toggleClass('active', pos + (2 * $window_height / 3) > investor_underperforms_chart_top);
        };
        return $('.next', 'footer').on("click", function() {
          return submit_user_data();
        });
      })();
    }
    if ($('body').hasClass('chapter-4-working-in-retirement')) {
      (function() {
        var $reasons_for_working_chart, $reasons_for_working_chart_points, $top_three_reasons, reasons_for_working_chart_top, top_three_reasons_top;
        $top_three_reasons = $('.top_three_reasons');
        top_three_reasons_top = $top_three_reasons.offset().top;
        $reasons_for_working_chart = $('.reasons_for_working-chart');
        reasons_for_working_chart_top = $reasons_for_working_chart.offset().top;
        $reasons_for_working_chart_points = $('.data_point', $reasons_for_working_chart);
        scroll_actions.animate_pies = function() {
          return $top_three_reasons.toggleClass("active", pos > top_three_reasons_top - $window_height);
        };
        return scroll_actions.show_data_points = function() {
          return $reasons_for_working_chart_points.toggleClass('active', pos + (2 * $window_height / 3) > reasons_for_working_chart_top);
        };
      })();
    }
    if ($('body').hasClass('chapter-5-moving-forward')) {
      (function() {
        var $share_options, email_body, messages, title;
        $share_options = $(".share_options");
        title = encodeURI("PBS NewsHour: The Retiring of Retirement");
        messages = {
          half_of_american_households: "Half of American households have less than $10k in savings.",
          death_of_the_pension: "In 1975, 85% of private sector employees had pensions. In 2013, only 35% do.",
          average_investor: "The average investor underperforms during inflation.",
          no_retirement_savings: "A third of Baby Boomers have no retirement savings."
        };
        email_body = "Hi,\n\nI just finished reading this piece on PBS NewsHour called 'The Retiring of Retirement' about the retirement crisis. Did you know:\n\n- Over half of today's households have less than $10k in savings--nowhere near enough money for retirement.\n- The percentage of workers who expect to work past 65 has more than tripled in 30 years.\n- In 1975, 85% of private sector employees had pensions. In 2013, only 35% do.\n- A third of Baby Boomers have no retirement savings.\n\nThere's a lot more. I thought you might be interested. You can read the whole thing here:\n\n" + PRODUCTION_URL + "\n\nCheers!";
        return $('a', $share_options).each(function() {
          var $this, message, parent_id;
          $this = $(this);
          parent_id = $this.closest('li').attr('id');
          message = encodeURI(messages[parent_id]);
          $this.attr("target", "_blank");
          if ($this.hasClass("twitter")) {
            return $this.attr("href", "http://twitter.com/share?text=" + message + "%20" + title + "&url=" + PRODUCTION_URL);
          } else if ($this.hasClass("facebook")) {
            return $this.attr("href", "http://www.facebook.com/sharer.php?s=100&p[title]=" + title + "&p[summary]=" + message + "&p[url]=" + PRODUCTION_URL);
          } else {
            return $this.attr("href", "mailto:?subject=" + title + "&body=" + (encodeURI(email_body)));
          }
        });
      })();
    }
    $('#sources-open').on("click", function() {
      return $('#sources').fadeIn();
    });
    $('#sources-close').on("click", function(e) {
      e.preventDefault();
      return $('#sources').fadeOut();
    });
    $('#credits-open').on("click", function() {
      return $('#credits').fadeIn();
    });
    return $('#credits-close').on("click", function(e) {
      e.preventDefault();
      return $('#credits').fadeOut();
    });
  });

}).call(this);
