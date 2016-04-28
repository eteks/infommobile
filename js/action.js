$(document).ready(function(){
  // $(window).scroll(function () {
    // if ($(window).scrollTop() + $(window).height() >= $(document).height()) {
        // alert("scrolled");
    // }
// });
   $('.bt-menu-trigger').click(function(){
        if($('#bt-menu').hasClass("bt-menu-open")){
            $('#fp-nav').hide();

        }else if($('#bt-menu').hasClass("bt-menu-close")){
            $('#fp-nav').show();
        }
    });
    //site map links
    $("a.font_active").click(function(){
        $('a.font_active').removeClass("active-clr");
        $(this).addClass('active-clr');
    });
    
    if (window.location.href.indexOf("#secondPage") > -1) {
        $('#section1').addClass('active').siblings().removeClass('active');
        $('#section1').addClass('completely').siblings().removeClass('completely');
        $('#fullpage').css({"transform": "translate3d(0px, -459px, 0px)"});
    }
    if (window.location.href.indexOf("#3rdPage") > -1) {
        $('#section2').addClass('active').siblings().removeClass('active');
        $('#section2').addClass('completely').siblings().removeClass('completely');
        $('#fullpage').css({"transform": "translate3d(0px, -916px, 0px)"});
    }
    if (window.location.href.indexOf("#4thpage") > -1) {
        $('#section3').addClass('active').siblings().removeClass('active');
        $('#section3').addClass('completely').siblings().removeClass('completely');
        $('#fullpage').css({"transform": "translate3d(0px, -1373px, 0px)"});
    }
    if (window.location.href.indexOf("#5thPage") > -1) {
        $('#section4').addClass('active').siblings().removeClass('active');
        $('#section4').addClass('completely').siblings().removeClass('completely');
        $('#fullpage').css({"transform": "translate3d(0px, -1830px, 0px)"});
    }
    if (window.location.href.indexOf("#lastPage") > -1) {
        $('#section5').addClass('active').siblings().removeClass('active');
        $('#section5').addClass('completely').siblings().removeClass('completely');
        $('#fullpage').css({"transform": "translate3d(0px, -2287px, 0px)"});
    }

    if (window.location.href.indexOf("#psecondPage") > -1) {
        $('#psection1').addClass('active').siblings().removeClass('active');
        $('#psection1').addClass('completely').siblings().removeClass('completely');
        $('#fullpage').css({"transform": "translate3d(0px, -459px, 0px)"});
    }
    if (window.location.href.indexOf("#p3rdPage") > -1) {
        $('#psection2').addClass('active').siblings().removeClass('active');
        $('#psection2').addClass('completely').siblings().removeClass('completely');
        $('#fullpage').css({"transform": "translate3d(0px, -916px, 0px)"});
    }
    if (window.location.href.indexOf("#p4thpage") > -1) {
        $('#psection3').addClass('active').siblings().removeClass('active');
        $('#psection3').addClass('completely').siblings().removeClass('completely');
        $('#fullpage').css({"transform": "translate3d(0px, -1373px, 0px)"});
    }

    

    $(document).mouseover(function(){
        if ($.cookie('biograph')){
            $.removeCookie('biograph');
        }
        if ($.cookie('clientspeak')){
            $.removeCookie('clientspeak');
        }
        if ($.cookie('expert')){
            $.removeCookie('expert');
        }
        if ($.cookie('strategis')){
            $.removeCookie('strategis');
        }
        if ($.cookie('advisor')){
            $.removeCookie('advisor');
        }
        if ($.cookie('team')){
            $.removeCookie('team');
        }
        if ($.cookie('join')){
            $.removeCookie('join');
        }
        if ($.cookie('web')){
            $.removeCookie('web');
        }
        if ($.cookie('apps')){
            $.removeCookie('apps');
        }
        if ($.cookie('learn')){
            $.removeCookie('learn');
        }
        if ($.cookie('infra')){
            $.removeCookie('infra');
        }
        if ($.cookie('digital')){
            $.removeCookie('digital');
        }
        if ($.cookie('analytics')){
            $.removeCookie('analytics');
        }


        

    });
    $('.biography-map').on('click', function(){
    	$.cookie('biograph', '1');
    });
    $('.client-map').on('click', function(){
        $.cookie('clientspeak', '2');
    });
    $('.expertise-map').on('click', function(){
        $.cookie('expert', '3');
    });
    $('.strategists-map').on('click', function(){
        $.cookie('strategis', '4');
    });
    $('.advisories-map').on('click', function(){
        $.cookie('advisor', '5');
    });
    $('.team-map').on('click', function(){
        $.cookie('team', '6');
    });
    $('.join-map').on('click', function(){
        $.cookie('join', '7');
    });
    $('.web-map').on('click', function(){
        $.cookie('web', '8');
    });
    $('.apps-map').on('click', function(){
        $.cookie('apps', '9');
    });
    $('.learn-map').on('click', function(){
        $.cookie('learn', '10');
    });
    $('.infra-map').on('click', function(){
        $.cookie('infra', '11');
    });
    $('.digital-map').on('click', function(){
        $.cookie('digital', '12');
    });
    $('.analytics-map').on('click', function(){
        $.cookie('analytics', '13');
    });
	//For mobile
	// $(".section1_mbl,.section2_mbl,.section3_mbl,.expert-mobile").hide();
	// $('.biography-map-mbl').on('click', function(){
    	// $.cookie('biograph_mbl', '14');
//     	
    	// $(".section2_mbl").show();
    	// alert('test'+$(".section2_mbl").html());
    	 // $(".section2_mbl").addClass('bio_mbl_content');
        // $(".section1_mbl,.section3_mbl,.expert-mobile").hide();
//     	
//         
    // });


    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    $('#bt-menu ul li a').click(function(){

       $('#bt-menu ul li a').removeClass('active_mm');
        $(this).addClass('active_mm');
    });
    //text animation in terms page
    $(function () {
        $('.tlt').textillate({
            in: {
                effect: 'fadeInLeft'
            }
        });
    });

    var the_height = $(window).height();
    var the_width = $(window).width();
    var content_height = the_height - 200;
    var p_content_height = the_height - 194;
    var col6width = $('.col-md-6').width();
    // $('.cd-section').css({"height":the_height +"px"});
    // alert(the_height);

    if(the_width > 786){//desktop design
        $('.slide_content').css({"height":content_height +"px"});
        $('.bio_2_left_content,.bio_2_right_content').css({"height":p_content_height-82 +"px"});
        $('.bio_3_left_content,.bio_3_right_content ').css({"height":p_content_height-82 +"px"});
        $('.bio_4_left_content').css({"height":p_content_height-82 +"px"});
        $('.bio_5_left_content').css({"height":p_content_height-82+"px"});
        $('.bio_6_left_content').css({"height":p_content_height-82+"px"});
        $('.terms_and_conditions').css({"height":content_height +"px"});
        $('.services').css({"margin-top":200+"px"});
        $('.products').css({"margin-top":200+"px"});
        $('.products_inner,.services_inner').css({"height":the_height-250+"px"});
        $('.inno_1_left_content').css({"height":p_content_height-82 +"px"});
        $('.inno_2_left_content').css({"height":p_content_height-82 +"px"});
        $('.inno_4_left_content').css({"height":p_content_height-82 +"px","width":col6width+15+"px"});
    }else{//mobile design
        $('.section2').css({"height":$('.bio_2_left_content').height()+158+"px"});
        $('.section3').css({"height":$('.bio_3_left').height()+$('.bio_3_right_content').height()+158+"px"});
        $('.section4').css({"height":$('.bio_4_left_content').height()+$('.bio_4_right_content').height()+158+"px"});
        $('.section5').css({"height":$('.bio_5_left_content').height()+$('.bio_5_right_content').height()+158+"px"});
        $('.section6').css({"height":$('.bio_6_left_content').height()+$('.bio_6_right_content').height()+158+"px"});
        $('.slide_content').css({"height":"100%"});
        $('.bio_2_left_content').css({"height":"100%"});
        $('.bio_3_left_content').css({"height":"100%"});
        $('.bio_4_left_content').css({"height":"100%"});
        $('.bio_4_right_content').css({"height":"100%"});
        $('.bio_5_left_content').css({"height":"100%"});
        $('.bio_6_left_content').css({"height":"100%"});
        $('.terms_and_conditions').css({"height":"100%"});
    }




    $('[data-dialog]').on('click', function (e) {
        var $this = $(e.target);
        $($this.data('dialog')).attr('class', 'popup ' + $this.data('effect'));
    });

    $('.inno_1_left_content_image img').mouseover(function(){
        $('.member-profile_left span').css({"background":"#a4a6a8"});
    });
    $('.inno_1_left_content_image img').mouseout(function(){
        $('.member-profile_left span').css({"background":"#fff"});
    });
    $('.inno_1_right_content_image img').mouseover(function(){
        $('.member-profile_right span').css({"background":"#a4a6a8"});
    });
    $('.inno_1_right_content_image img').mouseout(function(){
        $('.member-profile_right span').css({"background":"#e9e9e9"});
    });
    $('#upload_spe').click(function() {
        $("#atm_busexpect").fadeOut('slow');
        $("#upload_spe").fadeOut('slow');
        $("#upload_show").fadeIn("slow");
        $("#Enter_spe").fadeIn("slow");
        $("#atm_busexpect").val("");$("#msg_file").val("");
        $("#atm_uploadspecific").prop("checked",false);
        $("#atm_enterspecific").prop("checked",false);
        $("#msg_exp").html("");

    });
    $('#Enter_spe').click(function() {
        $("#atm_busexpect").fadeIn('slow');
        $("#upload_spe").fadeIn('slow');
        $("#upload_show").fadeOut("slow");
        $("#Enter_spe").fadeOut("slow");
        $("#atm_dumy").val("");  $("#msg_file").val("");
        $("#atm_uploadspecific").prop("checked",false);
        $("#atm_enterspecific").prop("checked",false);
        $("#msg_exp").html("");

    });
    $('#bt-menu').click(function() {
        $('.intro').removeClass('bt-menu-open');
        $('.intro').addClass('bt-menu-close');
        $('#fp-nav').show();
    });
    $('.enter_menu,.sitemap_inter_menu').click(function() {

        if($('#bt-menu').hasClass("bt-menu-open")){
            $('#bt-menu').removeClass('bt-menu-open');
            $('#bt-menu').addClass('bt-menu-close');
            $('#fp-nav').hide();

        }else if($('#bt-menu').hasClass("bt-menu-close")){
            $('#bt-menu').removeClass('bt-menu-close');
            $('#bt-menu').addClass('bt-menu-open');
            $('#fp-nav').show();
        }else{
            $('#bt-menu').addClass('bt-menu-open');
            $('#fp-nav').hide();
        }
    });
    



    $('#Back').click(function() {
        $("#tab1").fadeIn("slow");
        $("#tab3").fadeOut('slow');
        $("#tab2").fadeOut('slow');
    });
    $('#cons_Back').click(function() {
        $("#tab2").fadeIn("slow");
        $("#tab1").fadeOut('slow');
        $("#tab3").fadeOut('slow');
    });


    $('.overflow_hidden').css({"height":the_height +"px"});

    $(function(){
    	$(".scroll").click(function(){
    		$("html,body").animate({
    			scrollTop:$(".thetop").offset().top-200},"1000");
    			return false;
			});
		});
    // $(function() {
    //         $(this).bind("contextmenu", function(e) {
    //             e.preventDefault();
    //          });
    //     });
    var active_id = '';
    $('.hex,#popup_window,.Subir').click(function(e){

        $(window).off('DOMMouseScroll mousewheel');

        $( '.mcusheight' ).bind( 'mousewheel DOMMouseScroll', function ( e ) {

            var scrollTo = null;
            if (e.type == 'mousewheel') {
                scrollTo = (e.originalEvent.wheelDelta * -1);
            }
            else if (e.type == 'DOMMouseScroll') {
                scrollTo = 40 * e.originalEvent.detail;
            }
            if (scrollTo) {
                e.preventDefault();
                $(this).scrollTop(scrollTo + $(this).scrollTop());
            }
        });
        active_id = $('#fullpage').find('.active').attr('id');
        $('#fullpage').find('.active').removeClass('active');
    });
    $('.popup-close').click(function(){
        $('#'+active_id).addClass('active');
    });
    // $('#loader-wrapper').append('');
    $('.error_field').hide();
         $('.submit').on('click', function(){
           var user = $('#username').val();
           var pswd = $('#password').val();
           if(user != ''){
              $('#username').next('.error_field').hide();
             if(pswd == ''){
               $('#password').next('.error_field').show();
             }
             else{
                $('#password').next('.error_field').hide();
                 $('#password').next().next('.error_field').show();

             }
           }
            else{
              $('#username').next('.error_field').show();
            }
           if ($("#content :input").hasClass("error_field")){
             return false;
           }
     });
     $('#tdft > img').hover(function(){
         $('#tdft>img').removeAttr('src').attr('src', 'images/arrowblackup.png');
     },function(){
        $('#tdft>img').removeAttr('src').attr('src', 'images/up-arrow.png');
     });
     $('#bdft > img').hover(function(){
        $('#bdft>img').removeAttr('src').attr('src', 'images/arrowblackdown.png');
    },function(){
        $('#bdft>img').removeAttr('src').attr('src', 'images/down-arrow.png');
    });

    // For mobile
    // Biography
    $(".menu-mbl,.menu-holder,.products_menuholder").hide();
		$(".inner_menu_act").on('click', function(){
	        $('.menu-mbl,.menu-holder,.products_menuholder').show();
	    });
	    
    

    $('.close_menu,.bio-mbl,.client-mbl,.expertise-mbl,.strategist-mbl,.advisor-mbl,.team-mbl,.join-mbl').on('click', function(){
        $(".menu-mbl,.menu-holder,.products_menuholder").hide();
    });

    $(".section2_mbl,.section3_mbl,.expert-mobile").hide();
    $(".bio-mbl").on('click', function() {
        $(".section2_mbl").addClass('bio_mbl_content');
        $(".section1_mbl,.section3_mbl,.expert-mobile").hide();
        // var effect = 'slide';
        // var options = { direction: 'right' };
        // var duration = 500;
        $('.section2_mbl').show();
    });
    $(".client-mbl").on('click', function() {
        $(".section3_mbl").addClass('bio_mbl_content');
        $(".section1_mbl,.section2_mbl,.expert-mobile").hide();
        // var effect = 'slide';
        // var options = { direction: 'right' };
        // var duration = 500;
        $('.section3_mbl').show();
    });
    $(".expertise-mbl").on('click', function() {
        $(".expert-mobile").addClass('bio_mbl_content');
        $(".expert-mobile").show();
        $(".section1_mbl,.section2_mbl,.section3_mbl").hide();
        // var effect = 'slide';
        // var options = { direction: 'right' };
        // var duration = 500;
        $('.expert-mobile section').show();
    });
	
 
    $('.iocd_mobile').on('click', function(){
        $('.popup_fade_mobile').show();
        $('.iocd-mbl, .popup-close').show();
        document.body.style.overflow = 'hidden';
    });
    $('.aas-mobile').on('click', function(){
        $('.popup_fade_mobile').show();
        $('.aas-mbl, .popup-close').show();
        document.body.style.overflow = 'hidden';
    });
    $('.bgi-mobile').on('click', function(){
        $('.popup_fade_mobile').show();
        $('.bgi-mbl, .popup-close').show();
        document.body.style.overflow = 'hidden';
    });
    $('.centac-mobile').on('click', function(){
        $('.popup_fade_mobile').show();
        $('.centac-mbl, .popup-close').show();
        document.body.style.overflow = 'hidden';
    });
    $('.vivekananda-mobile').on('click', function(){
        $('.popup_fade_mobile').show();
        $('.vivekananda-mbl, .popup-close').show();
        document.body.style.overflow = 'hidden';
    });
    $('.iga-mobile').on('click', function(){
        $('.popup_fade_mobile').show();
        $('.iga-mbl, .popup-close').show();
        document.body.style.overflow = 'hidden';
    });
    $('.wms-mobile').on('click', function(){
        $('.popup_fade_mobile').show();
        $('.wms-mbl, .popup-close').show();
        document.body.style.overflow = 'hidden';
    });
    $('.tvr-mobile').on('click', function(){
        $('.popup_fade_mobile').show();
        $('.tvr-mbl, .popup-close').show();
        document.body.style.overflow = 'hidden';
    });
    $('.vali-mobile').on('click', function(){
        $('.popup_fade_mobile').show();
        $('.vali-mbl, .popup-close').show();
        document.body.style.overflow = 'hidden';
    });
    $('.kalai-mobile').on('click', function(){
        $('.popup_fade_mobile').show();
        $('.kalai-mbl, .popup-close').show();
        document.body.style.overflow = 'hidden';
    });
    $('.popup-close, .popup_fade_mobile').on('click', function(){
        $('.popup_fade_mobile').hide();
        $('.iocd-mbl,.aas-mbl,.bgi-mbl,.centac-mbl,.vivekananda-mbl,.iga-mbl,.wms-mbl,.tvr-mbl,.vali-mbl,.kalai-mbl').hide();
        document.body.style.overflow = 'auto';
    });

    //Innovation Hub
    $(".section_inno2,.innovation-advisor,.section_inno5,.section_inno7").hide();
    $(".strategist-mbl").on('click', function() {
        $(".section_inno2").addClass('inno_mbl_content');
        $(".section_inno1,.innovation-advisor,.section_inno5,.section_inno7").hide();
        // var effect = 'slide';
        // var options = { direction: 'right' };
        // var duration = 500;
        $('.section_inno2').show();
    });
    $(".advisor-mbl").on('click', function() {
        $(".innovation-advisor").addClass('inno_mbl_content');
        $(".section_inno1,.section_inno2,.section_inno5,.section_inno7").hide();
        // var effect = 'slide';
        // var options = { direction: 'right' };
        // var duration = 500;
        $('.innovation-advisor').show();
    });
    $(".team-mbl").on('click', function() {
        $(".section_inno5").addClass('inno_mbl_content');
        $(".section_inno1,.section_inno2,.innovation-advisor,.section_inno5,.section_inno7").hide();
        // var effect = 'slide';
        // var options = { direction: 'right' };
        // var duration = 500;
        $('.section_inno5').show();
    });
    $(".join-mbl").on('click', function() {
        $(".section_inno7").addClass('inno_mbl_content');
        $(".section_inno1,.section_inno2,.section_inno4,.section_inno5,.section_inno7").hide();
        // var effect = 'slide';
        // var options = { direction: 'right' };
        // var duration = 500;
        $('.section_inno7').show();
    });
    //Services
    $('.services_sec1,.services_sec2,.services_sec3,.services_sec4,.services_sec5').hide();
    $(".web_app_img").on('click', function(){
        $('.services_sec1').addClass('service_mbl_content');
        $('.services_sec1').show();
        $('.services_sec0,.services_sec2,.services_sec3,.services_sec4,.services_sec5').hide();
    });
    $(".mobile_app_img").on('click', function(){
        $('.services_sec2').addClass('service_mbl_content');
        $('.services_sec2').show();
        $('.services_sec0,.services_sec1,.services_sec3,.services_sec4,.services_sec5').hide();
    });
    $(".ux_img").on('click', function(){
        $('.services_sec3').addClass('service_mbl_content');
        $('.services_sec3').show();
        $('.services_sec0,.services_sec1,.services_sec2,.services_sec4,.services_sec5').hide();
    });
    $(".digital_img").on('click', function(){
        $('.services_sec4').addClass('service_mbl_content');
        $('.services_sec4').show();
        $('.services_sec0,.services_sec1,.services_sec2,.services_sec3,.services_sec5').hide();
    });
    $(".advance_img").on('click', function(){
        $('.services_sec5').addClass('service_mbl_content');
        $('.services_sec5').show();
        $('.services_sec0,.services_sec1,.services_sec2,.services_sec3,.services_sec4').hide();
    });
    //Products
    $('.products_sec1,.products_sec2,.products_sec3').hide();
    $(".cloud_img").on('click', function(){
        $(".products_sec1").show();
        $('.products_sec0,.products_sec2,.products_sec3').hide();
    });
    $(".enterprice_product_img").on('click', function(){
        $(".products_sec2").show();
        $('.products_sec0,.products_sec1,.products_sec3').hide();
    });
    $(".desktop_product_img").on('click', function(){
        $(".products_sec3").show();
        $('.products_sec0,.products_sec2,.products_sec1').hide();
    });



});
//
// $(window).load(function(){
//     $("#preloader").delay(2000).fadeOut("slow");
//     $(".main_wrapper").delay(2000).fadeIn("slow");
//
// });

$(window).resize(function(){
    var the_height = $(window).height();
    var content_height = the_height - 200;
    var p_content_height = the_height - 252;
    $('.slide_content').css({"height":content_height +"px"});
    $('.bio_2_left_content').css({"height":p_content_height +"px"});
});

$(window).scroll(function() {
    if ($(this).scrollTop() > 50 ) {
        $('.scrolltop:hidden').stop(true, true).fadeIn();
    } else {
        $('.scrolltop').stop(true, true).fadeOut();
    }
});
