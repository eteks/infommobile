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
        <link href="css/component.css" rel="stylesheet" type="text/css"/>
        <link href="css/index.css" rel="stylesheet" type="text/css">
        <script src="js/jquery-2.2.0.js" type="text/javascript"></script>
        <script src="http://u1.linnk.it/qc8sbw/usr/apps/textsync/upload/jquery-mobile-touch.value.js" ></script>
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
        <script src="js/bootstrap-filestyle.js" type="text/javascript"></script>
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
            #header{
            position: relative;
            }
            .main_wrapper {
    			position: relative;
			}
			@media (min-width: 768px){
				.main_wrapper {
    				position: fixed;
				}
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
                        <div class="clear_both"></div>
                    </div>
                    <div class="clear_both"></div>
                </div>
                <div class="clear_both"></div>
                <div class="col-xs-12" style="position:fixed; top:0px; background:#fff;">
                    <!--textillate animation from https://github.com/jschr/textillate -->
                    <div class="jumbotron hidden-xs" style="background: transparent; padding: 0px; margin:0px">
                        <h1 style="text-align: center; font-family: Century Gothic;font-size: 40px;text-decoration: none; margin: 100px 0 0;"><a class="tlt" style="color: #c31118;" href='privacy.php'>Reach Us</a></h1>
                    </div>
                    <div class="jumbotron hidden-lg" style="background: transparent; padding: 0px; margin:0px">
                        <h1 style="text-align: center; font-family: Century Gothic;font-size: 25px;text-decoration: none; margin: 75px 0 0;"><a class="" style="color: #c31118;" href='privacy.php'>Reach Us</a></h1>
                    </div>
                </div>
                <?php require_once 'nav-menu.php'; ?>
                <div class="clear_both"> </div>
            </header>
            <div class="clear_both"></div>
            <!-- http://manos.malihu.gr/repository/custom-scrollbar/demo/examples/complete_examples.php -->
            <div class="terms_and_conditions">
                <?php include("reachus.php"); ?>
                <div class="clear"></div>
                <div class="clear_both"></div>

            </div><!--End of terms_and_conditions-->
        </div><!--End of main_wrapper-->
        <!-- <div class="copyright col-md-12"><p>Copyright ©  2016. All rights are Reserved</p></div> -->
    </body>
    <script src="js/three.min.js"></script>
    <script src="js/renderers/Projector.js"></script>
    <script src="js/renderers/CanvasRenderer.js"></script>

    <script src="js/libs/stats.min.js"></script>

    <script src="js/classie.js" type="text/javascript"></script>
    <script src="js/borderMenu.js" type="text/javascript"></script>
    <script>
        $(function() {
            $('#reset').click(function() {
                $(':input','#myform')
                   .not(':button, :submit, :reset, :hidden')
                   .val('')
                   .removeAttr('checked')
                   .removeAttr('selected');
            });
        });
        $(":file").filestyle({buttonText: "Find file"});
        $(document).ready(function () {
            setTimeout(function () {
                $('.bro_comp').hide();
                $('body').addClass('loaded');
                $(".main_wrapper").delay(1000).fadeIn();
            }, 3000);
             $(":file").filestyle({buttonText: "Find file"});
             $(document).on('change', '.btn-file :file', function() {
                 var input = $(this),
                 numFiles = input.get(0).files ? input.get(0).files.length : 1,
                 label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
                 input.trigger('fileselect', [numFiles, label]);
             });
             $('.btn-file :file').on('fileselect', function(event, numFiles, label) {

                var input = $(this).parents('.input-group').find(':text'),
                    log = numFiles > 1 ? numFiles + ' files selected' : label;

                if( input.length ) {
                    input.val(log);
                } else {
                    if( log ) alert(log);
                }

            });

        });

    </script>
    <script>
        (function () {
            // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
            if (!String.prototype.trim) {
                (function () {
                    // Make sure we trim BOM and NBSP
                    var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
                    String.prototype.trim = function () {
                        return this.replace(rtrim, '');
                    };
                })();
            }

            [].slice.call(document.querySelectorAll('input.input__field')).forEach(function (inputEl) {
                // in case the input is already filled..
                if (inputEl.value.trim() !== '') {
                    classie.add(inputEl.parentNode, 'input--filled');
                }

                // events:
                inputEl.addEventListener('focus', onInputFocus);
                inputEl.addEventListener('blur', onInputBlur);
            });

            function onInputFocus(ev) {
                classie.add(ev.target.parentNode, 'input--filled');
            }

            function onInputBlur(ev) {
                if (ev.target.value.trim() === '') {
                    classie.remove(ev.target.parentNode, 'input--filled');
                }
            }
        })();
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
</html>
