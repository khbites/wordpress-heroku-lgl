/*
 EasyRecipe  3.2.1311 Copyright (c) 2014 BoxHill LLC
*/
window.EASYRECIPE=window.EASYRECIPE||{};EASYRECIPE.widget=EASYRECIPE.widget||jQuery.widget;EASYRECIPE.jqButton=EASYRECIPE.jqButton||jQuery.fn.button;
(function(c){function m(b){b=Math.floor(5*(b.clientX-l)/95+1);b=5<b?5:b;b!==d&&(d=b,g.width(20*b+"%"))}function n(){d=h.val();g.width(20*d+"%")}function p(){h.val(d)}var l,d=0,g,h;c(function(){var b=null,d=null,a,k,f,e;a=EASYRECIPE;jQuery.widget!==a.widget&&(b=jQuery.widget,jQuery.widget=a.widget);c.fn.button!==a.jqButton&&(d=c.fn.button,c.fn.button=a.jqButton);try{c(".easyrecipe .ERSPrintBtn").button({icons:{primary:"ERSPrintIcon"}}),c(".easyrecipe .ERSSaveBtn").button({icons:{primary:"ERSSaveIcon"}})}catch(q){}e=
c(".ERComment");0<e.length&&(a=e.parents("form"),k=a.find(":submit"),f=k.parent(),f===a?k.before(e):f.hasClass("art-button-wrapper")?f.before(e):f.prepend(e),a=c(".ERRateBG"),l=a.offset().left,g=c(".ERRateStars"),h=c(".inpERRating"),g.width(0),a.mousemove(m),a.mouseleave(n),a.click(p));null!==b&&(jQuery.widget=b);null!==d&&(c.fn.button=d)})})(jQuery);
