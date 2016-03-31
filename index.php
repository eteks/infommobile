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
        <link rel="stylesheet" href="css/normalize.css">
        <link href="css/loader.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/animate.css" rel="stylesheet" type="text/css"/>
        <link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css"/>
        <link href="css/index.css" rel="stylesheet" type="text/css">
        <!-- <link href="css/index.css" rel="stylesheet" type="text/css"/> -->
        <script src="js/jquery-2.2.0.js" type="text/javascript"></script>
        <script src="js/jquery.cookie.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <!-- <script src="js/less.js" type="text/javascript"></script> -->
        <script src="js/modernizr.custom.js" type="text/javascript"></script>
        <script src="js/jquery.lettering.js" type="text/javascript"></script>
        <script src="js/jquery.textillate.js" type="text/javascript"></script>
        <script src="js/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>
        <script src="js/action.js" type="text/javascript"></script>
        <style>
            body {
                /*background-color: #000000;*/
                margin: 0px;
                overflow: hidden;
            }

            a {
                color:#0078ff;
            }
            canvas{
                z-index: 1000 ;
            }
        </style>

    </head>
    <body>
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
            setTimeout(animate, 3000)
            //animate();
			
            function init() {

                container = document.createElement('div');
                document.body.appendChild(container);

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
                        color: 0xcccccc,
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
                renderer.setClearColor(0x000000, 0);

                stats = new Stats();
                // stats.domElement.style.position = 'absolute';
                // stats.domElement.style.top = '0px';
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
		}
        </script>

        <header>
            <div class="col-md-11 col-xs-12 header_menu">
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
            <?php require_once 'nav-menu.php'; ?>
        </header>
        <div id="loader-wrapper">
            <div id="loader"></div>

            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
            <div class="bro_comp">The website is best viewed in browser verions of IE 9 and above, Firefox 3.x , Chrome 4.x</div>
        </div>
        <h3 class="text-center enter_menu">Click to <br> Navigate</h3>
        <!-- referred from http://codepen.io/eode9/pen/tdheq-->
        <div class="text_animation container-fluid">
            <!-- <div class="text_animation_content_1 col-md-12">
                <h2 class="frame-2">We bring the technology magic to your doorsteps</h2>
            </div> --><!--end of text_animation_content_1-->
            <div class="text_animation_content_2">

                <h2 class="frame-3 col-md-12"><span>WE BRING YOUR CONCEPTS TO LIFE</span></h2>
            </div><!--end of text_animation_content_2-->
        </div><!--end of text_animation-->
    </body>
    <script src="js/classie.js" type="text/javascript"></script>
    <script src="js/borderMenu.js" type="text/javascript"></script>
    <script>
            $(document).ready(function () {
                setTimeout(function () {
                    $('.bro_comp').hide();
                    $('body').addClass('loaded');

                }, 3000);
                setTimeout(function () {
                    $('.enter_menu').animate({"left": "40%"}, 400);

                }, 9000);
            });
    </script>
</html>
