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
        <link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css"/>
        <link href="css/loader.css" rel="stylesheet" type="text/css"/>
        <link href="css/index.css" rel="stylesheet" type="text/css">
        <script src="js/jquery-2.2.0.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/modernizr.custom.js" type="text/javascript"></script>
        <script src="js/jquery.cookie.js" type="text/javascript"></script>
        <script src="js/jquery.lettering.js" type="text/javascript"></script>
        <script src="js/jquery.textillate.js" type="text/javascript"></script>
        <script src="js/tuxsudo.min.js"  type="text/javascript"></script>
        <script src="js/jquery-letterfx.js" type="text/javascript"></script>
        <script src="js/jquery.fittext.js" type="text/javascript"></script>
        <script src="js/jquery.auto-text-rotating.min.js" type="text/javascript"></script>
        <script src="js/form.js" type="text/javascript"></script>
        <script src="js/action.js" type="text/javascript"></script>
        <link href="css/form.css" rel="stylesheet" type="text/css"/>

        <style>
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
            #content form div a:hover{
                color:#c31118;
            }
        </style>

    </head>

    <body>
        <div id="loader-wrapper">
            <div id="loader"></div>

            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
            <div class="bro_comp">The website is best viewed in browser verions of IE 9 and above, Firefox 3.x , Chrome 4.x</div>

        </div>
        <div class="main_wrapper dn">
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
                    <div class="jumbotron" style="background: transparent; padding: 0px; margin:0px">
                        <h1 style="text-align: center; font-family: Century Gothic;font-size: 40px;text-decoration: none; margin: 100px 0 0;"><a class="tlt" style="color: #c31118;" href='login.php'>View Demo</a></h1>
                    </div>
                </div>
                  <?php require_once 'nav-menu.php'; ?>
            </header>
            <div class="clear_both"></div>
            <!-- http://manos.malihu.gr/repository/custom-scrollbar/demo/examples/complete_examples.php -->
            <div class="terms_and_conditions">
                <div class="content terms_and_conditions_inner">


                    <div id="content" class="login_form">
                        <form action="">
                            <div>
                                <input type="text" placeholder="Username" required="" id="username" />
                                <label style="" class="error_field"> Username is required </label>
                            </div>
                            <div>
                                <input type="password" placeholder="Password" required="" id="password" />
                                <label class="error_field">Password is required</label>
                                <label class="error_field">Password is invalid</label>
                            </div>
                            <div>
                                <input type="submit" value="Log in" class="submit hvr-round-corners"/>
                                <a href="singlepage-reachus.php">Reach us for credentials</a>

                            </div>
                        </form><!-- form -->

                    </div>


                    <div class="clear"></div>
                    <div class="clear_both"></div>
                </div><!--End of terms_and_conditions_inner-->
            </div><!--End of terms_and_conditions-->
        </div><!--End of main_wrapper-->
    </body>
    <script src="js/classie.js" type="text/javascript"></script>
    <script src="js/borderMenu.js" type="text/javascript"></script>
    <script src="js/three.min.js"></script>
        <script src="js/renderers/Projector.js"></script>
        <script src="js/renderers/CanvasRenderer.js"></script>
        <script src="js/libs/stats.min.js"></script>

        <script>


            var container, stats;
            var camera, scene, renderer, group, particle;
            var mouseX = 0, mouseY = 0;

            var windowHalfX = window.innerWidth / 2;
            var windowHalfY = window.innerHeight / 2;

            init();
            animate();

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

    <script>
        $(document).ready(function () {
            setTimeout(function () {
                $('.bro_comp').hide();
                $('body').addClass('loaded');
                $(".main_wrapper").delay(1000).fadeIn();
            }, 3000);
        });
    </script>
    <style>

        h1{ font-size:28px;}
        h2{ font-size:26px;}
        h3{ font-size:18px;}
        h4{ font-size:16px;}
        h5{ font-size:14px;}
        h6{ font-size:12px;}
        h1,h2,h3,h4,h5,h6{ color:#563D64;}
        small{ font-size:10px;}
        b, strong{ font-weight:bold;}
        a{ text-decoration: none; }
        a:hover{ text-decoration: underline; }
        .left { float:left; }
        .right { float:right; }
        .alignleft { float: left; margin-right: 15px; }
        .alignright { float: right; margin-left: 15px; }
        .clearfix:after,
        form:after {
            content: ".";
            display: block;
            height: 0;
            clear: both;
            visibility: hidden;
        }
        .container { margin: 25px auto; position: relative; width: 900px; }
        #content {
            background: #f9f9f9;
            background: -moz-linear-gradient(top,  rgba(248,248,248,1) 0%, rgba(249,249,249,1) 100%);
            background: -webkit-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
            background: -o-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
            background: -ms-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
            background: linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f8f8f8', endColorstr='#f9f9f9',GradientType=0 );
            -webkit-box-shadow: 0 1px 0 #fff inset;
            -moz-box-shadow: 0 1px 0 #fff inset;
            -ms-box-shadow: 0 1px 0 #fff inset;
            -o-box-shadow: 0 1px 0 #fff inset;
            box-shadow: 0 1px 0 #fff inset;
            border: 1px solid #c4c6ca;
            margin: 0 auto;
            padding: 25px 0 0;
            position: relative;
            text-align: center;
            text-shadow: 0 1px 0 #fff;
            width: 400px;
        }
        #content h1 {
            color: #7E7E7E;
            font: bold 25px Helvetica, Arial, sans-serif;
            letter-spacing: -0.05em;
            line-height: 20px;
            margin: 10px 0 30px;
        }
        #content h1:before,
        #content h1:after {
            content: "";
            height: 1px;
            position: absolute;
            top: 10px;
            width: 27%;
        }
        #content h1:after {
            background: rgb(126,126,126);
            background: -moz-linear-gradient(left,  rgba(126,126,126,1) 0%, rgba(255,255,255,1) 100%);
            background: -webkit-linear-gradient(left,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
            background: -o-linear-gradient(left,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
            background: -ms-linear-gradient(left,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
            background: linear-gradient(left,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
            right: 0;
        }
        #content h1:before {
            background: rgb(126,126,126);
            background: -moz-linear-gradient(right,  rgba(126,126,126,1) 0%, rgba(255,255,255,1) 100%);
            background: -webkit-linear-gradient(right,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
            background: -o-linear-gradient(right,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
            background: -ms-linear-gradient(right,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
            background: linear-gradient(right,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
            left: 0;
        }
        #content:after,
        #content:before {
            background: #f9f9f9;
            background: -moz-linear-gradient(top,  rgba(248,248,248,1) 0%, rgba(249,249,249,1) 100%);
            background: -webkit-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
            background: -o-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
            background: -ms-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
            background: linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f8f8f8', endColorstr='#f9f9f9',GradientType=0 );
            border: 1px solid #c4c6ca;
            content: "";
            display: block;
            height: 100%;
            left: -1px;
            position: absolute;
            width: 100%;
        }
        #content:after {
            -webkit-transform: rotate(2deg);
            -moz-transform: rotate(2deg);
            -ms-transform: rotate(2deg);
            -o-transform: rotate(2deg);
            transform: rotate(2deg);
            top: 0;
            z-index: -1;
        }
        #content:before {
            -webkit-transform: rotate(-3deg);
            -moz-transform: rotate(-3deg);
            -ms-transform: rotate(-3deg);
            -o-transform: rotate(-3deg);
            transform: rotate(-3deg);
            top: 0;
            z-index: -2;
        }
        #content form { margin: 0 20px; position: relative }
        #content form input[type="text"],
        #content form input[type="password"] {
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            -ms-border-radius: 3px;
            -o-border-radius: 3px;
            border-radius: 3px;
            -webkit-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
            -moz-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
            -ms-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
            -o-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
            box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -ms-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            transition: all 0.5s ease;
            background: #eae7e7 url(http://cssdeck.com/uploads/media/items/8/8bcLQqF.png) no-repeat;
            border: 1px solid #c8c8c8;
            color: #777;
            font: 13px Helvetica, Arial, sans-serif;
            margin: 0 0 10px;
            padding: 15px 10px 15px 40px;
            width: 80%;
        }
        #content form input[type="text"]:focus,
        #content form input[type="password"]:focus {
            -webkit-box-shadow: 0 0 2px #ed1c24 inset;
            -moz-box-shadow: 0 0 2px #ed1c24 inset;
            -ms-box-shadow: 0 0 2px #ed1c24 inset;
            -o-box-shadow: 0 0 2px #ed1c24 inset;
            box-shadow: 0 0 2px #ed1c24 inset;
            background-color: #fff;
            border: 1px solid #ed1c24;
            outline: none;
        }
        #username { background-position: 10px 10px !important }
        #password { background-position: 10px -53px !important }
        #content form input[type="submit"] {
            background-color: #d3d3d3;
    background-image: linear-gradient(to bottom, #d3d3d3, #707070);
    border: 1px solid #b7b7b7;
    border-radius: 3px;
    color: hsl(0, 0%, 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fee79a', endColorstr='#fec151',GradientType=0 );
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            -ms-border-radius: 3px;
            -o-border-radius: 3px;
            border-radius: 3px;
            /*-webkit-box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
            -moz-box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
            -ms-box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
            -o-box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
            box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;*/
            border: 1px solid #b7b7b7;
            color: #fff;
            cursor: pointer;
            float: left;
            font: bold 15px Century Gothic;
            height: 35px;
            margin: 20px 0 35px 35px;
            position: relative;
            text-shadow:-1px -1px 0 rgba(0, 0, 0, 0.3);
            width: 100px;
            padding: 10px 18px;
            height: 42px;
        }
        #content form input[type="submit"]:hover {
            background: #c31118 none repeat scroll 0 0;
            border: medium none;
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fec151', endColorstr='#fee79a',GradientType=0 );
        }
        #content form div a {
            color: #004a80;
            float: right;
            font-size: 12px;
            margin: 30px 15px 0 0;
            text-decoration: underline;
        }
        .button {
            background: rgb(247,249,250);
            background: -moz-linear-gradient(top,  rgba(247,249,250,1) 0%, rgba(240,240,240,1) 100%);
            background: -webkit-linear-gradient(top,  rgba(247,249,250,1) 0%,rgba(240,240,240,1) 100%);
            background: -o-linear-gradient(top,  rgba(247,249,250,1) 0%,rgba(240,240,240,1) 100%);
            background: -ms-linear-gradient(top,  rgba(247,249,250,1) 0%,rgba(240,240,240,1) 100%);
            background: linear-gradient(top,  rgba(247,249,250,1) 0%,rgba(240,240,240,1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f7f9fa', endColorstr='#f0f0f0',GradientType=0 );
            -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.1) inset;
            -moz-box-shadow: 0 1px 2px rgba(0,0,0,0.1) inset;
            -ms-box-shadow: 0 1px 2px rgba(0,0,0,0.1) inset;
            -o-box-shadow: 0 1px 2px rgba(0,0,0,0.1) inset;
            box-shadow: 0 1px 2px rgba(0,0,0,0.1) inset;
            -webkit-border-radius: 0 0 5px 5px;
            -moz-border-radius: 0 0 5px 5px;
            -o-border-radius: 0 0 5px 5px;
            -ms-border-radius: 0 0 5px 5px;
            border-radius: 0 0 5px 5px;
            border-top: 1px solid #CFD5D9;
            padding: 15px 0;
        }
        .button a {
            background: url(http://cssdeck.com/uploads/media/items/8/8bcLQqF.png) 0 -112px no-repeat;
            color: #7E7E7E;
            font-size: 17px;
            padding: 2px 0 2px 40px;
            text-decoration: none;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }
        .button a:hover {
            background-position: 0 -135px;
            color: #00aeef;
        }
    </style>
</html>
