// Generated by CoffeeScript 1.6.1
(function(){$(document).ready(function(){var e,t,n,r;e=$(window);n=1;(t=function(){return setTimeout(function(){n=e.scrollTop();r.fade_header();r.shrink_header();return e.one("scroll",t)},200)})();r={};return function(){var t,i,s;t=$(".company_photo");s=t.find("img").height();i=$(".site_header");e.on("resize",function(){return s=t.find("img").height()});r.fade_header=function(){var e,r;e=0;r=0;if(s>n){t.css({opacity:(1+e)*(r+s-n)/s});return i.css({opacity:1*(100+s-n)/s})}};return r.shrink_header=function(){s=t.find("img").height();return i.toggleClass("small",n>s)}}()})}).call(this);