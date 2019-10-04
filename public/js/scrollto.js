!function(t){"use strict";"function"==typeof define&&define.amd?define(["jquery"],t):"undefined"!=typeof module&&module.exports?module.exports=t(require("jquery")):t(jQuery)}(function(t){"use strict";function e(e){return!e.nodeName||-1!==t.inArray(e.nodeName.toLowerCase(),["iframe","#document","html","body"])}function o(e){return t.isFunction(e)||t.isPlainObject(e)?e:{top:e,left:e}}var n=t.scrollTo=function(e,o,n){return t(window).scrollTo(e,o,n)};return n.defaults={axis:"xy",duration:0,limit:!0},t.fn.scrollTo=function(s,i,a){"object"==typeof i&&(a=i,i=0),"function"==typeof a&&(a={onAfter:a}),"max"===s&&(s=9e9),a=t.extend({},n.defaults,a),i=i||a.duration;var r=a.queue&&1<a.axis.length;return r&&(i/=2),a.offset=o(a.offset),a.over=o(a.over),this.each(function(){function l(e){var o=t.extend({},a,{queue:!0,duration:i,complete:e&&function(){e.call(h,u,a)}});f.animate(p,o)}if(null!==s){var c,d=e(this),h=d?this.contentWindow||window:this,f=t(h),u=s,p={};switch(typeof u){case"number":case"string":if(/^([+-]=?)?\d+(\.\d+)?(px|%)?$/.test(u)){u=o(u);break}u=d?t(u):t(u,h);case"object":if(0===u.length)return;(u.is||u.style)&&(c=(u=t(u)).offset())}var v=t.isFunction(a.offset)&&a.offset(h,u)||a.offset;t.each(a.axis.split(""),function(t,e){var o="x"===e?"Left":"Top",s=o.toLowerCase(),i="scroll"+o,m=f[i](),b=n.max(h,e);c?(p[i]=c[s]+(d?0:m-f.offset()[s]),a.margin&&(p[i]-=parseInt(u.css("margin"+o),10)||0,p[i]-=parseInt(u.css("border"+o+"Width"),10)||0),p[i]+=v[s]||0,a.over[s]&&(p[i]+=u["x"===e?"width":"height"]()*a.over[s])):(o=u[s],p[i]=o.slice&&"%"===o.slice(-1)?parseFloat(o)/100*b:o),a.limit&&/^\d+$/.test(p[i])&&(p[i]=0>=p[i]?0:Math.min(p[i],b)),!t&&1<a.axis.length&&(m===p[i]?p={}:r&&(l(a.onAfterFirst),p={}))}),l(a.onAfter)}})},n.max=function(o,n){var s="scroll"+(i="x"===n?"Width":"Height");if(!e(o))return o[s]-t(o)[i.toLowerCase()]();var i="client"+i,a=(r=o.ownerDocument||o.document).documentElement,r=r.body;return Math.max(a[s],r[s])-Math.min(a[i],r[i])},t.Tween.propHooks.scrollLeft=t.Tween.propHooks.scrollTop={get:function(e){return t(e.elem)[e.prop]()},set:function(e){var o=this.get(e);if(e.options.interrupt&&e._last&&e._last!==o)return t(e.elem).stop();var n=Math.round(e.now);o!==n&&(t(e.elem)[e.prop](n),e._last=this.get(e))}},n}),function(t){"function"==typeof define&&define.amd?define(["jquery"],t):t(jQuery)}(function(t){var e=location.href.replace(/#.*/,""),o=t.localScroll=function(e){t("body").localScroll(e)};function n(e,o,n){var s=o.hash.slice(1),i=document.getElementById(s)||document.getElementsByName(s)[0];if(i){e&&e.preventDefault();var a=t(n.target);if(!(n.lock&&a.is(":animated")||n.onBefore&&!1===n.onBefore(e,i,a))){if(n.stop&&a.stop(!0),n.hash){var r=i.id===s?"id":"name",l=t("<a> </a>").attr(r,s).css({position:"absolute",top:t(window).scrollTop(),left:t(window).scrollLeft()});i[r]="",t("body").prepend(l),location.hash=o.hash,l.remove(),i[r]=s}a.scrollTo(i,n).trigger("notify.serialScroll",[i])}}}return o.defaults={duration:1e3,axis:"y",event:"click",stop:!0,target:window},t.fn.localScroll=function(s){return(s=t.extend({},o.defaults,s)).hash&&location.hash&&(s.target&&window.scrollTo(0,0),n(0,location,s)),s.lazy?this.on(s.event,"a,area",function(t){i.call(this)&&n(t,this,s)}):this.find("a,area").filter(i).bind(s.event,function(t){n(t,this,s)}).end().end();function i(){return!!this.href&&!!this.hash&&this.href.replace(this.hash,"")===e&&(!s.filter||t(this).is(s.filter))}},o.hash=function(){},o});class StickyNavigation{constructor(){this.currentId=null,this.currentTab=null,this.tabContainerHeight=70,this.lastScroll=0;let t=this;$(".sticky-nav-tab").click(function(){t.onTabClick(event,$(this))}),$(window).scroll(()=>{this.onScroll()}),$(window).resize(()=>{this.onResize()})}onTabClick(t,e){t.preventDefault();let o=$(e.attr("href")).offset().top-this.tabContainerHeight+1;$("html, body").animate({scrollTop:o},600)}onScroll(){this.checkHeaderPosition(),this.findCurrentTabSelector(),this.lastScroll=$(window).scrollTop()}onResize(){this.currentId&&this.setSliderCss()}checkHeaderPosition(){$(window).scrollTop()>75?$(".spa-header").addClass("spa-header--scrolled"):$(".spa-header").removeClass("spa-header--scrolled");let t=$(".sticky-nav-tabs").offset().top+$(".sticky-nav-tabs").height()-this.tabContainerHeight-75;$(window).scrollTop()>this.lastScroll&&$(window).scrollTop()>t?($(".spa-header").addClass("spa-header--move-up"),$(".sticky-nav-tabs-container").removeClass("sticky-nav-tabs-container--top-first"),$(".sticky-nav-tabs-container").addClass("sticky-nav-tabs-container--top-second")):$(window).scrollTop()<this.lastScroll&&$(window).scrollTop()>t?($(".spa-header").removeClass("spa-header--move-up"),$(".sticky-nav-tabs-container").removeClass("sticky-nav-tabs-container--top-second"),$(".sticky-nav-tabs-container").addClass("sticky-nav-tabs-container--top-first")):($(".spa-header").removeClass("spa-header--move-up"),$(".sticky-nav-tabs-container").removeClass("sticky-nav-tabs-container--top-first"),$(".sticky-nav-tabs-container").removeClass("sticky-nav-tabs-container--top-second"))}findCurrentTabSelector(t){let e,o,n=this;$(".sticky-nav-tab").each(function(){let t=$(this).attr("href"),s=$(t).offset().top-n.tabContainerHeight,i=$(t).offset().top+$(t).height()-n.tabContainerHeight;$(window).scrollTop()>s&&$(window).scrollTop()<i&&(e=t,o=$(this))}),this.currentId==e&&null!==this.currentId||(this.currentId=e,this.currentTab=o,this.setSliderCss())}setSliderCss(){let t=0,e=0;this.currentTab&&(t=this.currentTab.css("width"),e=this.currentTab.offset().left),$(".sticky-nav-tab-slider").css("width",t),$(".sticky-nav-tab-slider").css("left",e)}}new StickyNavigation;
