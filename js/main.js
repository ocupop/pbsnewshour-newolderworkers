// Generated by CoffeeScript 1.6.1
(function(){$(document).ready(function(){var e,t,n,r,i,s,o;t=$(window);n=t.height();e=$(document).height();t.on("resize",function(){return n=t.height()});$.fn.parallax=function(e){var r,s,o,u;r=$(this);o=r.offset().top;s=Modernizr.prefixed("transform");t.on("resize",function(){return o=r.offset().top});return(u=function(){var t;window.requestAnimationFrame(u);t=Modernizr.csstransforms3d?"translate3d(0, "+(o-i-n)*e+"px, 0)":"translateY("+(o-i-n)*e+"px)";return r.css(s,t)})()};i=1;t.on("scroll",function(){return i=t.scrollTop()});(r=function(){return setTimeout(function(){s.fade_header();s.shrink_header();s.animate_pies();s.show_data_points();return t.one("scroll",r)},100)})();s={};(function(){var e,t,r,o,u,a,f,l,c,h,p;e=$(".chapter-1-rethinking-retirement");r=$(".company_photo",e);f=$(".site_header",e);l=$(".story_header",e);t=$(".chapter_title",e);a=$(".intro",e);p=a.offset().top;c=t.offset().top;o=$(".expectation_chart",e);h=o.offset().top;u=$(".data_point",o);$(".background-image").each(function(){return $(this).parallax(.1)});s.fade_header=function(){var e,t;e=0;t=0;if(n>i){r.css({opacity:(1+e)*(t+n-i)/n});return l.css({opacity:(1+e)*(t+n-i)/n})}};s.shrink_header=function(){var e;e=i/n*100;return f.toggleClass("shown",e>100)};s.animate_pies=function(){return a.toggleClass("active",i>c-n)};s.snag_monument=function(){var e;e=-0.7;return t.css("background-position-y",""+(i+n*e-c)*e/n*100+"%")};return s.show_data_points=function(){return u.toggleClass("active",i>h-400)}})();o={};return function(){var e,t,n;t=$(".user_age");e=$(".how_long_work");(n=function(){var n;n=t.val();return e.toggleClass("show_over_65",n>=65)})();return t.on("keyup change",n)}()})}).call(this);