// Generated by CoffeeScript 1.6.1
(function(){$(document).ready(function(){var e,t,n,r,i,s,o;t=$(window);i=1;(r=function(){return setTimeout(function(){i=t.scrollTop();s.fade_header();s.shrink_header();s.snag_monument();s.show_data_points();return t.one("scroll",r)},10)})();n=t.height();e=$(document).height();t.on("resize",function(){return n=t.height()});s={};(function(){var e,t,r,o,u,a,f,l;t=$(".company_photo");u=$(".chapter-1-rethinking-retirement .site_header");a=$(".chapter-1-rethinking-retirement .story_header");e=$(".chapter_title");f=e.offset().top;r=$(".expectation_chart");l=r.offset().top;o=$(".expectation_chart .data_point");s.fade_header=function(){var e,r;e=0;r=0;if(n>i){t.css({opacity:(1+e)*(r+n-i)/n});return a.css({opacity:(1+e)*(r+n-i)/n})}};s.shrink_header=function(){var e;e=i/n*100;return u.toggleClass("shown",e>100)};s.snag_monument=function(){var e;return e=-0.7};return s.show_data_points=function(){return o.toggleClass("active",i>l-400)}})();o={};return function(){var e,t,n;t=$(".user_age");e=$(".how_long_work");(n=function(){var n;n=t.val();return e.toggleClass("show_over_65",n>=65)})();return t.on("keyup change",n)}()})}).call(this);