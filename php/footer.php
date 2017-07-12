
<!-- Footer start -->
<footer id="footWrapper">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="cell-12">
                    <h3 class="block-head">Quick Links</h3></div>
                <div class="cell-2">
                    <ul class="footer-menu">
                        <li><a href="dedicated-hosting-server.html">Dedicated Server</a></li>
                        <li><a href="linux-server.html">Linux Server</a></li>
                        <li><a href="window-server.html">Window Server</a></li>
                        <li><a href="linux-mail-server.html">Mail Server</a></li>
                        <li><a href="linux_web_server.html">Web Server</a></li>
                    </ul>
                </div>
                <div class="cell-2">
                    <ul class="footer-menu">
                        <li><a href="linux-ftp-server.html">FTP Server</a></li>
                        <li><a href="dedicated-hosting.html">Dedicated Hosting</a></li>
                        <li><a href="server-maintenance.html">Server Maintenance</a></li>
                        <li><a href="vps-hosting.html">VPS Hosting</a></li>
                        <li><a href="shared-windows-hosting.html">Windows Shared Hosting</a></li>
                    </ul>
                </div>
                <div class="cell-2">
                    <ul class="footer-menu">
                        <li><a href="http://cp.sixthstartech.com/" target="_blank">Domain Registration</a></li>
                        <li><a href="shared-cpanel-hosting.html">Shared CPanel Hosting</a></li>
                        <li><a href="shared-zimbra-hosting.html">Shared Zimbra Hosting</a></li>
                        <li><a href="data-centers-hosting.html">Datacenter Hosting</a></li>
<!--                         <li><a href="windows-hosting.html">Windows Hosting</a></li>
 -->                    </ul>
                </div>
                <div class="cell-2">
                    <ul class="footer-menu">
                        <li><a href="ssl_certificates.html">SSL Certificate</a></li>
                        <li><a href="spam-gateway-service.html">Spam Gateway Service</a></li>
                        <li><a href="dedicated-zimbra-features.html">Dedicated Zimbra Features</a></li>
                        <li><a href="mobile-apps.html">Mobile Apps</a></li>
                        <li><a href="web-design.html">Web Design</a></li>
                    </ul>
                </div>
                <div class="cell-2">
                    <ul class="footer-menu">
                        <li><a href="responsive-web-designing.html">Responsive Web Design</a></li>
                        <li><a href="php-programing.html">Web Development</a></li>
                        <li><a href="seo.html">SEO</a></li>
                        <li><a href="website-redesign.html">Website Redesign </a></li>
                        <li><a href="testimonials.html">Testimonial</a></li>
                    </ul>
                </div>
                <div class="cell-2">
                    <ul class="footer-menu">
                        <li><a href="clients.html">Clients</a></li>
                        <li><a href="faq.html">FAQ's</a></li>
                        <li><a href="video.html"> Videos</a></li>
                        <li><a href="social.html"> Social Media</a></li>
                        <li><a href="sitemap.html">Sitemap</a></li>
                        <li><a href="terms-and-conditions.html">Terms & Conditions</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- footer bottom bar start -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <!-- footer copyrights left cell -->
                <div class="copyrights cell-5"> <span style="color: #fff !important;font-size: 13px">Copyright © <?php echo date("Y"); ?> </span> <span style="color: #4F9FD1 !important;font-size: 13px;"> <a href="http://sixthstartech.com" target="_blank"> SixthStar Technologies</span></a> <span style="color: #fff !important;font-size: 13px"> | All Rights Reserved</span> </div>
                <!-- footer social links right cell start -->
                <div class="cell-7">
                    <ul class="social-list right">
                        <?php if($res['dribbble_settings']=='Y' and $res['dribbble']!='') {?><li class="skew-25"><a target="_blank" href="<?php echo $conn->stripval($res['dribbble']); ?>" data-title="dribbble"><span class="fa fa-dribbble skew25"></span></a></li><?php } ?>
                        <?php if($res['facebook_settings']=='Y' and $res['facebook']!='') {?><li class="skew-25"><a target="_blank" href="<?php echo $conn->stripval($res['facebook']); ?>" data-title="facebook"><span class="fa fa-facebook skew25"></span></a></li><?php } ?>
                        <?php if($res['linkedin_settings']=='Y' and $res['linkedin']!='') {?><li class="skew-25"><a target="_blank" href="<?php echo $conn->stripval($res['linkedin']); ?>" data-title="linkedin"><span class="fa fa-linkedin skew25"></span></a></li><?php } ?>
                        <?php if($res['googleplus_settings']=='Y' and $res['googleplus']!='') {?><li class="skew-25"><a target="_blank" href="<?php echo $conn->stripval($res['googleplus']); ?>" data-title="google-plus"><span class="fa fa-google-plus skew25"></span></a></li><?php } ?>
                        <?php if($res['instagram_settings']=='Y' and $res['instagram']!='') {?><li class="skew-25"><a target="_blank" href="<?php echo $conn->stripval($res['instagram']); ?>" data-title="instagram"><span class="fa fa-instagram skew25"></span></a></li><?php } ?>
                        <?php if($res['twitter_settings']=='Y' and $res['twitter']!='') {?><li class="skew-25"><a target="_blank" href="<?php echo $conn->stripval($res['twitter']); ?>" data-title="twitter"><span class="fa fa-twitter skew25"></span></a></li><?php } ?>
                        <?php if($res['youtube_settings']=='Y' and $res['youtube']!='') {?><li class="skew-25"><a target="_blank" href="<?php echo $conn->stripval($res['youtube']); ?>" data-title="YouTube"><span class="fa fa-youtube skew25"></span></a></li><?php } ?>
                    </ul>
                </div>
                <!-- footer social links right cell end -->
            </div>
        </div>
    </div>
    <!-- footer bottom bar end -->
</footer>
<!-- Footer end -->
<!-- Back to top Link -->
<div id="to-top" class="main-bg"><span class="fa fa-chevron-up"></span></div>
<!-- Load JS siles -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- Waypoints script -->
<script type="text/javascript" src="js/waypoints.min.js"></script>
<!-- SLIDER REVOLUTION SCRIPTS  -->
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<!-- slick slider carousel -->
<script type="text/javascript" src="js/slick.min.js"></script>
<!-- Animate numbers increment -->
<script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
<!-- PrettyPhoto script -->
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<!-- Share post plugin script -->
<script type="text/javascript" src="js/jquery.sharrre.min.js"></script>
<!-- Product images zoom plugin -->
<script type="text/javascript" src="js/jquery.elevateZoom-3.0.8.min.js"></script>
<!-- Input placeholder plugin -->
<script type="text/javascript" src="js/jquery.placeholder.js"></script>
<!-- NiceScroll plugin -->
<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
<!-- isotope plugin -->
<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
<!-- general script file -->
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/jquery.vticker-min.js"></script>
<!-- <script type="text/javascript" src="js/tabs2/index.js"></script> -->
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/ahpi.imgload.js"></script>
<script src="js/fakeLoader.min.js"></script>
<script>
$(document).ready(function() {
    $(".fakeloader").fakeLoader({
        timeToHide: 1500,
        bgColor: "#f7f7f7",
        spinner: "spinner3"
    });
});
</script>
<script type="text/javascript">
$(function() {
    $('#news-container').vTicker({
        speed: 500,
        pause: 3000,
        animation: 'fade',
        mousePause: true,
        showItems: 1
    });
    $('#news-container1').vTicker({
        speed: 500,
        pause: 3000,
        animation: 'fade',
        mousePause: true,
        showItems: 1
    });
    $('#news-container3').vTicker({
        speed: 500,
        pause: 3000,
        animation: 'fade',
        mousePause: true,
        showItems: 1
    });
});

function showSelectorContent(content) {
    $('#selector_content').php($(content).attr('title1'))

}
</script>
<script>
var nbOptions = 8;
var angleStart = -360;

// jquery rotate animation
function rotate(li, d) {
    $({
        d: angleStart
    }).animate({
        d: d
    }, {
        step: function(now) {
            $(li)
                .css({
                    transform: 'rotate(' + now + 'deg)'
                })
                .find('label')
                .css({
                    transform: 'rotate(' + (-now) + 'deg)'
                });
        },
        duration: 0
    });
}

// show / hide the options
function toggleOptions(s) {
    $(s).toggleClass('open');
    var li = $(s).find('li');
    var deg = $(s).hasClass('half') ? 180 / (li.length - 1) : 360 / li.length;
    for (var i = 0; i < li.length; i++) {
        var d = $(s).hasClass('half') ? (i * deg) - 90 : i * deg;
        $(s).hasClass('open') ? rotate(li[i], d) : rotate(li[i], angleStart);
    }
}

$('.selector button').click(function(e) {
    toggleOptions($(this).parent());
});

setTimeout(function() {
    toggleOptions('.selector');
}, 100); //@ sourceURL=pen.js
</script>
<script type="text/javascript">
(function($) {
    "use strict";
    var slider = new MasterSlider();
    // adds Arrows navigation control to the slider.
    slider.control('arrows');
    slider.control('bullets');

    slider.setup('masterslider', {
        width: 1400, // slider standard width
        height: 750, // slider standard height
        space: 0,
        speed: 45,
        layout: 'fullwidth',
        loop: true,
        preload: 0,
        overPause: true,
        autoplay: true,
        view: "parallax"
    });
})(jQuery);
</script>
<script type="text/javascript">
(function($) {
    "use strict";
    var slider = new MasterSlider();
    slider.setup('masterslider2', {
        width: 1400, // slider standard width
        height: 580, // slider standard height
        space: 1,
        layout: 'fullwidth',
        loop: true,
        preload: 0,
        autoplay: true
    });
})(jQuery);
</script>
<script>
(function($) {
    "use strict";

    $('.accordion, .tabs').TabsAccordion({
        hashWatch: true,
        pauseMedia: true,
        responsiveSwitch: 'tablist',
        saveState: sessionStorage,
    });

})(jQuery);
</script>
<script>
$('#slider').loopSlider({
    autoMove: true,
    mouseOnStop: true,
    turn: 9000,
    motion: 'swing',
    delay: 500,
    width: 750,
    height: 500,
    marginLR: 5,
    viewSize: 100,
    viewOverflow: 'visible',
    navPositionBottom: 30,
    navibotton: true,
    navbtnImage: ''
});
</script>
<script>
$("#slideshow > div:gt(0)").hide();

setInterval(function() {
    $('#slideshow > div:first')
        .fadeOut(1000)
        .next()
        .fadeIn(1000)
        .end()
        .appendTo('#slideshow');
}, 3000);
</script>




<!--<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>-->
<link rel="stylesheet" href="<?php echo ADMIN_URL; ?>plugins/jq-val/css/validationEngine.jquery.css" type="text/css"/>
<script src="<?php echo ADMIN_URL; ?>plugins/jq-val/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo ADMIN_URL; ?>plugins/jq-val/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<script src="js/bpopup-master/jquery.bpopup.min.js" type="text/javascript" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" type="text/javascript" charset="utf-8"></script>

<?php if($Alerterror || $Alertsuccess){?>
<div id="element_to_pop_up"><?php echo ($Alerterror?$Alerterror:$Alertsuccess);?>
<center>
<button class="btn btn-primary b-close">Ok</button>
</center>
</div>
 <?php } ?>
<script type="text/javascript">
jQuery(document).ready(function() {
jQuery("#signup-form").validationEngine( {promptPosition : "topRight:-95,1"});
jQuery("#login-form").validationEngine( {promptPosition : "topRight:-95,1"});
jQuery("#forget-form").validationEngine( {promptPosition : "topRight:-95,1"});
jQuery("#checkout-form").validationEngine( {promptPosition : "topRight:-95,1"});
});
<?php 
if($Alerterror || $Alertsuccess){?>
 $(function() {                              
    $('#element_to_pop_up').bPopup({easing: 'easeOutBack', speed: 450, transition: 'slideDown'}); 
 <?php 
if($Alertsuccessurl){?>
    $(".b-close").bind("click", function(){
    window.location.href="<?php echo $Alertsuccessurl; ?>";
    });
<?php } else if($Alerterrorurl){?>
    $(".b-close").bind("click", function(){
    window.location.href="<?php echo $Alerterrorurl; ?>";
    });
<?php } ?>
});
 <?php } ?>

     

</script>
<?php 
if($Alerterror || $Alertsuccess){?>
<style type="text/css">
#element_to_pop_up { 
    background-color:#fff;
    border-radius:15px;
    color:#000;
    display:none; 
    padding:20px;
    min-width:400px;
    min-height: 180px;
}
.b-close{
     margin-top: 30px;
    width: 80px;
    padding: 3px;
}
.bPopupGreen{color:#0C0;width: 100%;  float: left;  text-align: center;   margin-top: 35px;  font-size: 18px; font-weight: 600;}
.bPopup{color:#F00;   width: 100%;  float: left;  text-align: center;   margin-top: 35px;  font-size: 18px; font-weight: 600;}  
</style>
 <?php } ?>




</body>

</html>
