<div class="slideshow-container">
    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
        <img src="view/img/download.jpg" style="width: 100%;height: 730px">
        <div class="text" >
            <h1>Ceramic Soft Pot</h1>
            <p>This ceramic soft pot is specially designed by concept of traditional designs.</p>
            <span>Shop now</span>
        </div>
    </div>

    <div class="mySlides fade">
        <img src="view/img/banner-image1.jpg" style="width: 100%;height: 730px">
        <div class="text" style="left: 50%">
            <h1>Shiny Black Pot</h1>
            <p>Beautiful shiny black pot is designed for minimalist decors.</p>
            <span>Shop now</span>
        </div>
    </div>

    <div class="mySlides fade">
        <img src="view/img/banner-image2.jpg" style="width: 100%;height: 730px">
        <div class="text" style="left:16%">
            <h1>Ceramic Soft Pot</h1>
            <p>Buy this beautiful unique pieces of shell shape vase decors for <br> your plants of room.</p>
            <span>Shop now</span>
        </div>
    </div>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<!-- <br> -->

<!-- The dots/circles -->
<div style="text-align:center; z-index: 10; position: absolute; left: 48%; margin-top: -50px" >
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>

<article id="about_container">
    <h3>ABOUT US</h3>
    <h1>Vaso Is The Only Best Online Store For Varieties Of Collection Of Clean And Beautiful Vases.</h1>
    <p>Et id sapien id enim, sit tempor cursus elit, fusce. Nunc tristique facilisis consectetur at vivamus ut porta
        porta. Ut nisl, tortor, aliquam blandit vitae vehicula vivamus leo nullam urna, scelerisque unc lectus phasellus
        adipiscing arcu. Tristique facilisis nunc consectetur at tempor cursusut porta.</p>
</article>

<!-- PRODUCT CONTAINER -->
<section id="product_container_home">
    <div id="product_container_home_header">
        <h1 id="product_container_home_header_title">Best Selling Items</h1>
        <div class="product_container_home_header_right">
            <h3 id="product_container_home_header_right-text"><a href="index.php?act=shop" style="color: black; text-decoration: none">View All Items</a></h3>
            <div id="btns">
                <i class="fa-solid fa-arrow-left .swiper-button-prev"></i>
                <i class="fa-solid fa-arrow-right .swiper-button-next"></i>
            </div>
        </div>
    </div>

    <div class="swiper mySwiper" style="height: 500px">
        <ul id="product_container_home_list" class="swiper-wrapper">
            <?php foreach ($spnew as $row) { ?>
                <li class="product_container_home_item swiper-slide">
                    <div class="product">
                        <img style="height: 430px" src="view/img/<?php echo $row['img']?>" alt="">
                        <div class="overlay">
                            <a href="index.php?act=detailProduct&id=<?php echo $row['id'] ?>" class="addToCartBtn">Detail</a>
                        </div>
                    </div>
                    <a style='text-decoration: none' href="index.php?act=detailProduct&id=<?php echo $row['id'] ?>">
                        <h2>
                            <?php echo $row['name'] ?>
                        </h2>
                    </a>
                    <p>
                        <?php echo $row['price'] ?>$
                    </p>
                </li>
            <?php } ?>
    
        </ul>
    </div>
</section>

<div id="feedBack_container">
    <h1>What Our Customers Says</h1>
    <p>“A pellen tesque pretium feugiat vel morbi sagittis lorem habi tasse cursus. Suspen dise tempus oncu enim pellen
        tesque este pretium in neque, elit morbi sagittis lorem habi mattis.”</p>
    <span>ANNA GARCIA</span>
</div>
