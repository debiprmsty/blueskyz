<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Blue Skyz Sport, Bar, and Restaurant</title>
  <link rel="shortcut icon" href="/assets_fe/img/logobeumi.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets_fe/css/style.css">
</head>
<body>
  <div id="loader" class="loader"></div>
    <div id="cursor"></div>
    <nav>
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <img src="img/logobeumi.png" alt="">
        <p id="link-menu">Menu</p>
        <a href="#location">Location</a>
    </nav>
    <div id="nav-open">
        <img src="img/menu.png" alt="">
    </div>
    <div class="nav-menu">
        <div class="nav-close">
            <img src="img/close.png" alt="" id="nav-close">
        </div>
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <p id="link-menu1">Menu</p>
        <a href="#location">Location</a>
    </div>
    <div id="home" class="landing-home d-flex justify-content-center align-items-center">
        <h1><span>BE</span></h1>
        <div class="garis-landing"></div>
        <h1 class="umi">UMI</h1>
    </div>
    <div id="about" class="about d-flex justify-content-center">
        <div class="area-about d-flex justify-content-around align-items-center">
            <div class="text-about d-flex flex-column">
                <h1>BEUMI</h1>
                <p>Beumi is a Japanese restaurant that serves typical Japanese food, we are proud of our varied and ever-evolving menu. We only use the highest quality ingredients to ensure every dish we serve is truly special.</p>
                <h5>Operational Hour</h5>
                <div class="area-jam">
                    <div class="inner-jam">
                        <h6>Sunday</h6>
                        <h6>10.00 - 22.00</h6>
                    </div>
                    <div class="inner-jam">
                        <h6>Monday</h6>
                        <h6>11.00 - 22.00</h6>
                    </div>
                    <div class="inner-jam">
                        <h6>Tuesday</h6>
                        <h6>11.00 - 22.00</h6>
                    </div>
                    <div class="inner-jam">
                        <h6>Wednesday</h6>
                        <h6>11.00 - 22.00</h6>
                    </div>
                    <div class="inner-jam">
                        <h6>Thursday</h6>
                        <h6>11.00 - 22.00</h6>
                    </div>
                    <div class="inner-jam">
                        <h6>Friday</h6>
                        <h6>11.00 - 22.00</h6>
                    </div>
                    <div class="inner-jam">
                        <h6>Saturday</h6>
                        <h6>10.00 - 22.00</h6>
                    </div>
                </div>
            </div>
            <div class="garis-about"></div>
            <video src="img/home1.mp4" loop muted autoplay></video>
        </div>
    </div>
    <div class="home d-flex flex-column justify-content-center align-items-center">
        <img src="img/asap/asap (58).png" alt="" id="asap">
        <div class="text-home">
            <h1>NEW MENU</h1>
        </div>
        <div class="inner-home d-flex justify-content-center align-items-center">
            <img src="img/hand-left.png" alt="">
            <img class="right-hand" src="img/hand-rights.png" alt="">
        </div>
    </div>
    <div class="best-menu p-ats d-flex flex-column align-items-center justify-content-center">
        <div class="area-best d-flex flex-column">
            <div style="overflow: hidden; height: fit-content;">
                <h1>BEST MENU</h1>
            </div>
            <div id="best-menu1" class="inner-best area-cursor-none d-flex justify-content-between">
                <img src="img/best-menu1.jpg" alt="" id="best-img1">
                <h2>01</h2>
                <h3>Miso Ramen</h3>
                <div class="best-link">
                    <img src="img/right-arrow.png" alt="">
                </div>
            </div>
            <div id="best-menu2" class="inner-best area-cursor-none d-flex justify-content-between">
                <img src="img/best-menu2.jpg" alt="" id="best-img2">
                <h2>02</h2>
                <h3>Spicy Salmon Roll</h3>
                <div class="best-link">
                    <img src="img/right-arrow.png" alt="">
                </div>
            </div>
            <div id="best-menu3" class="inner-best area-cursor-none d-flex justify-content-between">
                <img src="img/best-menu3.jpg" alt="" id="best-img3">
                <h2>03</h2>
                <h3>Tempura Don</h3>
                <div class="best-link">
                    <img src="img/right-arrow.png" alt="">
                </div>
            </div>
        </div>
        <h1 id="link-all-menu">SEE ALL MENU</h1>
    </div>
    <div class="landing-text p-ats d-flex flex-column justify-content-center align-items-center">
        <h1>Enjoy the Japanese sensasion in <span>BEUMI</span></h1>
        <p>Welcome to Beumi, a place where we invite you to experience an alluring authentic Japanese sensation. We proudly serve delicious and tempting sushi dishes, bringing the wonders of flavors from the Land of the Rising Sun straight to your plate. At Beumi, we honor Japanese culinary traditions and expertise with a creative menu and high-quality ingredients.</p>
    </div>
    <div id="location" class="map">
        <h1>LOCATION</h1>
        <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.658220236038!2d115.17361187370042!3d-8.628772387706691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd238cfa9704293%3A0xb90785bd6a37c482!2sSMK%20Wira%20Harapan!5e0!3m2!1sid!2sid!4v1697023869837!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="footer p-ats d-flex flex-column align-items-center">
        <div class="area-footer">
            <div class="footer-1 d-flex flex-column">
                <h1>BEUMI</h1>
            </div>
            <div class="footer-1 d-flex flex-column">
                <a href="">About Us</a>
                <a href="">Career</a>
            </div>
            <div class="footer-1 d-flex flex-column">
                <a href="">Events</a>
                <a href="">Promo</a>
            </div>
            <div class="footer-1 d-flex flex-column">
                <a href="">Menu</a>
                <a href="">Help</a>
            </div>
        </div>
        <div class="outer-footer">
            <div>
                <a href="">Cookies Policy</a>
                <a href="">Legal Terms</a>
                <a href="">Privacy Policy</a>
            </div>
            <div class="sosial-media">
                <img src="img/instagram.png" alt="">
                <img src="img/facebook-app-symbol.png" alt="">
                <img src="img/twitter.png" alt="">
            </div>
        </div>
    </div>









    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="/assets_fe/js/main.js"></script>
    <script>
        gsap.registerPlugin(ScrollTrigger);
        gsap.to(".right-hand",{
            scrollTrigger:{
                trigger: ".home",
                scrub: true,
                start: '80% 100%',
                toggleAction: "restart pause reverse none"
            },
            y: "-60%",
            rotate: "40deg",
            duration: 3,
            ease: "power2.out"
        });
        gsap.to(".umi",{
            clipPath: "inset(0 0 0 0)",
            duration: 1,
            delay:0.3,
            ease: "power2.out"
        });
        gsap.to(".landing-home h1",{
            y: 0,
            opacity:1,
            duration: 1,
            ease: "power2.out"
        });
        gsap.to("#asap",{
            scrollTrigger:{
                trigger: ".home",
                start: '80% 100%',
            },
            opacity: 1,
            ease: "power2.out"
        });

        gsap.to(".text-home h1",{
            scrollTrigger:{
                trigger: ".home",
                scrub: true,
                start: '80% 100%',
                toggleActions: "restart pause reverse none"
            },
            opacity: 1,
            ease: "power2.out"
        });
        gsap.from(".text-about",{
            scrollTrigger:{
                trigger: ".text-about",
                toggleActions: "restart none none none"
            },
            y:200,
            duration:1,
            opacity: 0.5,
            ease: "power2.out"
        });
        gsap.from(".about video",{
            scrollTrigger:{
                trigger: ".about video",
                toggleActions: "restart none reverse none"
            },
            clipPath:"inset(100% 0 0 0)",
            duration:2,
            ease: "power2.out"
        });

        gsap.from(".area-best h1",{
            scrollTrigger:{
                trigger: ".area-best h1",
                toggleActions: "restart none restart none"
            },
            y:200,
            duration:1,
            skewY:8,
            opacity: 2,
            ease: "power2.out"
        });

        gsap.from("#link-all-menu",{
            scrollTrigger:{
                trigger: "#link-all-menu",
                toggleActions: "restart none restart none"
            },
            y: 100,
            duration:0.5,
            opacity: 0,
            ease: "power2.out"
        });

        gsap.from("#location h1",{
            scrollTrigger:{
                trigger: "#location h1",
                toggleActions: "restart none none none"
            },
            y:200,
            duration:1,
            opacity: 0.5,
            ease: "power2.out"
        });

        let indexfoto = 58;
        let img = document.getElementById("asap");
        setInterval(() => {
            if(indexfoto == 1 ){
                indexfoto = 58;
            }
            img.src = 'img/asap/asap ('+ indexfoto +').png';
            indexfoto--
        }, 60);

        $(".area-cursor-none").mouseenter(function(){
            $("#cursor").addClass("cursor-none");
        });
        $(".area-cursor-none").mouseleave(function(){
            $("#cursor").removeClass("cursor-none");
        });

        $("#best-menu1").mouseenter(function(){

        });
        let cursor = $("#cursor");
        let wind = window.innerWidth;
        
        function movecursor(e) {
          let widthcursor = $("#cursor").width()/2;
            wind = window.innerWidth;

            if(e.clientX > wind / 2){
                gsap.to(cursor, {
                duration: 0.3,
                delay:0.1,
                x: e.clientX - widthcursor,
                y: e.clientY -  widthcursor,
                ease: "power2.out"
            })
            }else{
                gsap.to(cursor, {
                duration: 0.3,
                delay:0.1,
                x: e.clientX - widthcursor,
                y: e.clientY -  widthcursor,
                ease: "power2.out"
            })
            }
        }

        $(window).on('mousemove', movecursor);
        $(window).resize(movecursor);


        $("#best-menu1").mouseenter(function(){
            $("#best-img1").css("display","block");
            setTimeout(() => {
                $("#best-img1").css("clip-path","inset(0 0 0 0)");
            }, 100);
        });
        $("#best-menu1").mouseleave(function(){
            $("#best-img1").css("clip-path","inset(50% 0 50% 0)");
            setTimeout(() => {
                $("#best-img1").css("display","none");
            }, 300);
        });
        $("#best-menu2").mouseenter(function(){
            $("#best-img2").css("display","block");
            setTimeout(() => {
                $("#best-img2").css("clip-path","inset(0 0 0 0)");
            }, 100);
        });
        $("#best-menu2").mouseleave(function(){
            $("#best-img2").css("clip-path","inset(50% 0 50% 0)");
            setTimeout(() => {
                $("#best-img2").css("display","none");
            }, 300);
        });
        $("#best-menu3").mouseenter(function(){
            $("#best-img3").css("display","block");
            setTimeout(() => {
                $("#best-img3").css("clip-path","inset(0 0 0 0)");
            }, 100);
        });
        $("#best-menu3").mouseleave(function(){
            $("#best-img3").css("clip-path","inset(50% 0 50% 0)");
            setTimeout(() => {
                $("#best-img3").css("display","none");
            }, 300);
        });

        $(window).scroll(function(){
            if ($(this).scrollTop() > 80) {
                    $('nav').css('background-color', 'white');
                } else {
                    $('nav').css('background-color', 'transparent');
                }
        });

        $("#nav-open").click(function(){
            $(".nav-menu").toggleClass("active");
        });

        $("#nav-close").click(function(){
            $(".nav-menu").removeClass("active");
        });

    </script>
</body>
</html>