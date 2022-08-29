<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>RESORT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/index.css') }}">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

</head>

<body>
    <header class="header" id="navigation-menu">
        <div class="container">
            <nav>
                <a href="#" class="logo"> <img src="" alt=""> RESORT</a>

                <ul class="nav-menu">
                    <li> <a href="#home" class="nav-link">Home</a> </li>
                    <li> <a href="#about" class="nav-link">About</a> </li>
                    <li> <a href="#gallery" class="nav-link">Gallery</a> </li>
                    <li> <a href="#contact" class="nav-link">Contact</a> </li>
                    <li> <a href="#home" class="nav-link">Service</a> </li>
                    <li> <a href="#about" class="nav-link">Package</a> </li>
                    <li> <a href="#gallery" class="nav-link">History</a> </li>
                    <li> <a href="#contact" class="nav-link">Contact</a> </li>
                </ul>

                <div class="hambuger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </nav>
        </div>
    </header>

    <script>
        const hambuger = document.querySelector('.hambuger');
        const navMenu = document.querySelector('.nav-menu');

        hambuger.addEventListener("click", mobileMenu);

        function mobileMenu() {
            hambuger.classList.toggle("active");
            navMenu.classList.toggle("active");
        }

        const navLink = document.querySelectorAll('.nav-link');
        navLink.forEach((n) => n.addEventListener("click", closeMenu));

        function closeMenu() {
            hambuger.classList.remove("active");
            navMenu.classList.remove("active");
        }
    </script>

    <section class="home" id="home">
        <div class="head_container">
            <div class="box">
                <div class="text">
                    <h1>WELCOME TO OUR PAGE</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. </p>
                    <button class="btn_more">MORE DETAILS</button>
                </div>
            </div>
            <div class="image">
                <img src="Image/home1.jpg" class="slide">
            </div>
            <div class="image_item">
                <img src="image/home2.jpg" alt="" class="slide active" onclick="img('image/home2.jpg')">
                <img src="image/home3.jpg" alt="" class="slide" onclick="img('image/home3.jpg')">
                <img src="image/home4.jpg" alt="" class="slide" onclick="img('image/home4.jpg')">
                <img src="image/home5.jpg" alt="" class="slide" onclick="img('image/home5.jpg')">
            </div>
        </div>
    </section>

    <script>
        function img(anything) {
            document.querySelector('.slide').src = anything;
        }

        function change(change) {
            const line = document.querySelector('.image');
            line.style.background = change;
        }
    </script>

    <section class="book">
        <div class="container flex">
            <div class="input grid">
                <div class="box">
                    <label>Check-in:</label>
                    <input type="date" placeholder="Check-in-Date">
                </div>
                <div class="box">
                    <label>Check-out:</label>
                    <input type="date" placeholder="Check-out-Date">
                </div>
                <div class="box">
                    <label>Adults:</label> <br>
                    <input type="number" placeholder="0">
                </div>
                <div class="box">
                    <label>Children:</label> <br>
                    <input type="number" placeholder="0">
                </div>
            </div>
            <div class="search">
                <input type="search" placeholder="Search">
            </div>
        </div>
    </section>


    <section class="room top" id="room">

        <div class="container">

            <div class="heading_top flex1">
                <div class="heading">
                    <h1 style="color: green">ALL TEH AVAILABLE OUR RESORTS</h1>
                    <h4 style="color: rgb(25, 87, 25)">Resort With Picture</h4>
                </div>
            </div>

            <div class="content grid">
                <div class="box">
                    <div class="img">
                        <img src="image/r1.jpg" alt="">
                    </div>
                    <div class="text">
                        <h3>Superior Soble Rooms</h3>
                        <button class="btn btn-primary">Subscribe</button>
                    </div>
                </div>
                <div class="box">
                    <div class="img">
                        <img src="image/r2.jpg" alt="">
                    </div>
                    <div class="text">
                        <h3>Superior Soble Rooms</h3>
                        <p> <span>$</span>129 <span>/per night</span> </p>
                    </div>
                </div>
                <div class="box">
                    <div class="img">
                        <img src="image/r3.jpg" alt="">
                    </div>
                    <div class="text">
                        <h3>Superior Soble Rooms</h3>
                        <p> <span>$</span>129 <span>/per night</span> </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
