// Generated by CoffeeScript 1.6.1
(function(){var e;e="http://www.pbs.org/newshour/new-older-workers/";$(document).ready(function(){var t,n,r,i,s,o,u,a,f,l;n=$(window);r=n.height();t=$(document).height();o=1;(a=function(){window.requestAnimationFrame(a);return o=n.scrollTop()})();n.on("resize",function(){return r=n.height()});$.fn.parallax=function(e){var t,r,i,s;t=$(this);i=t.offset().top;r=Modernizr.prefixed("transform");n.on("resize",function(){return i=t.offset().top});return(s=function(){window.requestAnimationFrame(s);return t.css(r,"translateY("+(i-o)*e+"px)")})()};$(".parallax").each(function(){return $(this).parallax($(this).data("plax")||-0.3)});u={};(s=function(){return setTimeout(function(){var e;for(e in u)u[e]();return n.one("scroll",s)},300)})();f=null;(i=function(){var e;$("input").each(function(){var e,t,n;e=$(this);t="retiring__"+e.attr("name");n=$.cookie(t);if(e.attr("type")==="radio"){e.val()===n&&e.attr("checked",!0);return e.on("click",function(){return $.cookie(t,e.val())})}n&&e.val(n);return e.on("keyup change",function(n){return $.cookie(t,e.val())})});e="https://docs.google.com/forms/d/18Sj-Hj1y3-n-4fBjxY_lu_sWjHvHGg9ZWzryNbZLiPQ/formResponse";return f=function(){var t;t={"entry.1280847796":$.cookie("retiring__age"),"entry.981715763":$.cookie("retiring__retiree"),"entry.1251379033":$.cookie("retiring__retire_before"),"entry.1192439293":$.cookie("retiring__satisfaction"),"entry.2021902959":$.cookie("retiring__gender"),"entry.1488207989":$.cookie("retiring__community_size")};return $.post("ba-simple-proxy.php?url="+e,t,function(){$.removeCookie("retiring__age");$.removeCookie("retiring__retiree");$.removeCookie("retiring__retire_before");$.removeCookie("retiring__satisfaction");$.removeCookie("retiring__gender");return $.removeCookie("retiring__community_size")})}})();(l=function(){var e;window.video_stack=[];e=function(e){var t,n,r;if(e){r=e.split(":"),t=r[0],n=r[1];return+n+ +t*60}};return $(".video-container").each(function(){var t,n,i,s,a,f,l,c;i=$(this);t=i.closest(".video");f="player_"+Date.now();c="http://player.vimeo.com/video/"+i.data("src")+"?api=1&player_id="+f;n=$("<iframe id='"+f+"' width='100%' height='100%' src='"+c+"' frameborder='0' allowFullScreen></iframe>");l=e(i.data("start"));s=e(i.data("end"));i.append(n);a=$f(n[0]);return a.addEvent("ready",function(){var e;video_stack.push(f);a.addEvent("play",function(){var e,n,r;for(n=0,r=video_stack.length;n<r;n++){e=video_stack[n];e!==f&&$f(e).api("pause")}t.addClass("playing");return null});a.addEvent("finish",function(){return t.removeClass("playing")});a.addEvent("playProgress",function(e){var n;n=+e.seconds;if(s&&n>s){$f(f).api("pause");$f(f).api("seekTo",0);t.removeClass("playing");t.addClass("ended");return a.removeEvent("playProgress")}});if(l){$f(f).api("seekTo",l);$f(f).api("pause")}t.find(".play").on("click",function(){return $f(f).api("play")});if(i.data("autoplay")){e=i.offset().top;return u[this.id]=function(){if(!i.hasClass("played")&&o+r/2>e){i.addClass("played");return $f(f).api("play")}}}})})})();$("body").hasClass("chapter-1-rethinking-retirement")&&function(){var e,t,n,i,s,a,f,l,c,h,p,d,v,m,g,y;c=$(".site_header");h=$(".story_header_wrapper");t=$(".chapter_title");n=$(".intro");d=t.offset().top;a=$(".percentage_of_workers-chart");m=a.offset().top;f=$(".data_point",a);i=$(".labor_force-chart");v=i.offset().top;s=$(".data_point",i);p=$(".user_age");e=$(".age_and_retirement");l=$(".retirement_expectations");u.fade_header=function(){var e,t;e=0;t=0;if(r>o)return h.css({opacity:(1+e)*(t+r-o)/r})};u.shrink_header=function(){var e;e=o/r*100;return c.toggleClass("shown",e>100)};u.animate_pies=function(){return n.toggleClass("active",o>d-r)};u.show_data_points=function(){f.toggleClass("active",o+2*r/3>m);return s.toggleClass("active",o+2*r/3>v)};(g=function(){var t,n;t=p.val();e.toggleClass("show_over_65",t>=65);n=t<25?"age-all":t<35?"age-25-34":t<45?"age-35-44":t<55?"age-45-54":"age-55plus";return l.removeClass("age-all age-25-34 age-35-44 age-45-54 age-55plus").addClass(n)})();p.on("keyup change",g);(y=function(){var e;if(p.val()<65){e=$("[name='retire_before']:checked").data("slug");return $(".splitbar-item").removeClass("your_answer").filter("."+e).addClass("your_answer")}return $(".splitbar-item").removeClass("your_answer")})();p.on("keyup change",y);return $("[name='retire_before']").on("click",y)}();$("body").hasClass("chapter-2-a-snapshot")&&function(){var e,t,n,r,i;n=$("#gender_selector");t=$("#gender_container");i=n.offset().top;r=t.offset().top+t.height();e=$(".community_changes");u.sticky_gender_selector=function(){return n.toggleClass("sticky",i-60<o&&o<r-240)};return $(".community_size_selection").each(function(){var t,n;n=$(this);t=e.find("."+n.data("value"));n.hover(function(){return t.addClass("hover")},function(){return t.removeClass("hover")});return n.on("click",function(){$(".community_size_selection.click").removeClass("click");n.addClass("click");e.find(".click").removeClass("click");return t.addClass("click")})})}();$("body").hasClass("chapter-3-working-for-the-nest-egg")&&function(){var e,t,n,i,s,a,l,c,h,p;t=$(".financially_unprepared-chart");c=t.offset().top;n=$(".data_point",t);i=$(".investor_underperforms-chart");h=i.offset().top;s=$(".data_point",i);a=$(".user_age");e=$('input[name="estimated_income"]');window.calculator_data={18:{"1k":"$48","2k":"$96","3k":"$144","4k":"$192","5k":"$240","5-10k":"$480"},25:{"1k":"$86","2k":"$172","3k":"$258","4k":"$344","5k":"$430","5-10k":"$860"},30:{"1k":"$131","2k":"$262","3k":"$393","4k":"$524","5k":"$655","5-10k":"$1,310"},35:{"1k":"$201","2k":"$402","3k":"$603","4k":"$804","5k":"$1,005","5-10k":"$2,010"},40:{"1k":"$315","2k":"$630","3k":"$945","4k":"$1,260","5k":"$1,575","5-10k":"$3,150"},45:{"1k":"$509","2k":"$1,018","3k":"$1,527","4k":"$2,036","5k":"$2,545","5-10k":"$5,090"},50:{"1k":"$867","2k":"$1,734","3k":"$2,601","4k":"$3,468","5k":"$4,335","5-10k":"$8,670"},55:{"1k":"$1,640","2k":"$3,280","3k":"$4,920","4k":"$6,560","5k":"$8,200","5-10k":"$16,400"},60:{"1k":"$4,083","2k":"$8,166","3k":"$12,249","4k":"$16,332","5k":"$20,415","5-10k":"$40,830"}};(l=function(){var e,t,n,r,i;e=+a.val();t=$('input[name="estimated_income"]:checked').val();r=e<25?18:e>60?60:Math.floor(e/5)*5;n=(i=calculator_data[r])!=null?i[t]:void 0;if(n){$("#calculator-result-value").text(n);return $(".form_conclusion").addClass("show_result")}})();a.on("change",l);e.on("change",l);u.show_data_points=function(){n.toggleClass("active",o+2*r/3>c);return s.toggleClass("active",o+2*r/3>h)};(p=function(){var e;e=$("[name='confidence']:checked").data("slug");return $(".splitbar-item").removeClass("your_answer").filter("."+e).addClass("your_answer")})();$("[name='confidence']").on("click",p);return $(".next","footer").on("click",function(){return f()})}();$("body").hasClass("chapter-4-working-in-retirement")&&function(){var e,t,n,i,s;n=$(".top_three_reasons");s=n.offset().top;e=$(".reasons_for_working-chart");i=e.offset().top;t=$(".data_point",e);u.animate_pies=function(){return n.toggleClass("active",o>s-r)};return u.show_data_points=function(){return t.toggleClass("active",o+2*r/3>i)}}();$("body").hasClass("chapter-5-moving-forward")&&function(){var t,n,r,i;t=$(".share_options");i=encodeURI("PBS NewsHour: The Retiring of Retirement");r={half_of_american_households:"Half of American households have less than $10k in savings.",death_of_the_pension:"In 1975, 85% of private sector employees had pensions. In 2013, only 35% do.",average_investor:"The average investor underperforms during inflation.",no_retirement_savings:"A third of Baby Boomers have no retirement savings."};n="Hi,\n\nI just finished reading this piece on PBS NewsHour called 'The Retiring of Retirement' about the retirement crisis. Did you know:\n\n- Over half of today's households have less than $10k in savings--nowhere near enough money for retirement.\n- The percentage of workers who expect to work past 65 has more than tripled in 30 years.\n- In 1975, 85% of private sector employees had pensions. In 2013, only 35% do.\n- A third of Baby Boomers have no retirement savings.\n\nThere's a lot more. I thought you might be interested. You can read the whole thing here:\n\n"+e+"\n\nCheers!";return $("a",t).each(function(){var t,s,o;t=$(this);o=t.closest("li").attr("id");s=encodeURI(r[o]);t.attr("target","_blank");return t.hasClass("twitter")?t.attr("href","http://twitter.com/share?text="+s+"%20"+i+"&url="+e):t.hasClass("facebook")?t.attr("href","http://www.facebook.com/sharer.php?s=100&p[title]="+i+"&p[summary]="+s+"&p[url]="+e):t.attr("href","mailto:?subject="+i+"&body="+encodeURI(n))})}();$("#live_pie-under65-open").on("click",function(){return $("#live_pie-under65").fadeIn()});$("#live_pie-under65-close").on("click",function(e){e.preventDefault();return $("#live_pie-under65").fadeOut()});$("#live_pie-over65-open").on("click",function(){return $("#live_pie-over65").fadeIn()});$("#live_pie-over65-close").on("click",function(e){e.preventDefault();return $("#live_pie-over65").fadeOut()});$("#live_pie-gender-open").on("click",function(){return $("#live_pie-gender").fadeIn()});$("#live_pie-gender-close").on("click",function(e){e.preventDefault();return $("#live_pie-gender").fadeOut()});$("#live_pie-community-open").on("click",function(){return $("#live_pie-community").fadeIn()});$("#live_pie-community-close").on("click",function(e){e.preventDefault();return $("#live_pie-community").fadeOut()});$("#sources-open").on("click",function(){return $("#sources").fadeIn()});$("#sources-close").on("click",function(e){e.preventDefault();return $("#sources").fadeOut()});$("#credits-open").on("click",function(){return $("#credits").fadeIn()});$("#credits-close").on("click",function(e){e.preventDefault();return $("#credits").fadeOut()});return $(document).on("keyup",function(e){if(e.keyCode===27){$("#live_pie-under65").fadeOut();$("#live_pie-over65").fadeOut();$("#live_pie-gender").fadeOut();$("#live_pie-community").fadeOut();$("#sources").fadeOut();return $("#credits").fadeOut()}})})}).call(this);