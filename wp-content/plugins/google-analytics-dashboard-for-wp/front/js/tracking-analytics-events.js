"use strict";var gadwpRedirectLink;var gadwpRedirectCalled=false;var gadwpDefaultPrevented=false;function gadwpRedirect(){if(gadwpRedirectCalled){return}gadwpRedirectCalled=true;if(!gadwpDefaultPrevented){document.location.href=gadwpRedirectLink}else{gadwpDefaultPrevented=false}}jQuery(window).on("load",function(){if(gadwpUAEventsData.options.event_tracking){jQuery("a").filter(function(){var a=new RegExp(".*\\.("+gadwpUAEventsData.options.event_downloads+")(\\?.*)?$");return this.href.match(a)}).click(function(d){var b=this.getAttribute("data-vars-ga-category")||"download";var c=this.getAttribute("data-vars-ga-action")||"click";var a=this.getAttribute("data-vars-ga-label")||this.href;if(gadwpUAEventsData.options.event_bouncerate){ga("send","event",b,c,a,{nonInteraction:1})}else{ga("send","event",b,c,a)}});jQuery('a[href^="mailto"]').click(function(d){var b=this.getAttribute("data-vars-ga-category")||"email";var c=this.getAttribute("data-vars-ga-action")||"send";var a=this.getAttribute("data-vars-ga-label")||this.href;if(gadwpUAEventsData.options.event_bouncerate){ga("send","event",b,c,a,{nonInteraction:1})}else{ga("send","event",b,c,a)}});jQuery('a[href^="tel"]').click(function(d){if(gadwpUAEventsData.options.event_bouncerate){var b=this.getAttribute("data-vars-ga-category")||"telephone";var c=this.getAttribute("data-vars-ga-action")||"call";var a=this.getAttribute("data-vars-ga-label")||this.href;ga("send","event",b,c,a,{nonInteraction:1})}else{ga("send","event",b,c,a)}});if(gadwpUAEventsData.options.root_domain){jQuery('a[href^="http"]').filter(function(){var a=new RegExp(".*\\.("+gadwpUAEventsData.options.event_downloads+")(\\?.*)?$");if(!this.href.match(a)){if(this.href.indexOf(gadwpUAEventsData.options.root_domain)==-1){return this.href}}}).click(function(d){gadwpRedirectCalled=false;gadwpRedirectLink=this.href;var b=this.getAttribute("data-vars-ga-category")||"outbound";var c=this.getAttribute("data-vars-ga-action")||"click";var a=this.getAttribute("data-vars-ga-label")||this.href;if(gadwpUAEventsData.options.event_bouncerate){ga("send","event",b,c,a,{nonInteraction:1,hitCallback:gadwpRedirect})}else{ga("send","event",b,c,a,{hitCallback:gadwpRedirect})}if(this.target!="_blank"){if(d.isDefaultPrevented()){gadwpDefaultPrevented=true}setTimeout(gadwpRedirect,gadwpUAEventsData.options.event_timeout);return false}else{gadwpRedirectCalled=true}})}}if(gadwpUAEventsData.options.event_affiliates&&gadwpUAEventsData.options.aff_tracking){jQuery("a").filter(function(){if(gadwpUAEventsData.options.event_affiliates!=""){var a=new RegExp("("+gadwpUAEventsData.options.event_affiliates.replace(/\//g,"/")+")");return this.href.match(a)}}).click(function(c){gadwpRedirectCalled=false;gadwpRedirectLink=this.href;var b=this.getAttribute("data-vars-ga-category")||"affiliates";var d=this.getAttribute("data-vars-ga-action")||"click";var a=this.getAttribute("data-vars-ga-label")||this.href;if(gadwpUAEventsData.options.event_bouncerate){ga("send","event",b,d,a,{nonInteraction:1,hitCallback:gadwpRedirect})}else{ga("send","event",b,d,a,{hitCallback:gadwpRedirect})}if(this.target!="_blank"){if(e.isDefaultPrevented()){gadwpDefaultPrevented=true}setTimeout(gadwpRedirect,gadwpUAEventsData.options.event_timeout);return false}else{gadwpRedirectCalled=true}})}if(gadwpUAEventsData.options.root_domain&&gadwpUAEventsData.options.hash_tracking){jQuery("a").filter(function(){if(this.href.indexOf(gadwpUAEventsData.options.root_domain)!=-1||this.href.indexOf("://")==-1){return this.hash}}).click(function(d){var b=this.getAttribute("data-vars-ga-category")||"hashmark";var c=this.getAttribute("data-vars-ga-action")||"click";var a=this.getAttribute("data-vars-ga-label")||this.href;if(gadwpUAEventsData.options.event_bouncerate){ga("send","event",b,c,a,{nonInteraction:1})}else{ga("send","event",b,c,a)}})}if(gadwpUAEventsData.options.event_formsubmit){jQuery('input[type="submit"]').click(function(f){var d=this;var b=d.getAttribute("data-vars-ga-category")||"form";var c=d.getAttribute("data-vars-ga-action")||"submit";var a=d.getAttribute("data-vars-ga-label")||d.name||d.value;if(gadwpUAEventsData.options.event_formsubmit){ga("send","event",b,c,a,{nonInteraction:1})}else{ga("send","event",b,c,a)}})}if(gadwpUAEventsData.options.ga_pagescrolldepth_tracking){jQuery.scrollDepth({percentage:true,userTiming:false,pixelDepth:false,gtmOverride:true,nonInteraction:gadwpUAEventsData.options.event_bouncerate})}});