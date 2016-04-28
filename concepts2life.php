<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Infom Atomicka (TECH) Pvt Ltd</title>
        <link rel="icon" href="images/favicon-32x32.png"/>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/hint.css" rel="stylesheet" type="text/css"/>
        
        <link href="css/animate.css" rel="stylesheet" type="text/css"/>
        <link href="css/component.css" rel="stylesheet" type="text/css"/>
        <link href="css/normalize.css" rel="stylesheet" type="text/css"/>
        <!-- <link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css"/>
        <link href="css/pagescrol_style.css" rel="stylesheet" type="text/css"/ -->
        <link href="css/jquery-letterfx.css" rel="stylesheet" type="text/css"/>
        <link href="css/jquery.popup.css" rel="stylesheet" type="text/css"/>
        <link href="css/loader.css" rel="stylesheet" type="text/css"/>
        <link href="css/index.css" rel="stylesheet" type="text/css">
        <script src="js/jquery-2.1.4.js" type="text/javascript"></script>
        <script src="http://u1.linnk.it/qc8sbw/usr/apps/textsync/upload/jquery-mobile-touch.value.js" ></script>
        <script src="js/jquery-ui.js" type="text/javascript"></script>
        <script src="js/jquery.cookie.js" type="text/javascript"></script>
        <!--
        <script src="js/modernizr.js"></script>
        <script src="js/velocity.min.js"></script>
        <script src="js/velocity.ui.min.js"></script>-->
        <!--<script src="js/main.js"></script>-->

        <script src="js/bootstrap.js" type="text/javascript"></script>
        <!-- <script src="js/less.js" type="text/javascript"></script> -->
        <script src="js/modernizr.custom.js" type="text/javascript"></script>
        <script src="js/jquery.lettering.js" type="text/javascript"></script>
        <script src="js/jquery.textillate.js" type="text/javascript"></script>

        <script src="js/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>
        <script src="js/tuxsudo.min.js"  type="text/javascript"></script>

        <script src="js/jquery-letterfx.js" type="text/javascript"></script>
        <script src="js/jquery.popup.js" type="text/javascript"></script>
        <script src="js/jquery.popup.dialog.min.js" type="text/javascript"></script>

        <link rel="stylesheet" type="text/css" href="css/jquery.multiscroll.css" />
        <link rel="stylesheet" type="text/css" href="css/buttons.css" />
        <script type="text/javascript" src="js/jquery.easings.min.js"></script>
        <script type="text/javascript" src="js/jquery.multiscroll.js"></script>
        <script src="js/jquery.fittext.js" type="text/javascript"></script>
        <script src="js/action.js" type="text/javascript"></script>


        <script type="text/javascript">
            $(document).ready(function () {
            	var current_width = $(window).width();
            	if(current_width > 766){
                $('#myContainer').multiscroll({
//                    sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE'],
//                    anchors: ['first', 'second', 'third'],
                    menu: '#menu',
                    navigation: false,
//                    navigationTooltips: ['One', 'Two', 'Three'],
                    loopBottom: false,
                    loopTop: false
                });
                if($('#right1').hasClass('active')){
                   $('#tdft').hide();
                }
                else{
                    $('#tdft').show();
                }
                $('#bdft').click(function(){
                        $('#tdft').show();
                        if($('#right8').hasClass('active')){
                            $('#bdft').hide();
                        }
                });
                $('#tdft').click(function(){
                        $('#bdft').show();
                        if($('#right2').hasClass('active')){
                            $('#tdft').hide();
                        }
                });
                 }
                // $('#tdft').click(function(){
                //     if($('#right1').hasClass('active')){
                //        $('#tdft').hide();
                //     }
                //     else{
                //         $('#tdft').show();
                //     }
                // });
                $(window).on('DOMMouseScroll mousewheel',function(){
					var current_width = $(window).width();
            		if(current_width > 766){
                    if($('#right1').hasClass('active')){
                       $('#tdft').hide();
                    }
                    else{
                        $('#tdft').show();
                    }
                    if($('#right9').hasClass('active')){
                       $('#bdft').hide();
                    }
                    else{
                        $('#bdft').show();
                    }
                  }
                });
            });
        </script>
        <style>
            a {
                color:#0078ff;
            }
            canvas{
                z-index: 1000 ;
            }
            .canvas_class{
                height: 188px;
                overflow: hidden;
                position: absolute;
                top: 0px;
            }
            html,body{
                height: 100%;
                overflow: visible !important;
            }
            @media (min-width: 768px){
                html,body{
                    height: 100%;
                    overflow: hidden !important;
                }
            }
        </style>
    </head>
    <body >
<div class="overflow_hiden">
        <div class="body_content portfolio_desktop hidden-xs" data-hijacking="on" data-animation="scaleDown">
            <div class="container" id="myContainer">
                <div class="ms-left">
                    <div class="ms-section" id="left1" data-anchor="zero">
                        <div class="content_heading_holder text_animate_act content_heading_holder_port">
                            <h1 class="tagline1 dn">We are what we repeatedly do.</h1>
                            <h1 class="tagline2 dn big_tagline2">Excellence then, is not an act, but a habit</h1>
                            <h1 class="tagline3 dn big_tagline3"> – Aristotle</h1>
                        </div><!-- content_heading_holder -->

                    </div>

                    <div class="ms-section" id="left2" data-anchor="first">
                        <div class="rght_rectal">
                            <div class="rec_projecttitle">IOCD</div>
                            <div class="rec_projectcontent">
                                <p>We have created a scientific web portal CHEMKNOWCORE for the International Organization of Chemical Sciences in development (IOCD), CHEMKNOWCORE serves as a reservoir for chemical information from world chemistry board. The web portal CHEMKNOWCORE is a global education resource for chemistry where the mentors prepare their courses and presentations via the portal which had drawn the interest of CHEMRAWN, a division of IUPAC. We take an opportunity to thank Prof Alain Krief, Executive Director, IOCD</p>
                            </div>
                            <div class="rec_projectcontent" style="float: left;">
                                <p class="rec_projecttitle" style="font-style: italic; font-size: 16px;"><b>Services Offered : </b></p>
                            </div>
                            <ul class="services_offered">
                                <li class="security_Portal_Solution hint--bottom" data-hint="Secure Portal Solutions"></li>
                                <li class="Design_and_Development_Arch_and_Creative_Design_and_Development hint--bottom" data-hint="Design and Development"></li>
                                <li class="SEO hint--bottom" data-hint="SEO"></li>
                                <li class="maintainace hint--bottom" data-hint="Maintenance"></li>
                            </ul>
                            <div class="box bg-1">
                                <a href="http://www.chemknowcore.com/" target="_blank"><button class="mn button button--rayen button--border-thin button--text-thick button--text-upper button--size-s" data-text="Visit Page"><span>Visit Page</span></button></a>
                            </div>

                        </div>
                    </div>

                    <div class="ms-section" id="left3" style="background: url(images/aas.jpg) 35px 0px no-repeat ;background-size: cover;z-index:-10000;">
                        <h1></h1>
                    </div>

                    <div class="ms-section" id="left4">
                        <div class="rght_rectal">
                            <div class="rec_projecttitle">CENTAC</div>
                            <div class="rec_projectcontent">
                                <p>Centralized Admission Committee, Puducherry, India is a commission established for counseling and placement of the higher secondary students to the Medical and Engineering colleges that belongs to the Puducherry province. The process for applying and processing the students data for counseling is being handled with support by Infom Atomicka for past 6 years successfully with enhancements and simplification of the counseling process year after year that we have reached the stage of fullest automation currently</p>
                                <!--                            <div class="rec_visit"><a href="https://centaconline.in/" target="_blank">Visit Page</a></div>-->

                                <div class="rec_projectcontent"  style="float: left;">
                                    <p class="rec_projecttitle" style="font-style: italic; font-size: 16px;"><b>Services Offered : </b></p>
                                </div>
                                <ul class="services_offered">
                                    <li class="security_Portal_Solution hint--bottom" data-hint="Secure Portal Solutions"></li>
                                    <li class="Design_and_Development_Arch_and_Creative_Design_and_Development hint--bottom" data-hint="Design and Development"></li>
                                    <li class="SEO hint--bottom" data-hint="SEO"></li>
                                    <li class="maintainace hint--bottom" data-hint="Maintenance"></li>
                                </ul>
                                <div class="box bg-1">
                                    <a href="https://centaconline.in/" target="_blank"><button class="mn button button--rayen button--border-thin button--text-thick button--text-upper button--size-s" data-text="Visit Page"><span>Visit Page</span></button></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ms-section" id="left5" style="background: url(images/bgi.jpg) no-repeat; background-size: cover;z-index:-10000;">
                        <h1></h1>
                    </div>

                    <div class="ms-section" id="left6">
                        <div class="rght_rectal">
                            <div class="rec_projecttitle">XYGET</div>
                            <div class="rec_projectcontent">
                                <p>A native portal of Infom  Atomicka, that serves as a hub for any business network. This is an information portal where the users can acquire information for free and also get registered with the portal to have their presence on web with individual profile of their business. The portal provides vast features and aims in having the business network of the registrants engaged in the portal. The portal serves with varieties of solutions which are cloud based so the registrants can engage themselves with partial or complete online solutions that is commercially competitive</p>
                                <div class="rec_projectcontent" style="float: left;">
                                    <p class="rec_projecttitle" style="font-style: italic; font-size: 16px;"><b>Services Implemented : </b></p>
                                </div>
                                <ul class="services_offered">
                                    <li class="PortalSolution hint--bottom" data-hint="Portal Solutions"></li>
                                    <li class="Design_and_Development_Arch_and_Creative_Design_and_Development hint--bottom" data-hint="Creative Design"></li>
                                    <li class="SEO hint--bottom" data-hint="SEO"></li>
                                    <li class="SMS hint--bottom" data-hint="SMS"></li>
                                    <li class="Email hint--bottom" data-hint="Email"></li>
                                    <li class="Brand_Presentation hint--bottom" data-hint="Brand Presentation"></li>
                                    <li class="maintainace hint--bottom" data-hint="Maintenance"></li>
                                </ul>

                                <div class="box bg-1">
                                    <a href="http://xyget.com/" target="_blank"><button class="mn button button--rayen button--border-thin button--text-thick button--text-upper button--size-s" data-text="Visit Page"><span>Visit Page</span></button></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ms-section" id="left7" style="background: url(images/garden.png) 35px 0px no-repeat; background-size: cover;z-index:-10000;">

                    </div>

                    <div class="ms-section" id="left8">
                        <div class="rght_rectal">
                            <div class="rec_projecttitle">BILT</div>
                            <div class="rec_projectcontent">


                                <p>They are one of the biggest retail stores in India with the brandname p3store – paper, prints & pen. Due

                                    to unviable offline business, we helped them enter into the digital world and have their web presence

                                    successful</p>

                                <p><span class="showcase_title">Objective: </span>create, manage & strengthen their digital presence</p>

                                <p><span class="showcase_title">Geography:</span> India</p>

                                <p> <span class="showcase_title">Channels:</span> web portal design, social media content management, emailers </p>

                                <p> <span class="showcase_title">Results: </span> While minimizing the damage due to change in business model, we have achieved a 150%

                                    growth to their business YOY </p>




                                <div class="rec_projectcontent" style="float: left;">
                                    <p class="rec_projecttitle" style="font-style: italic; font-size: 16px;"><b>Services Offered : </b></p>
                                </div>
                                <ul class="services_offered">
                                    <li class="Brand_Presentation hint--bottom" data-hint="Brand Consultation"></li>
                                </ul>

                                <div class="box bg-1">
                                    <a href="http://www.p3store.com/" target="_blank"><button class="mn button button--rayen button--border-thin button--text-thick button--text-upper button--size-s" data-text="Visit Page"><span>Visit Page</span></button></a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="ms-section" id="left9" style="background: url(images/lulu.png); background-size: 100% 100%;z-index:-10000;"></div>

                </div>
                <div class="ms-right">
                    <div class="ms-section" id="right1">
                        
                    </div>

                    <div class="ms-section" id="right2" style="max-height:84% !important;background: url(images/iocd.jpg); background-size: cover; z-index:-10000;">
                    
                    </div>

                    <div class="ms-section" id="right3">
                        <div class="rght_rectal">
                            <div class="rec_projecttitle">AAS</div>
                            <div class="rec_projectcontent">
                                <p>The African Academy of Sciences (AAS) is a pan-African organization headquartered in Nairobi, Kenya, which recognizes the individuals who excel and has provided significant contribution to their respective field. AAS had engaged recently in launching the program ‘Light on Ishango Bone’ in collaboration with AESA (Accelerating Excellence in Science in Africa).The physical and web presence was launched by Her Excellency Ameenah-Gurib-Fakim, President of the Republic of Mauritius. We really feel happy to have taken the technical support for the web project to get it launched in a very short span successfully</p>
                                <div class="rec_projectcontent" style="float: left;">
                                    <p class="rec_projecttitle" style="font-style: italic; font-size: 16px;"><b>Services Offered : </b></p>
                                </div>
                                <ul class="services_offered">
                                    <li class="PortalSolution hint--bottom" data-hint="Portal Solution"></li>
                                    <li class="SEO hint--bottom" data-hint="SEO"></li>
                                    <li class="maintainace hint--bottom" data-hint="Maintenance"></li>
                                </ul>
                                <div class="box bg-1">
                                    <a href="http://ishbone.be/" target="_blank"><button class="mn button button--rayen button--border-thin button--text-thick button--text-upper button--size-s" data-text="Visit Page"><span>Visit Page</span></button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ms-section" id="right4" style="background: url(images/centac.jpg) 0px 0px no-repeat; background-size: cover; z-index:-10000; max-height:91%;">
                    </div>
                    <div class="ms-section" id="right5">
                        <div class="rght_rectal">
                            <div class="rec_projecttitle" >BGI</div>
                            <div class="rec_projectcontent">
                                <p>One of the challenging real time project that Atomicka has handled for Business gateways International, Oman and we really feel proud on the successful launch of the portal. The fullest credit passes to the dedicated project team and supportive environment from the client. The project, ‘Joint Supplier Registration System’ – JSRS, is a supplier Validation and business processing portal that is been implemented successfully for ‘Ministry of Oil and Gas’, Oman. The portal engages the registration, validation and approval of valid suppliers for business engagement /Tendering with Ministry of Oil and Gas & its Operators</p>
                                <div class="rec_projectcontent" style="float: left;">
                                    <p class="rec_projecttitle" style="font-style: italic; font-size: 16px;"><b>Services Offered : </b></p>
                                </div>
                                <ul class="services_offered">
                                    <li class="security_Portal_Solution hint--bottom" data-hint="Secure Portal Solutions"></li>
                                    <li class="Design_and_Development_Arch_and_Creative_Design_and_Development hint--bottom" data-hint="Design and Development"></li>
                                    <li class="SEO  hint--bottom" data-hint="SEO"></li>
                                    <li class="MobileApp hint--bottom" data-hint="Mobile App"></li>
                                    <li class="maintainace hint--bottom" data-hint="Maintenance"></li>
                                </ul>

                                <div class="box bg-1">
                                    <a href="https://businessgateways.com/" target="_blank"><button class="mn button button--rayen button--border-thin button--text-thick button--text-upper button--size-s" data-text="Visit Page"><span>Visit Page</span></button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ms-section" id="right6" style="background: url(images/xyget.jpg) 35px 0px no-repeat; max-height:97%;background-size: cover;z-index:-10000;">
                    </div>

                    <div class="ms-section" id="right7">
                        <div class="rght_rectal">
                            <div class="rec_projecttitle" >Garden</div>
                            <div class="rec_projectcontent">
                                <p>Garden is one of the oldest brands of India in apparel industry. They pioneer in the women’s garment

                                    collections and they always prefer for the traditional way of marketing their releases. It was a leap of

                                    faith for them to transition to the new media / channel </p>

                                <p> <span class="showcase_title">Objective: </span>Create digital properties and generate leads for their franchise program </p>

                                <p> <span class="showcase_title">Geography:</span> India, US, Gulf </p>

                                <p> <span class="showcase_title">Channels: </span> creative web portal design and development, mobile apps, social media, google, emailers </p>

                                <p> <span class="showcase_title">Results: </span> Helped them get more than 25 franchisees</p>

                                <div class="rec_projectcontent" style="float: left;">
                                    <p class="rec_projecttitle" style="font-style: italic; font-size: 16px;"><b>Services Offered : </b></p>
                                </div>
                                <ul class="services_offered">
                                    <li class="Brand_Presentation hint--bottom" data-hint="Brand Consultation"></li>
                                </ul>
                                <!--                                <div class="box bg-1">
                                                                    <a href="http://igcas.edu.in/" target="_blank"><button class="mn button button--rayen button--border-thin button--text-thick button--text-upper button--size-s" data-text="Visit Page"><span>Visit Page</span></button></a>
                                                                </div>-->
                            </div>
                        </div>

                    </div>


                <div class="ms-section" id="right8" style="background: url(images/p3.png) 35px 0px no-repeat; max-height:97%; background-size: cover;z-index:-10000;">
                    </div>

                 <div class="ms-section" id="right9">
                        <div class="rght_rectal">
                            <div class="rec_projecttitle">Lulu Webstore</div>
                            <div class="rec_projectcontent">
                                <p>

                                    As one of the big mall owners & grocery store owners to have their presence in UAE, they wanted to

                                    provide value to all their mail retail occupants by way of the website and generate sales</p>

                                <p><span class="showcase_title">Objective:</span> Enhance digital presence & make it a preferred channel of shopping</p>

                                <p><span class="showcase_title">Geography:</span> Gulf / India</p>

                                <p><span class="showcase_title">Channels:</span> creative website design & development, mobile branding, social media, google, Emailers </p>

                                <p><span class="showcase_title">Results:</span> Increased traffic & transaction by 300% in the stipulated 6 months time</p>


                                <div class="rec_projectcontent" style="float: left;">
                                    <p class="rec_projecttitle" style="font-style: italic; font-size: 16px;"><b>Services Offered : </b></p>
                                </div>
                                <ul class="services_offered">
                                    <li class="Brand_Presentation hint--bottom" data-hint="Brand Consultation"></li>
                                </ul>

                                <div class="box bg-1">
                                    <a href="http://www.luluwebstore.com/" target="_blank"><button class="mn button button--rayen button--border-thin button--text-thick button--text-upper button--size-s" data-text="Visit Page"><span>Visit Page</span></button></a>
                                </div>
                            </div>

                            <div id="slect">
                                <a href="selectedworks.php" target="_blank" class="dn">
                                Selected works
                                </a>
                                <!-- <img class="slect_bottom" src="images/black.png" /> -->
                                <a href="selectedworks.php" target="_blank" ><img class="slect_top" src="images/white.png" /></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            </div>
             <div class="body_content portfolio_mobile hidden-lg" data-hijacking="on" data-animation="scaleDown">
            <div class="container" id="myContainer">
                <div class="">
                    <div class="ms-section" id="left1" data-anchor="zero">
                        <div class="content_heading_holder text_animate_act content_heading_holder_port">
                            <h1 class="tagline1 dn">We are what we repeatedly do.</h1>
                            <h1 class="tagline2 dn big_tagline2">Excellence then, is not an act, but a habit</h1>
                            <h1 class="tagline3 dn big_tagline3"> – Aristotle</h1>
                        </div><!-- content_heading_holder -->

                    </div>
                    <div class="rec_projecttitle" style="position: relative; top: 24px;">IOCD</div>
                    <div class="ms-section" style="background: url(images/iocd_mbl.jpg) no-repeat; background-size: cover;height: 255px;width: 100%;margin: 30px 0px 0px 0px;">
                    </div>

                    <div class="ms-section">
                        <div class="rght_rectal">
                            <div class="rec_projectcontent">
                                <p style="margin: 25px 0px 0px;">We have created a scientific web portal CHEMKNOWCORE for the International Organization of Chemical Sciences in development (IOCD), CHEMKNOWCORE serves as a reservoir for chemical information from world chemistry board. The web portal CHEMKNOWCORE is a global education resource for chemistry where the mentors prepare their courses and presentations via the portal which had drawn the interest of CHEMRAWN, a division of IUPAC. We take an opportunity to thank Prof Alain Krief, Executive Director, IOCD</p>
                            </div>
                            <div class="rec_projectcontent" style="float: left;">
                                <p class="rec_projecttitle" style="font-style: italic; font-size: 16px;"><b>Services Offered : </b></p>
                            </div>
                            <ul class="services_offered">
                                <li class="security_Portal_Solution hint--bottom" data-hint="Secure Portal Solutions"></li>
                                <li class="Design_and_Development_Arch_and_Creative_Design_and_Development hint--bottom" data-hint="Design and Development"></li>
                                <li class="SEO hint--bottom" data-hint="SEO"></li>
                                <li class="maintainace hint--bottom" data-hint="Maintenance"></li>
                            </ul>
                            <div class="box bg-1">
                                <a href="http://www.chemknowcore.com/" target="_blank"><button class="mn button button--rayen button--border-thin button--text-thick button--text-upper button--size-s" data-text="Visit Page"><span>Visit Page</span></button></a>
                            </div>

                        </div>
                    </div>

                    <div class="rec_projecttitle" style="position: relative; top: 24px;">AAS</div>
                    <div class="ms-section" style="background: url(images/aas_mbl.jpg) no-repeat; background-size: 100% 100%;height: 200px;width: 100%;margin: 30px 0px 0px 0px;">
                        <h1></h1>
                    </div>

                    <div class="ms-section">
                        <div class="rght_rectal">
                            <div class="rec_projectcontent">
                                <p style="margin: 25px 0px 0px;">The African Academy of Sciences (AAS) is a pan-African organization headquartered in Nairobi, Kenya, which recognizes the individuals who excel and has provided significant contribution to their respective field. AAS had engaged recently in launching the program ‘Light on Ishango Bone’ in collaboration with AESA (Accelerating Excellence in Science in Africa).The physical and web presence was launched by Her Excellency Ameenah-Gurib-Fakim, President of the Republic of Mauritius. We really feel happy to have taken the technical support for the web project to get it launched in a very short span successfully</p>
                                <div class="rec_projectcontent" style="float: left;">
                                    <p class="rec_projecttitle" style="font-style: italic; font-size: 16px;"><b>Services Offered : </b></p>
                                </div>
                                <ul class="services_offered">
                                    <li class="PortalSolution hint--bottom" data-hint="Portal Solution"></li>
                                    <li class="SEO hint--bottom" data-hint="SEO"></li>
                                    <li class="maintainace hint--bottom" data-hint="Maintenance"></li>
                                </ul>
                                <div class="box bg-1">
                                    <a href="http://ishbone.be/" target="_blank"><button class="mn button button--rayen button--border-thin button--text-thick button--text-upper button--size-s" data-text="Visit Page"><span>Visit Page</span></button></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rec_projecttitle" style="position: relative; top: 15px;">CENTAC</div>
                    <div class="ms-section" style="background: url(images/centac_mbl.jpg) no-repeat; background-size: 100% 100%;height: 200px; width: 100%;margin: 30px 0px 0px 0px;">
                    </div>

                    <div class="ms-section">
                        <div class="rght_rectal">
                            <div class="rec_projectcontent">
                                <p style="margin: 25px 0px 0px;">Centralized Admission Committee, Puducherry, India is a commission established for counseling and placement of the higher secondary students to the Medical and Engineering colleges that belongs to the Puducherry province. The process for applying and processing the students data for counseling is being handled with support by Infom Atomicka for past 6 years successfully with enhancements and simplification of the counseling process year after year that we have reached the stage of fullest automation currently</p>
                                <!--                            <div class="rec_visit"><a href="https://centaconline.in/" target="_blank">Visit Page</a></div>-->

                                <div class="rec_projectcontent"  style="float: left;">
                                    <p class="rec_projecttitle" style="font-style: italic; font-size: 16px;"><b>Services Offered : </b></p>
                                </div>
                                <ul class="services_offered">
                                    <li class="security_Portal_Solution hint--bottom" data-hint="Secure Portal Solutions"></li>
                                    <li class="Design_and_Development_Arch_and_Creative_Design_and_Development hint--bottom" data-hint="Design and Development"></li>
                                    <li class="SEO hint--bottom" data-hint="SEO"></li>
                                    <li class="maintainace hint--bottom" data-hint="Maintenance"></li>
                                </ul>
                                <div class="box bg-1">
                                    <a href="https://centaconline.in/" target="_blank"><button class="mn button button--rayen button--border-thin button--text-thick button--text-upper button--size-s" data-text="Visit Page"><span>Visit Page</span></button></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rec_projecttitle" style="position: relative; top: 15px;">BGI</div>
                    <div class="ms-section" style="background: url(images/bgi_mbl.jpg) no-repeat; background-size: 100% 100%;height: 200px;width:100%;margin: 30px 0px 0px 0px;">
                        <h1></h1>
                    </div>

                    <div class="ms-section">
                        <div class="rght_rectal">
                            <div class="rec_projectcontent">
                                <p style="margin: 25px 0px 0px;">One of the challenging real time project that Atomicka has handled for Business gateways International, Oman and we really feel proud on the successful launch of the portal. The fullest credit passes to the dedicated project team and supportive environment from the client. The project, ‘Joint Supplier Registration System’ – JSRS, is a supplier Validation and business processing portal that is been implemented successfully for ‘Ministry of Oil and Gas’, Oman. The portal engages the registration, validation and approval of valid suppliers for business engagement /Tendering with Ministry of Oil and Gas & its Operators</p>
                                <div class="rec_projectcontent" style="float: left;">
                                    <p class="rec_projecttitle" style="font-style: italic; font-size: 16px;"><b>Services Offered : </b></p>
                                </div>
                                <ul class="services_offered">
                                    <li class="security_Portal_Solution hint--bottom" data-hint="Secure Portal Solutions"></li>
                                    <li class="Design_and_Development_Arch_and_Creative_Design_and_Development hint--bottom" data-hint="Design and Development"></li>
                                    <li class="SEO  hint--bottom" data-hint="SEO"></li>
                                    <li class="MobileApp hint--bottom" data-hint="Mobile App"></li>
                                    <li class="maintainace hint--bottom" data-hint="Maintenance"></li>
                                </ul>

                                <div class="box bg-1">
                                    <a href="https://businessgateways.com/" target="_blank"><button class="mn button button--rayen button--border-thin button--text-thick button--text-upper button--size-s" data-text="Visit Page"><span>Visit Page</span></button></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rec_projecttitle" style="position: relative; top: 15px;">XYGET</div>
                    <div class="ms-section" style="background: url(images/xyget_mbl.jpg) no-repeat; background-size: 100% 100%;height: 200px;width: 100%;margin: 30px 0px 0px 0px;">
                    </div>

                    <div class="ms-section">
                        <div class="rght_rectal">
                            <div class="rec_projectcontent">
                                <p style="margin: 25px 0px 0px;">A native portal of Infom  Atomicka, that serves as a hub for any business network. This is an information portal where the users can acquire information for free and also get registered with the portal to have their presence on web with individual profile of their business. The portal provides vast features and aims in having the business network of the registrants engaged in the portal. The portal serves with varieties of solutions which are cloud based so the registrants can engage themselves with partial or complete online solutions that is commercially competitive</p>
                                <div class="rec_projectcontent" style="float: left;">
                                    <p class="rec_projecttitle" style="font-style: italic; font-size: 16px;"><b>Services Implemented : </b></p>
                                </div>
                                <ul class="services_offered">
                                    <li class="PortalSolution hint--bottom" data-hint="Portal Solutions"></li>
                                    <li class="Design_and_Development_Arch_and_Creative_Design_and_Development hint--bottom" data-hint="Creative Design"></li>
                                    <li class="SEO hint--bottom" data-hint="SEO"></li>
                                    <li class="SMS hint--bottom" data-hint="SMS"></li>
                                    <li class="Email hint--bottom" data-hint="Email"></li>
                                    <li class="Brand_Presentation hint--bottom" data-hint="Brand Presentation"></li>
                                    <li class="maintainace hint--bottom" data-hint="Maintenance"></li>
                                </ul>

                                <div class="box bg-1">
                                    <a href="http://xyget.com/" target="_blank"><button class="mn button button--rayen button--border-thin button--text-thick button--text-upper button--size-s" data-text="Visit Page"><span>Visit Page</span></button></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rec_projecttitle" style="position: relative; top: 8px;">Garden</div>
                    <div class="ms-section" style="background: url(images/garden_mbl.png) no-repeat; background-size: 100% 100%;height: 200px;width: 100%;margin: 30px 0px 0px 0px;">

                    </div>

                    <div class="ms-section">
                        <div class="rght_rectal">
                          <div class="rec_projectcontent">
                                <p style="margin: 25px 0px 0px;">Garden is one of the oldest brands of India in apparel industry. They pioneer in the women’s garment

                                    collections and they always prefer for the traditional way of marketing their releases. It was a leap of

                                    faith for them to transition to the new media / channel </p>

                                <p> <span class="showcase_title">Objective: </span>Create digital properties and generate leads for their franchise program </p>

                                <p> <span class="showcase_title">Geography:</span> India, US, Gulf </p>

                                <p> <span class="showcase_title">Channels: </span> creative web portal design and development, mobile apps, social media, google, emailers </p>

                                <p> <span class="showcase_title">Results: </span> Helped them get more than 25 franchisees</p>

                                <div class="rec_projectcontent" style="float: left;">
                                    <p class="rec_projecttitle" style="font-style: italic; font-size: 16px;"><b>Services Offered : </b></p>
                                </div>
                                <ul class="services_offered">
                                    <li class="Brand_Presentation hint--bottom" data-hint="Brand Consultation"></li>
                                </ul>
                                <!--                                <div class="box bg-1">
                                                                    <a href="http://igcas.edu.in/" target="_blank"><button class="mn button button--rayen button--border-thin button--text-thick button--text-upper button--size-s" data-text="Visit Page"><span>Visit Page</span></button></a>
                                                                </div>-->
                            </div>
                        </div>

                    </div>
                    
                    <div class="rec_projecttitle" style="position: relative; top: 8px;">BILT</div>
                    <div class="ms-section" style="background: url(images/p3_mbl.png) no-repeat; background-size: 100% 100%;height: 200px; width: 100%;margin: 30px 0px 0px 0px;">
                    </div>

                    <div class="ms-section">
                        <div class="rght_rectal">
                            <div class="rec_projectcontent">
                                <p style="margin: 25px 0px 0px;">They are one of the biggest retail stores in India with the brandname p3store – paper, prints & pen. Due

                                    to unviable offline business, we helped them enter into the digital world and have their web presence

                                    successful</p>

                                <p><span class="showcase_title">Objective: </span>create, manage & strengthen their digital presence</p>

                                <p><span class="showcase_title">Geography:</span> India</p>

                                <p> <span class="showcase_title">Channels:</span> web portal design, social media content management, emailers </p>

                                <p> <span class="showcase_title">Results: </span> While minimizing the damage due to change in business model, we have achieved a 150%

                                    growth to their business YOY </p>




                                <div class="rec_projectcontent" style="float: left;">
                                    <p class="rec_projecttitle" style="font-style: italic; font-size: 16px;"><b>Services Offered : </b></p>
                                </div>
                                <ul class="services_offered">
                                    <li class="Brand_Presentation hint--bottom" data-hint="Brand Consultation"></li>
                                </ul>

                                <div class="box bg-1">
                                    <a href="http://www.p3store.com/" target="_blank"><button class="mn button button--rayen button--border-thin button--text-thick button--text-upper button--size-s" data-text="Visit Page"><span>Visit Page</span></button></a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="rec_projecttitle" style="position: relative; top: 8px;">Lulu Webstore</div>
                    <div class="ms-section" style="background: url(images/lulu_mbl.png) no-repeat; background-size: 100% 100%;height: 200px; width: 100%;margin: 30px 0px 0px 0px;"></div>

                    </div>
                    <div class="ms-section">
                        <div class="rght_rectal">
                            <div class="rec_projectcontent">
                                <p style="margin: 25px 0px 0px;">

                                    As one of the big mall owners & grocery store owners to have their presence in UAE, they wanted to

                                    provide value to all their mail retail occupants by way of the website and generate sales</p>

                                <p><span class="showcase_title">Objective:</span> Enhance digital presence & make it a preferred channel of shopping</p>

                                <p><span class="showcase_title">Geography:</span> Gulf / India</p>

                                <p><span class="showcase_title">Channels:</span> creative website design & development, mobile branding, social media, google, Emailers </p>

                                <p><span class="showcase_title">Results:</span> Increased traffic & transaction by 300% in the stipulated 6 months time</p>


                                <div class="rec_projectcontent" style="float: left;">
                                    <p class="rec_projecttitle" style="font-style: italic; font-size: 16px;"><b>Services Offered : </b></p>
                                </div>
                                <ul class="services_offered">
                                    <li class="Brand_Presentation hint--bottom" data-hint="Brand Consultation"></li>
                                </ul>

                                <div class="box bg-1">
                                    <a href="http://www.luluwebstore.com/" target="_blank"><button class="mn button button--rayen button--border-thin button--text-thick button--text-upper button--size-s" data-text="Visit Page"><span>Visit Page</span></button></a>
                                </div>
                            </div>

                            <div id="slect">
                                <a href="selectedworks.php" target="_blank" class="dn">
                                Selected works
                                </a>
                                <!-- <img class="slect_bottom" src="images/black.png" /> -->
                                <a href="selectedworks.php" target="_blank" ><img class="slect_top" src="images/white.png" /></a>
                            </div>
                        </div>
                    </div>

                    
            </div>
        </div>    
           
            <div class="navigations hidden-xs">
                <ul>
                    <li id="tdft"><img src="images/up-arrow.png" class="img-responsive"/></li>
                    <li id="bdft"><img src="images/down-arrow.png" class="img-responsive"/></li>
                </ul>
            </div>
            <div id="loader-wrapper">
                <div id="loader"></div>

                <div class="loader-section section-left"></div>
                <div class="loader-section section-right"></div>
                <div class="bro_comp">The website is best viewed in browser verions of IE 9 and above, Firefox 3.x , Chrome 4.x</div>


            </div>
           <div class="main_wrapper dn container-fluid">
                <header id="header">
                    <div class="col-md-12 col-xs-12 header_menu">
                        <div class="col-md-9 col-xs-6">
                            <h1>
                                <a href="index.php">Infom Atomicka<sup>®</sup></a>
                            </h1>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <!-- http://chipcullen.com/how-to-use-icomoon-and-icon-fonts-part-1-basic-usage/ -->
                            <!-- <ul class="social">
                                <li><a href="https://www.facebook.com/InfomAtomicka" target="_blank" aria-hidden="true" class="icon-facebook"></a></li>
                                <li><a href="https://twitter.com/Infom_Atomicka" aria-hidden="true" class="icon-twitter" target="_blank" ></a></li>
                            </ul><!-End of social-> -->
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <!--textillate animation from https://github.com/jschr/textillate -->
                        <div class="jumbotron hidden-xs" style="background: transparent; padding: 0px; margin:0px">
                            <h1 style="text-align: center; font-family: Century Gothic;font-size: 40px;text-decoration: none; margin: 100px 0 0;"><a class="tlt" style="color: #c31118;" href='concepts2life.php'>Conceptsbrought2life</a></h1>
                        </div>
                        <div class="jumbotron hidden-lg" style="background: transparent; padding: 0px; margin:0px">
                            <h1 style="text-align: center; font-family: Century Gothic;font-size: 24px;text-decoration: none; margin: 50px 0 0;"><a class="" style="color: #c31118;" href='concepts2life.php'>Conceptsbrought2life</a></h1>
                        </div>
                    </div>
                    <div class="clear_both"></div>
                    <div class="bio_menu col-md-12 hidden-xs">
                        <button><img src="images/menu.png" class="img-responsive"/></button>
                        <ul class="bio_submenu">
                            <li><a href="concepts2life.php" class="hvr-buzz-out sub_menu_active">Portfolio</a></li>
                            <li><a href="services.php" class="hvr-buzz-out">Services</a></li>
                            <li><a href="products.php" class="hvr-buzz-out">Products</a></li>
                        </ul>
                    </div>

                <div class="products_menu_mobile col-md-12 hidden-lg">
                        <div class="inner_menu_act"><img src="images/menu.png" class="img-responsive menu_btn"/></div>
                    <div class="products_menuholder">
                        <div class="col-md-6 pn">
                            <nav class="cl-effect-19">
                                <a href="concepts2life.php"><span data-hover="Portfolio">Portfolio</span></a>
                            </nav>
                        </div>
                        <div class="col-md-6 pn">
                            <nav class="cl-effect-19">
                                <a href="services.php"><span data-hover="Services">Services</span></a>
                            </nav>
                        </div>
                        <div class="col-md-6 pn">
                            <nav class="cl-effect-19">
                                <a href="products.php"><span data-hover="Products">Products</span></a>
                            </nav>
                        </div>
                        <div class="menu-hide">
                            <img src="images/close_mobile.png" class="img-responsive close_menu">
                        </div><!--menu-hide-->
                    </div><!--products_menuholder-->
                </div><!--products_menu_mobile-->
                     <?php require_once 'nav-menu.php'; ?>
                </header>
                <div class="clear_both"></div>
            </div><!--End of main_wrapper-->
        </div>
        <script src="js/three.min.js"></script>

        <script src="js/renderers/Projector.js"></script>
        <script src="js/renderers/CanvasRenderer.js"></script>

        <script src="js/libs/stats.min.js"></script>

        <script>
			var current_width = $(window).width();
            var container, stats;
            var camera, scene, renderer, group, particle;
            var mouseX = 0, mouseY = 0;

            var windowHalfX = window.innerWidth / 2;
            var windowHalfY = window.innerHeight / 2;
			if(current_width > 766){
            init();
            animate();
			}
				
            function init() {

                container = document.createElement('div');
                container.setAttribute("class", "canvas_class");
                $('#header').append(container);

                camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 1, 3000);
                camera.position.z = 1000;

                scene = new THREE.Scene();

                var PI2 = Math.PI * 2;
                var program = function (context) {

                    context.beginPath();
                    context.arc(0, 0, 0.5, 0, PI2, true);
                    context.fill();

                };

                group = new THREE.Group();
                scene.add(group);

                for (var i = 0; i < 1500; i++) {

                    var material = new THREE.SpriteCanvasMaterial({
                        color: 0x333333,
                        program: program
                    });
                    particle = new THREE.Sprite(material);
                    particle.position.x += Math.random() * 2500 - 1000;
                    particle.position.y += Math.random() * 2500 - 1000;
                    particle.position.z += Math.random() * 2500 - 1000;
                    particle.scale.x = particle.scale.y = 6;
                    group.add(particle);
                }

                renderer = new THREE.CanvasRenderer({alpha: true});
                renderer.setPixelRatio(window.devicePixelRatio);
                renderer.setSize(window.innerWidth, window.innerHeight);
                container.appendChild(renderer.domElement);


                // Set the background color of the scene.
                renderer.setClearColor(0xffffff, 0);

                stats = new Stats();
                /*stats.domElement.style.position = 'absolute';
                 stats.domElement.style.top = '0px';*/
                container.appendChild(stats.domElement);

                document.addEventListener('mousemove', onDocumentMouseMove, false);
                document.addEventListener('touchstart', onDocumentTouchStart, false);
                document.addEventListener('touchmove', onDocumentTouchMove, false);

                //

                window.addEventListener('resize', onWindowResize, false);

            }

            function onWindowResize() {

                windowHalfX = window.innerWidth / 2;
                windowHalfY = window.innerHeight / 2;

                camera.aspect = window.innerWidth / window.innerHeight;
                camera.updateProjectionMatrix();

                renderer.setSize(window.innerWidth, window.innerHeight);

            }

            //

            function onDocumentMouseMove(event) {

                mouseX = event.clientX - windowHalfX;
                mouseY = event.clientY - windowHalfY;
            }

            function onDocumentTouchStart(event) {

                if (event.touches.length === 1) {

                    event.preventDefault();

                    mouseX = event.touches[ 0 ].pageX - windowHalfX;
                    mouseY = event.touches[ 0 ].pageY - windowHalfY;

                }

            }

            function onDocumentTouchMove(event) {

                if (event.touches.length === 1) {

                    event.preventDefault();

                    mouseX = event.touches[ 0 ].pageX - windowHalfX;
                    mouseY = event.touches[ 0 ].pageY - windowHalfY;

                }

            }

            //

            function animate() {

                requestAnimationFrame(animate);

                render();
                stats.update();

            }

            function render() {

                camera.position.x += (mouseX - camera.position.x) * 0.002;
                camera.position.y += (-mouseY - camera.position.y) * 0.002;
                camera.lookAt(scene.position);

                group.rotation.x += 0.001;
                group.rotation.y += 0.0001;
                group.rotation.z += 0.0001;

                for (var ix = 0; ix < 1000; ix++)
                {
                    particle.position.x += ix + 100.03;
                    particle.position.y += ix + 100.01;
                    particle.position.z += Math.random() * ix + 100.02;
                }


                renderer.render(scene, camera);

            }
	
        </script>
        <script src="js/classie.js" type="text/javascript"></script>
        <script src="js/borderMenu.js" type="text/javascript"></script>
        <script>
            $(document).ready(function () {
                $('.tagline1,.tagline2').fitText(1.2, {maxFontSize: '40px'});
                $('.tagline3').fitText(1.2, {maxFontSize: '26px'});
                $('.popup').popup({
                    close: function () {
                        $(this).find('.embed-container').empty();
                    }
                });
                $('.slect_top').mouseover(function () {
                    $('#slect > .dn').show();
                });
                $('.slect_top').mouseout(function () {
                    $('#slect > .dn').hide();
                });
                setTimeout(function () {
                    $('.bro_comp').hide();
                    $('body').addClass('loaded');
                    $(".main_wrapper").delay(1000).fadeIn();
                    $(".tagline1,.tagline2,.tagline3").delay(1000).show();
                    $(".tagline1").delay(1000).letterfx({"fx": "fall", "words": true, "timing": 200});
                    $(".tagline2").delay(1000).letterfx({"fx": "fall", "words": true, "timing": 200});
                    $(".tagline3").delay(1000).letterfx({"fx": "fall", "words": true, "timing": 200});
                }, 3000);
                // $(".tagline1").letterfx({"fx":"fall","words":true,"timing":500});
                // $(".tagline2").letterfx({"fx":"fall","words":true,"timing":500});
                // $(".tagline3").letterfx({"fx":"fall","words":true,"timing":500});
            });
        </script>
        </div><!-- overflow_hidden -->
    </body>
</html>
