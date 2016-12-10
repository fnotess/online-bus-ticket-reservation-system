@extends('layouts.master')

@section('title')
    onlline bus tickets!!!



@section('content')





    <!--[if IE 7]>
    <html class="ie ie7" lang="en-US" prefix="og: http://ogp.me/ns#">
    <![endif]-->
    <!--[if IE 8]>
    <html class="ie ie8" lang="en-US" prefix="og: http://ogp.me/ns#">
    <![endif]-->
    <!--[if !(IE 7) | !(IE 8)  ]><!-->
    <html lang="en-US" prefix="og: http://ogp.me/ns#">
    <!--<![endif]-->
    <head>
        <meta charset="UTF-8"><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,t,n){function r(n){if(!t[n]){var o=t[n]={exports:{}};e[n][0].call(o.exports,function(t){var o=e[n][1][t];return r(o||t)},o,o.exports)}return t[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(e,t,n){function r(){}function o(e,t,n){return function(){return i(e,[(new Date).getTime()].concat(u(arguments)),t?null:this,n),t?void 0:this}}var i=e("handle"),a=e(2),u=e(3),c=e("ee").get("tracer"),f=NREUM;"undefined"==typeof window.newrelic&&(newrelic=f);var s=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit"],l="api-",p=l+"ixn-";a(s,function(e,t){f[t]=o(l+t,!0,"api")}),f.addPageAction=o(l+"addPageAction",!0),f.setCurrentRouteName=o(l+"routeName",!0),t.exports=newrelic,f.interaction=function(){return(new r).get()};var d=r.prototype={createTracer:function(e,t){var n={},r=this,o="function"==typeof t;return i(p+"tracer",[Date.now(),e,n],r),function(){if(c.emit((o?"":"no-")+"fn-start",[Date.now(),r,o],n),o)try{return t.apply(this,arguments)}finally{c.emit("fn-end",[Date.now()],n)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,t){d[t]=o(p+t)}),newrelic.noticeError=function(e){"string"==typeof e&&(e=new Error(e)),i("err",[e,(new Date).getTime()])}},{}],2:[function(e,t,n){function r(e,t){var n=[],r="",i=0;for(r in e)o.call(e,r)&&(n[i]=t(r,e[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;t.exports=r},{}],3:[function(e,t,n){function r(e,t,n){t||(t=0),"undefined"==typeof n&&(n=e?e.length:0);for(var r=-1,o=n-t||0,i=Array(o<0?0:o);++r<o;)i[r]=e[t+r];return i}t.exports=r},{}],ee:[function(e,t,n){function r(){}function o(e){function t(e){return e&&e instanceof r?e:e?c(e,u,i):i()}function n(n,r,o){if(!p.aborted){e&&e(n,r,o);for(var i=t(o),a=v(n),u=a.length,c=0;c<u;c++)a[c].apply(i,r);var f=s[w[n]];return f&&f.push([y,n,r,i]),i}}function d(e,t){b[e]=v(e).concat(t)}function v(e){return b[e]||[]}function g(e){return l[e]=l[e]||o(n)}function m(e,t){f(e,function(e,n){t=t||"feature",w[n]=t,t in s||(s[t]=[])})}var b={},w={},y={on:d,emit:n,get:g,listeners:v,context:t,buffer:m,abort:a,aborted:!1};return y}function i(){return new r}function a(){(s.api||s.feature)&&(p.aborted=!0,s=p.backlog={})}var u="nr@context",c=e("gos"),f=e(2),s={},l={},p=t.exports=o();p.backlog=s},{}],gos:[function(e,t,n){function r(e,t,n){if(o.call(e,t))return e[t];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,t,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[t]=r,r}var o=Object.prototype.hasOwnProperty;t.exports=r},{}],handle:[function(e,t,n){function r(e,t,n,r){o.buffer([e],r),o.emit(e,t,n)}var o=e("ee").get("handle");t.exports=r,r.ee=o},{}],id:[function(e,t,n){function r(e){var t=typeof e;return!e||"object"!==t&&"function"!==t?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");t.exports=r},{}],loader:[function(e,t,n){function r(){if(!h++){var e=y.info=NREUM.info,t=l.getElementsByTagName("script")[0];if(setTimeout(f.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&t))return f.abort();c(b,function(t,n){e[t]||(e[t]=n)}),u("mark",["onload",a()],null,"api");var n=l.createElement("script");n.src="https://"+e.agent,t.parentNode.insertBefore(n,t)}}function o(){"complete"===l.readyState&&i()}function i(){u("mark",["domContent",a()],null,"api")}function a(){return(new Date).getTime()}var u=e("handle"),c=e(2),f=e("ee"),s=window,l=s.document,p="addEventListener",d="attachEvent",v=s.XMLHttpRequest,g=v&&v.prototype;NREUM.o={ST:setTimeout,CT:clearTimeout,XHR:v,REQ:s.Request,EV:s.Event,PR:s.Promise,MO:s.MutationObserver},e(1);var m=""+location,b={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-998.min.js"},w=v&&g&&g[p]&&!/CriOS/.test(navigator.userAgent),y=t.exports={offset:a(),origin:m,features:{},xhrWrappable:w};l[p]?(l[p]("DOMContentLoaded",i,!1),s[p]("load",r,!1)):(l[d]("onreadystatechange",o),s[d]("onload",r)),u("mark",["firstbyte",a()],null,"api");var h=0},{}]},{},["loader"]);</script>
        <title>
            Buy Bus Tickets | Trailways	</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="http://www.trailways.com/xmlrpc.php">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

        <!-- Google Maps -->


        <!-- This site is optimized with the Yoast SEO plugin v3.3.2 - https://yoast.com/wordpress/plugins/seo/ -->
        <meta name="description" content="Buy bus tickets to locations across the United States including: New York, Seattle, Dallas, and beyond."/>
        <meta name="robots" content="noodp"/>
        <link rel="canonical" href="http://www.trailways.com/buy-tickets/" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="Buy Bus Tickets | Trailways" />
        <meta property="og:description" content="Buy bus tickets to locations across the United States including: New York, Seattle, Dallas, and beyond." />
        <meta property="og:url" content="http://www.trailways.com/buy-tickets/" />
        <meta property="og:site_name" content="Trailways" />
        <!-- / Yoast SEO plugin. -->

        <link rel='dns-prefetch' href='//www.trailways.com' />
        <link rel='dns-prefetch' href='//s.w.org' />
        <link rel="alternate" type="application/rss+xml" title="Trailways &raquo; Buy Tickets Comments Feed" href="http://www.trailways.com/buy-tickets/feed/" />
        <script type="text/javascript">
            window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/www.trailways.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.6.1"}};
            !function(a,b,c){function d(a){var c,d,e,f,g,h=b.createElement("canvas"),i=h.getContext&&h.getContext("2d"),j=String.fromCharCode;if(!i||!i.fillText)return!1;switch(i.textBaseline="top",i.font="600 32px Arial",a){case"flag":return i.fillText(j(55356,56806,55356,56826),0,0),!(h.toDataURL().length<3e3)&&(i.clearRect(0,0,h.width,h.height),i.fillText(j(55356,57331,65039,8205,55356,57096),0,0),c=h.toDataURL(),i.clearRect(0,0,h.width,h.height),i.fillText(j(55356,57331,55356,57096),0,0),d=h.toDataURL(),c!==d);case"diversity":return i.fillText(j(55356,57221),0,0),e=i.getImageData(16,16,1,1).data,f=e[0]+","+e[1]+","+e[2]+","+e[3],i.fillText(j(55356,57221,55356,57343),0,0),e=i.getImageData(16,16,1,1).data,g=e[0]+","+e[1]+","+e[2]+","+e[3],f!==g;case"simple":return i.fillText(j(55357,56835),0,0),0!==i.getImageData(16,16,1,1).data[0];case"unicode8":return i.fillText(j(55356,57135),0,0),0!==i.getImageData(16,16,1,1).data[0];case"unicode9":return i.fillText(j(55358,56631),0,0),0!==i.getImageData(16,16,1,1).data[0]}return!1}function e(a){var c=b.createElement("script");c.src=a,c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i;for(i=Array("simple","flag","unicode8","diversity","unicode9"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
        </script>
        <style type="text/css">
            img.wp-smiley,
            img.emoji {
                display: inline !important;
                border: none !important;
                box-shadow: none !important;
                height: 1em !important;
                width: 1em !important;
                margin: 0 .07em !important;
                vertical-align: -0.1em !important;
                background: none !important;
                padding: 0 !important;
            }
        </style>
        <link rel='stylesheet' id='page-list-style-css'  href='http://www.trailways.com/wp-content/plugins/sitemap/css/page-list.css?ver=4.3' type='text/css' media='all' />
        <link rel='stylesheet' id='bootstrap-css'  href='http://www.trailways.com/wp-content/themes/o3framework/includes/libraries/bootstrap/css/bootstrap.min.css?ver=4.6.1' type='text/css' media='all' />
        <link rel='stylesheet' id='flexslider-css'  href='http://www.trailways.com/wp-content/themes/o3framework/includes/libraries/flexslider/flexslider.css?ver=4.6.1' type='text/css' media='all' />
        <link rel='stylesheet' id='o3-styles-css'  href='http://www.trailways.com/wp-content/themes/o3framework/style.css?ver=4.6.1' type='text/css' media='all' />
        <link rel='stylesheet' id='tw-recent-posts-widget-css'  href='http://www.trailways.com/wp-content/plugins/tw-recent-posts-widget/tw-recent-posts-widget.css?ver=1.0.5' type='text/css' media='screen' />
        <script type='text/javascript' src='http://www.trailways.com/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
        <script type='text/javascript' src='http://www.trailways.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
        <script type='text/javascript' src='http://www.trailways.com/wp-content/themes/o3framework/includes/js/iframeResizer.min.js?ver=4.6.1'></script>
        <script type='text/javascript' src='http://www.trailways.com/wp-content/themes/o3framework/includes/libraries/flexslider/jquery.flexslider-min.js?ver=4.6.1'></script>
        <script type='text/javascript'>
            /* <![CDATA[ */
            var o3Ajax = {"ajaxurl":"http:\/\/www.trailways.com\/wp-admin\/admin-ajax.php"};
            /* ]]> */
        </script>
        <script type='text/javascript' src='http://www.trailways.com/wp-content/themes/o3framework/includes/js/o3-functions.js?ver=1.2'></script>
        <link rel='https://api.w.org/' href='http://www.trailways.com/wp-json/' />
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://www.trailways.com/xmlrpc.php?rsd" />
        <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://www.trailways.com/wp-includes/wlwmanifest.xml" />
        <meta name="generator" content="WordPress 4.6.1" />
        <link rel='shortlink' href='http://www.trailways.com/?p=13' />
        <link rel="alternate" type="application/json+oembed" href="http://www.trailways.com/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fwww.trailways.com%2Fbuy-tickets%2F" />
        <link rel="alternate" type="text/xml+oembed" href="http://www.trailways.com/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fwww.trailways.com%2Fbuy-tickets%2F&#038;format=xml" />
    </head>
    <body class="page page-id-13 page-template-default responsive two-col-left">
    <div id="wrapper">
        <header id="header">
            <div class="container-fluid search-bar">
                <div class="container">
                    <form role="search" method="get" id="searchform" action="http://www.trailways.com">
                        <div class="search-wrapper">
                            <label class="screen-reader-text" for="s">
                                <input type="text" placeholder="Search poiyas.com" name="s" id="s" />
                                <input type="submit" id="searchsubmit" value="" />
                        </div>
                    </form>
                    <!-- 					<form role="search" method="get" id="searchform" class="searchform" action="http://www.trailways.com/">
                                    <div>
                                        <label class="screen-reader-text" for="s">Search for:</label>
                                        <input type="text" value="" name="s" id="s" />
                                        <input type="submit" id="searchsubmit" value="Search" />
                                    </div>
                                </form> -->
                </div>
            </div>
            <div class="container">
                <nav class="row main-nav">
                    <div class="col-xs-6 col-sm-4 v-align">
                        <a class="home-link" href="http://www.trailways.com/" rel="home">
                            <h1> POIYA'S</h1>
                        </a>
                    </div><!--
					--><div class="col-xs-6 col-sm-8 v-align main-menu">
                        <div class="menu-main-nav-container"><ul id="menu-main-nav" class="menu"><li id="menu-item-615" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-615"><a href="https://webstore.trailways.com/buy-tickets.asp">Buy Tickets</a></li>
                                <li id="menu-item-457" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-457"><a href="http://www.trailways.com/rent-a-bus/">Register</a></li>
                                <li id="menu-item-23" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23"><a href="http://www.trailways.com/services/">return tickets</a></li>
                                <li id="menu-item-24" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24"><a href="http://www.trailways.com/news/">logout</a></li>
                            </ul></div>					</div>
                </nav>
                <nav class="row mobile-nav">
                    <div class="col-xs-6 col-sm-4 v-align">
                        <a class="home-link" href="http://www.trailways.com/" rel="home">
                            <img src="http://www.trailways.com/wp-content/uploads/2016/09/Trailways-Logo.png">
                        </a>
                    </div><!--
				    --><div class="toggle-bar col-xs-6 v-align">
                        <a class="icon-menu mtoggle" href="#"></a>
                    </div>
                </nav>
                <div class="row menu-row">
                    <div class="col-xs-12">
                        <div class="mmenu">
                            <div class="menu-main-nav-container"><ul id="menu-main-nav-1" class="menu"><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-615"><a href="https://webstore.trailways.com/buy-tickets.asp">Buy Tickets</a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-457"><a href="http://www.trailways.com/rent-a-bus/">Register</a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23"><a href="http://www.trailways.com/services/">return tickets</a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24"><a href="http://www.trailways.com/news/">logout</a></li>
                                </ul></div>						</div>
                    </div>
                </div>
            </div>
        </header>	<div id="main-sidebar-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="breadcrumb breadcrumbs o3-breadcrumbs"><div class="breadcrumb-trail"><a href="http://www.trailways.com" title="poiya's" rel="home" class="trail-begin">Home</a> <span class="sep">/</span> <span class="trail-end">Buy Tickets</span></div></div>				</div>
                </div>
                <div class="row">
                    <section class="col-sm-12 main" role="main">
                        <h1 class="entry-title no-masthead">Buy Tickets</h1>
                        <div class="entry-content">
                            <p><iframe style="border: none; margin-bottom: 60px;" src="https://webstore.tdstickets.com/step1/?carrier=4304" width="100%" height="600"></iframe><br />
                                <script>// <![CDATA[
                                    iFrameResize({log:false, heightCalculationMethod: "bodyOffset", checkOrigin: false, enablePublicMethods:true})
                                    // ]]&gt;</script></p>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <footer id="footer">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="menu-footer-menu-container"><ul id="menu-footer-menu" class="menu"><li id="menu-item-333" class="link-nogo menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-333"><a href="#">About</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-99" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-99"><a href="http://www.trailways.com/our-network/">Trailways Charter Network</a></li>
                                            <li id="menu-item-100" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-100"><a href="http://www.trailways.com/safety/">Safety</a></li>
                                            <li id="menu-item-101" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-101"><a href="http://www.trailways.com/charter-trip-planning/">Charter Trip Planning</a></li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-334" class="link-nogo menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-334"><a href="#">Company</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-103" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-103"><a href="http://www.trailways.com/welcome/">Welcome</a></li>
                                            <li id="menu-item-337" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-337"><a href="http://www.trailways.com/history-milestones/">History Milestones</a></li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-107" class="parent-item menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-107"><a href="http://www.trailways.com/contact-us/">Contact Us</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-641" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-641"><a href="http://www.teamtrailways.com/trailways-driver-recruitment-support/">Jobs/Careers</a></li>
                                            <li id="menu-item-681" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-681"><a href="http://jointrailways.com/">Join the Trailways Brand</a></li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-108" class="parent-item menu-item menu-item-type-post_type menu-item-object-page menu-item-108"><a href="http://www.trailways.com/site-map/">Site Map</a></li>
                                </ul></div>					</div>
                        <div class="col-sm-4">
                            <a href="http://trailways.hotelplanner.com/GroupForm.cfm?sc=Trailways">
                                <img class="primary-cta" src="http://www.trailways.com/wp-content/uploads/2015/09/HotelPlanner_FooterAd.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="disclaimer">
                                <p><span>Disclaimer</span>: All companies in the Trailways network are privately owned or independently operated. The Trailways headquarters office does not own or operate the companies or the vehicles in the network.</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="social-icons">
                                <a class="icon-facebook" href="https://www.facebook.com/Trailways"></a>
                                <a class="icon-twitter" href="https://twitter.com/Trailways"></a>
                                <a class="icon-pinterest-p" href="https://www.pinterest.com/trailways/trailways-bus-trips/"></a>
                                <a class="icon-youtube3" href="https://www.youtube.com/user/TrailwaysVideos/videos"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div><!-- /#wrapper -->
    <script type='text/javascript' src='http://www.trailways.com/wp-includes/js/wp-embed.min.js?ver=4.6.1'></script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-23152365-1', 'auto');
        ga('send', 'pageview');

    </script>
    <script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"f76e30ded9","applicationID":"18524047","transactionName":"Z1daNhRVWRIFB0xcVl4deQESXVgPSxRZUlw=","queueTime":0,"applicationTime":182,"atts":"SxBZQFxPShw=","errorBeacon":"bam.nr-data.net","agent":""}</script></body>
    </html>


@endsection
