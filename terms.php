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
        <link href="css/animate.css" rel="stylesheet" type="text/css"/>
        <link href="css/loader.css" rel="stylesheet" type="text/css"/>
        <link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css"/>
        <link href="css/index.css" rel="stylesheet" type="text/css">
        <script src="js/jquery-2.2.0.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/jquery.cookie.js" type="text/javascript"></script>
        <!-- <script src="js/less.js" type="text/javascript"></script> -->
        <script src="js/modernizr.custom.js" type="text/javascript"></script>
        <script src="js/jquery.lettering.js" type="text/javascript"></script>
        <script src="js/jquery.textillate.js" type="text/javascript"></script>
        <script src="js/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>
        <script src="js/action.js" type="text/javascript"></script>
    </head>
    <style type="text/css">
        canvas{
            z-index: 1000 ;
        }
        .canvas_class{
            height: 200px;
            overflow: hidden;
            position: absolute;
            top: 0px;
        }
        header{
            top: 0px; position: relative; z-index: 9999;
        }
        /*#header{
            position: relative;
        }
        @media (min-width: 768px){
            #header{
                position: fixed;
            }
        }*/
       .terms_and_conditions{
        	top:116px;
        }
        @media (min-width: 768px){
        	.terms_and_conditions{
        		top:20px;
        	}
        }
    </style>

    <body>
        <div id="loader-wrapper">
			<div id="loader"></div>

			<div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
            <div class="bro_comp">The website is best viewed in browser verions of IE 9 and above, Firefox 3.x , Chrome 4.x</div>

		</div>
        <div class="main_wrapper dn" id="header">
            <header>
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
                        <h1 style="text-align: center; font-family: Century Gothic;font-size: 40px;text-decoration: none; margin: 100px 0 0;"><a class="tlt" style="color: #c31118;" href='terms.php'>Terms of Use</a></h1>
                    </div>
                    <div class="jumbotron hidden-lg" style="background: transparent; padding: 0px; margin:0px">
                        <h1 style="text-align: center; font-family: Century Gothic;font-size: 25px;text-decoration: none; margin: 60px 0 0;"><a class="" style="color: #c31118;" href='terms.php'>Terms of Use</a></h1>
                    </div>
                </div>
                 <?php require_once 'nav-menu.php'; ?>
            </header>
            <div class="clear_both"></div>
            <!-- http://manos.malihu.gr/repository/custom-scrollbar/demo/examples/complete_examples.php -->
            <div class="terms_and_conditions hidden-xs">
                <div class="content mCustomScrollbar terms_and_conditions_inner">
                    <p>Welcome to our website. If you continue to browse and use this website, you are agreeing to comply with and be bound by the following terms and conditions of use, which together with our privacy policy govern Infom Atomicka's relationship with you in relation to this website. If you disagree with any part of these terms and conditions, please do not use our website.</p>
                    <p>The term Infom Atomicka or 'us' or 'we' refers to the owner of the website whose registered office is #10, 2<sup>nd</sup> Floor, Maria Tower, Vellavari St, Muthialpet, Pondicherry. Our company registration number is U72400PY2005PTC001905. The term 'you' refers to the user or viewer of our website.</p>
                    <p>The use of this website is subject to the following terms of use:</p>
                    <p>The content of the pages of this website is for your general information and use only. It is subject to change without notice.</p>
                    <p>This website uses cookies to monitor browsing preferences. If you do allow cookies to be used, the following personal information may be stored by us to contact you in future for providing offers/schemes, etc for our services</p>
                    <p>The following will be the list of information</p>
                    <p>Your IP address, Name, Contact Number, email IDs, Personal information, Official data, feedback on our services, proposal for utilizing our services</p>
                    <p>Neither we nor any third parties provide any warranty or guarantee as to the accuracy, timeliness, performance, completeness or suitability of the information and materials found or offered on this website for any particular purpose. You acknowledge that such information and materials may contain inaccuracies or errors and we expressly exclude liability for any such inaccuracies or errors to the fullest extent permitted by law.</p>
                    <p>Your use of any information or materials on this website is entirely at your own risk, for which we shall not be liable. It shall be your own responsibility to ensure that any products, services or information available through this website meet your specific requirements.</p>
                    <p>This website contains material which is owned by or licensed to us. This material includes, but is not limited to, the design, layout, look, appearance and graphics. Reproduction is prohibited other than in accordance with the copyright notice, which forms part of these terms and conditions.</p>
                    <p>All trade marks reproduced in this website which are not the property of, or licensed to, the operator are acknowledged on the website.</p>
                    <p>Unauthorised use of this website may give rise to a claim for damages and/or be a criminal offence.</p>
                    <p>From time to time this website may also include links to other websites. These links are provided for your convenience to provide further information. They do not signify that we endorse the website(s). We have no responsibility for the content of the linked website(s).</p>
                    <p>Your use of this website and any dispute arising out of such use of the website is subject to the laws of India</p>
                    <h3>Website disclaimer</h3>
                    <p>The information contained in this website is for general information purposes only. The information is provided by Infom Atomicka and while we endeavour to keep the information up to date and correct, we make no representations or warranties of any kind, express or implied, about the completeness, accuracy, reliability, suitability or availability with respect to the website or the information, products, services, or related graphics contained on the website for any purpose. Any reliance you place on such information is therefore strictly at your own risk.</p>
                    <p>In no event will we be liable for any loss or damage including without limitation, indirect or consequential loss or damage, or any loss or damage whatsoever arising from loss of data or profits arising out of, or in connection with, the use of this website.</p>
                    <p>Through this website you are able to link to other websites which are not under the control of Infom Atomicka. We have no control over the nature, content and availability of those sites. The inclusion of any links does not necessarily imply a recommendation or endorse the views expressed within them.</p>
                    <p>Every effort is made to keep the website up and running smoothly. However, Infom Atomicka takes no responsibility for, and will not be liable for, the website being temporarily unavailable due to technical issues beyond our control.</p>
                    <h3>Copyright notice</h3>
                    <p>This website and its content is copyright of Infom Atomicka &ndash; &copy; Infom Atomicka 2016. All rights reserved.</p>
                    <p>Any redistribution or reproduction of part or all of the contents in any form is prohibited other than the following:</p>
                        <ul>
                            <li>you may print or download to a local hard disk extracts for your personal and non-commercial use only</li>
                            <li>you may copy the content to individual third parties for their personal use, but only if you acknowledge the website as the source of the material</li>
                            <li>You may not, except with our express written permission, distribute or commercially exploit the content. Nor may you transmit it or store it in any other website or other form of electronic retrieval system.</li>
                        </ul>
                    <div class="clear_both"></div>
                </div><!--End of terms_and_conditions_inner-->
            </div><!--End of terms_and_conditions-->
        </div><!--End of main_wrapper-->
        <div class="terms_and_conditions hidden-lg">
                <div class="content mCustomScrollbar terms_and_conditions_inner">
                    <p>Welcome to our website. If you continue to browse and use this website, you are agreeing to comply with and be bound by the following terms and conditions of use, which together with our privacy policy govern Infom Atomicka's relationship with you in relation to this website. If you disagree with any part of these terms and conditions, please do not use our website.</p>
                    <p>The term Infom Atomicka or 'us' or 'we' refers to the owner of the website whose registered office is #10, 2<sup>nd</sup> Floor, Maria Tower, Vellavari St, Muthialpet, Pondicherry. Our company registration number is U72400PY2005PTC001905. The term 'you' refers to the user or viewer of our website.</p>
                    <p>The use of this website is subject to the following terms of use:</p>
                    <p>The content of the pages of this website is for your general information and use only. It is subject to change without notice.</p>
                    <p>This website uses cookies to monitor browsing preferences. If you do allow cookies to be used, the following personal information may be stored by us to contact you in future for providing offers/schemes, etc for our services</p>
                    <p>The following will be the list of information</p>
                    <p>Your IP address, Name, Contact Number, email IDs, Personal information, Official data, feedback on our services, proposal for utilizing our services</p>
                    <p>Neither we nor any third parties provide any warranty or guarantee as to the accuracy, timeliness, performance, completeness or suitability of the information and materials found or offered on this website for any particular purpose. You acknowledge that such information and materials may contain inaccuracies or errors and we expressly exclude liability for any such inaccuracies or errors to the fullest extent permitted by law.</p>
                    <p>Your use of any information or materials on this website is entirely at your own risk, for which we shall not be liable. It shall be your own responsibility to ensure that any products, services or information available through this website meet your specific requirements.</p>
                    <p>This website contains material which is owned by or licensed to us. This material includes, but is not limited to, the design, layout, look, appearance and graphics. Reproduction is prohibited other than in accordance with the copyright notice, which forms part of these terms and conditions.</p>
                    <p>All trade marks reproduced in this website which are not the property of, or licensed to, the operator are acknowledged on the website.</p>
                    <p>Unauthorised use of this website may give rise to a claim for damages and/or be a criminal offence.</p>
                    <p>From time to time this website may also include links to other websites. These links are provided for your convenience to provide further information. They do not signify that we endorse the website(s). We have no responsibility for the content of the linked website(s).</p>
                    <p>Your use of this website and any dispute arising out of such use of the website is subject to the laws of India</p>
                    <h3>Website disclaimer</h3>
                    <p>The information contained in this website is for general information purposes only. The information is provided by Infom Atomicka and while we endeavour to keep the information up to date and correct, we make no representations or warranties of any kind, express or implied, about the completeness, accuracy, reliability, suitability or availability with respect to the website or the information, products, services, or related graphics contained on the website for any purpose. Any reliance you place on such information is therefore strictly at your own risk.</p>
                    <p>In no event will we be liable for any loss or damage including without limitation, indirect or consequential loss or damage, or any loss or damage whatsoever arising from loss of data or profits arising out of, or in connection with, the use of this website.</p>
                    <p>Through this website you are able to link to other websites which are not under the control of Infom Atomicka. We have no control over the nature, content and availability of those sites. The inclusion of any links does not necessarily imply a recommendation or endorse the views expressed within them.</p>
                    <p>Every effort is made to keep the website up and running smoothly. However, Infom Atomicka takes no responsibility for, and will not be liable for, the website being temporarily unavailable due to technical issues beyond our control.</p>
                    <h3>Copyright notice</h3>
                    <p>This website and its content is copyright of Infom Atomicka &ndash; &copy; Infom Atomicka 2016. All rights reserved.</p>
                    <p>Any redistribution or reproduction of part or all of the contents in any form is prohibited other than the following:</p>
                        <ul>
                            <li>you may print or download to a local hard disk extracts for your personal and non-commercial use only</li>
                            <li>you may copy the content to individual third parties for their personal use, but only if you acknowledge the website as the source of the material</li>
                            <li>You may not, except with our express written permission, distribute or commercially exploit the content. Nor may you transmit it or store it in any other website or other form of electronic retrieval system.</li>
                        </ul>
                    <div class="clear_both"></div>
                </div><!--End of terms_and_conditions_inner-->
            </div><!--End of terms_and_conditions-->
    </body>
    <script src="js/classie.js" type="text/javascript"></script>
    <script src="js/borderMenu.js" type="text/javascript"></script>
    <script src="js/three.min.js"></script>
    <script src="js/renderers/Projector.js"></script>
    <script src="js/renderers/CanvasRenderer.js"></script>
    <script src="js/libs/stats.min.js"></script>
    <script>
    $(document).ready(function(){
        setTimeout(function(){
            $('.bro_comp').hide();
            $('body').addClass('loaded');
            $(".main_wrapper").delay(1000).fadeIn();
        }, 3000);
    });
    </script>
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

                container = document.createElement( 'div' );
                container.setAttribute("class", "canvas_class");
                $('#header').append( container );

                camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 1, 3000 );
                camera.position.z = 1000;

                scene = new THREE.Scene();

                var PI2 = Math.PI * 2;
                var program = function ( context ) {

                    context.beginPath();
                    context.arc( 0, 0, 0.5, 0, PI2, true );
                    context.fill();

                };

                group = new THREE.Group();
                scene.add( group );

                for ( var i = 0; i < 1500; i++ ) {

                    var material = new THREE.SpriteCanvasMaterial( {
                        color: 0x333333,
                        program: program
                    } );
                        particle = new THREE.Sprite(material);
                        particle.position.x += Math.random() * 2500 - 1000;
                        particle.position.y += Math.random() * 2500 - 1000;
                        particle.position.z += Math.random() * 2500 - 1000;
                        particle.scale.x = particle.scale.y = 6;
                        group.add(particle);
                }

                renderer = new THREE.CanvasRenderer({ alpha: true });
                renderer.setPixelRatio( window.devicePixelRatio );
                renderer.setSize( window.innerWidth, window.innerHeight );
                container.appendChild( renderer.domElement );


                // Set the background color of the scene.
                renderer.setClearColor(0xffffff,0);

                stats = new Stats();
                /*stats.domElement.style.position = 'absolute';
                stats.domElement.style.top = '0px';*/
                container.appendChild( stats.domElement );

                document.addEventListener( 'mousemove', onDocumentMouseMove, false );
                document.addEventListener( 'touchstart', onDocumentTouchStart, false );
                document.addEventListener( 'touchmove', onDocumentTouchMove, false );

                //

                window.addEventListener( 'resize', onWindowResize, false );

            }

            function onWindowResize() {

                windowHalfX = window.innerWidth / 2;
                windowHalfY = window.innerHeight / 2;

                camera.aspect = window.innerWidth / window.innerHeight;
                camera.updateProjectionMatrix();

                renderer.setSize( window.innerWidth, window.innerHeight );

            }

            //

            function onDocumentMouseMove( event ) {

                mouseX = event.clientX - windowHalfX;
                mouseY = event.clientY - windowHalfY;
            }

            function onDocumentTouchStart( event ) {

                if ( event.touches.length === 1 ) {

                    event.preventDefault();

                    mouseX = event.touches[ 0 ].pageX - windowHalfX;
                    mouseY = event.touches[ 0 ].pageY - windowHalfY;

                }

            }

            function onDocumentTouchMove( event ) {

                if ( event.touches.length === 1 ) {

                    event.preventDefault();

                    mouseX = event.touches[ 0 ].pageX - windowHalfX;
                    mouseY = event.touches[ 0 ].pageY - windowHalfY;

                }

            }

            //

            function animate() {

                requestAnimationFrame( animate );

                render();
                stats.update();

            }

            function render() {

                camera.position.x += ( mouseX - camera.position.x ) * 0.002;
                camera.position.y += ( - mouseY - camera.position.y ) * 0.002;
                camera.lookAt( scene.position );

                group.rotation.x += 0.001;
                group.rotation.y += 0.0001;
                group.rotation.z += 0.0001;

                for(var ix=0; ix<1000 ; ix++)
                {
                    particle.position.x += ix + 100.03;
                    particle.position.y += ix + 100.01;
                    particle.position.z += Math.random()*ix + 100.02;
                }


                renderer.render( scene, camera );

            }
		
        </script>
</html>
