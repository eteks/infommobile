!function(t){"use strict";var e=function(e,s){this.options=t.extend({},t.fn.letterfx.defaults,s),this.num_completed_fx=0,this.is_done=!1,this.monitor_timer=null,this.killswitch=null,this.$element=t(e),this.options.restore&&(this.original_html=this.$element.html()),this.init()};e.prototype.init=function(){return this.new_html=this.$element.text().replace(this.options.pattern,this.options.replacement),this.$element.addClass(this.options.css.element.base).addClass(this.options.css.element.before),this.$element.html(this.new_html),this.$letters=this.$element.find(this.options.selector),this.$letters.css("transition-duration",this.options.fx_duration).addClass(this.options.css.letters.base).addClass(this.options.css.letters.before),this.bindLetterFxEnd(),this.num_letters=this.$letters.length,this.fx(),this},e.prototype.bindLetterFxEnd=function(){var e=this.options,s=this;return this.$letters.bind("transitionend",function(){switch(e.onLetterComplete(t(this),s.$element,s),s.notifyFXEnd(),e.letter_end){case"destroy":t(this).remove();break;case"rewind":s.applyLetterFx(t(this),e.timing,e.css.letters.after,e.css.letters.before);break;case"stay":break;default:t(this).replaceWith(t(this).text())}}),s},e.prototype.terminate=function(){switch(this.is_done=!0,this.options.onElementComplete(this.$element,this),clearTimeout(this.killswitch),this.options.element_end){case"destroy":this.$element.remove();break;case"stay":break;default:this.$element.html(this.original_html),this.$element.removeClass(this.options.css.element.base).removeClass(this.options.css.element.after)}},e.prototype.notifyFXEnd=function(){clearTimeout(this.monitor_timer),this.num_completed_fx++;var t=this;return this.monitor_timer=setTimeout(function(){t.num_completed_fx%t.num_letters===0&&t.terminate()},Math.max(this.options.timing+10,50)),this},e.prototype.startKillWatch=function(){var t=this.options.fx_duration.match(/\d+s/)?parseInt(this.options.fx_duration):1,e=Math.ceil(1.5*this.num_letters*this.options.timing*t),s=this;this.killswitch=window.setTimeout(function(){s.isDone()||s.terminate()},e)},e.prototype.fx=function(){var e=this;this.startKillWatch(),this.$element.removeClass(this.options.css.element.before).addClass(this.options.css.element.after);var s=this.options.sort(this.$letters),n=this.options;return s.each(function(s,i){e.applyLetterFx(t(i),(s+1)*n.timing,n.css.letters.before,n.css.letters.after)}),this},e.prototype.applyLetterFx=function(t,e,s,n){this.options;return window.setTimeout(function(){t.removeClass(s).addClass(n)},e),this},e.prototype.isDone=function(){return this.is_done};var s=function(e){this.config=t.extend({},t.fn.letterfx.defaults,e),this.buildCss(this.config.backwards),this.config.words&&(this.config.pattern=/(\S+)/g)};s.prototype.buildCss=function(e){var s=this.config,n=e?"after":"before",i=e?"before":"after",r={element:{},letters:{}};r.element.base=s.element_class+"-container "+s.fx.replace(/(\S+)/g,s.element_class+"-$1-container"),r.element[n]=s.fx.replace(/(\S+)/g,s.element_class+"-$1-before-container"),r.element[i]=s.fx.replace(/(\S+)/g,s.element_class+"-$1-after-container"),r.letters.base=s.element_class,r.letters[n]=s.fx.replace(/(\S+)/g,s.element_class+"-$1-before"),r.letters[i]=s.fx.replace(/(\S+)/g,s.element_class+"-$1-after"),this.config=t.extend(s,{css:r})},s.prototype.getConfig=function(){return this.config},s.parse=function(t){return new s(t).getConfig()},t.fn.letterfx=function(n){return n=s.parse(n),t(this).each(function(){var s=t(this);(!s.data("letterfx-obj")||s.data("letterfx-obj").isDone())&&s.data("letterfx-obj",new e(s,n))})},t.fn.letterfx.sort={random:function(t){for(var e,s,n=t.length;0!==n;)s=Math.floor(Math.random()*n),n-=1,e=t[n],t[n]=t[s],t[s]=e;return t},reverse:function(t){return t.toArray().reverse()}},t.fn.letterfx.patterns={letters:/(\S)/gi},t.fn.letterfx.defaults={fx:"spin fly-top",pattern:/(\S)/gi,word:!1,backwards:!1,replacement:"<span>$1</span>",selector:"span",timing:50,fx_duration:"1s",sort:function(t){return t},onLetterComplete:function(t,e,s){},onElementComplete:function(t,e){},letter_end:"restore",element_end:"restore",restore:!0,destroy:!1,element_class:"letterfx",css:{element:{base:"",before:"",after:""},letters:{base:"",before:"",after:""}}}}(jQuery);