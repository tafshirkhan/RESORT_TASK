 <header class="header" id="navigation-menu">
     <div class="container">
         <nav>
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
