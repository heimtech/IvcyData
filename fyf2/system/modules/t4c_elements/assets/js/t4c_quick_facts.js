!function(t){t(document).ready(function(){t(".ce_t4c_quick_facts").waypoint(function(){var e=t(this.element).attr("data-endval"),a=parseInt(t(this.element).attr("data-duration"))/1e3,n=t(this.element).attr("data-separator"),i=t(this.element).attr("data-decimal"),r=t(this.element).attr("data-prefix"),s=t(this.element).attr("data-suffix"),o=t(".number",this.element).attr("id"),u=!0,d=e.split(".");d=d[1]?d[1].length:0,"none"==i&&(i=""),u="none"==n?!1:!0;var f={useEasing:!0,useGrouping:u,separator:n,decimal:i,prefix:r,suffix:s},c=new countUp(o,0,e,d,a,f);setTimeout(function(){c.start()},500),this.destroy()},{offset:"90%"})})}(jQuery);