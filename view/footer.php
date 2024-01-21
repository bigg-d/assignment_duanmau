<section id="figure_container">
    <img src="view/img/text-pattern.png" alt="">
</section>
<footer id="footer_container">
    <ul id="footer_container_list">
        <li id="logo_slogan">
            <img src="view/img/main-logo.png" alt="">
            <p>Nunc tristique facilisis consectetur vivamus ut porta porta aliquam vitae vehicula leo nullam urna
                lectus.</p>
        </li>
        <li class="footer_container_item">Quick Links
            <h3>About</h3>
            <h3>Shop</h3>
            <h3>Account</h3>
            <h3>Contact</h3>
        </li>
        <li class="footer_container_item">Contact Info
            <h3>Tea Berry, Marinette, USA</h3>
            <h3>+55 111 222 333 44</h3>
            <h3>yourinfo@gmail.com</h3>
        </li>
        <li class="footer_container_item">Social Info
            <h3 style="width: 260px;">You can follow us on our social platforms to get updates.</h3>
        </li>
    </ul>
    <hr>
    <p id="copyright">
        © Copyright 2023 Vaso. Design by TemplatesJungle</p>
</footer>

<!-- <aside id="mobile_menu_container" class="closed_mobile_menu_btn">
            <img src="./img/main-logo.png"></img>
            <h1 id="close_mobile_menu">X</h1>
            <ul id="mobile_menu_container_list">
                <li class="mobile_menu_container_item"><a href="./about.html">About</a></li>
                <li class="mobile_menu_container_item"><a href="./shop.html">Shop</a></li>
                <li class="mobile_menu_container_item"><a href="./account.html">Account</a></li>
                <li class="mobile_menu_container_item"><a href="./cart.html">Cart</a></li>
            </ul>
        </aside> -->
</div>
<!-- <script>
        const showMenuBtn = document.getElementById('navIcon')
        const hideMenuBtn = document.getElementById('close_mobile_menu')
        const mobile_menu = document.getElementById('mobile_menu_container')
        function showMenu() { 
            mobile_menu.classList.add('open_mobile_menu_btn')
        }
        function hideMenu() {
            mobile_menu.classList.remove('open_mobile_menu_btn')
        }
        showMenuBtn.addEventListener('click',showMenu)
        hideMenuBtn.addEventListener('click', hideMenu)

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
<script>
   let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}


</script>


<!-- SWIPPER  -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 5,
        navigation: {
        nextEl: "#btns .swiper-button-next",
        prevEl: "#btns .swiper-button-prev",
      },
    });
</script>

</body>

</html>