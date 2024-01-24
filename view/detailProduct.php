<?php
include "/model/taikhoan.php";

?>
<!-- SINGLE Product CONTAINER  -->
<div id="singleProduct_container">
    <div>
        <img style="width: 60%" src="view/img/<?php echo $sanpham['img'] ?>" alt="">
    </div>
    <div id="singleProduct_container_info">
        <h3>
            <?php echo $sanpham['name'] ?>
        </h3>
        <p style="font-size: 32px;">
            <?php echo $sanpham['price'] ?>$<span
                style="font-size: 24px; text-decoration: line-through; color: grey; margin-bottom: 24px; margin-left: 10px">
                <?php echo $sanpham['price'] ?>$
            </span>
        </p>
        <p style="font-size: 28px; font-weight: 200; color: grey;" id="singleProduct_info_des">
            <?php echo $sanpham['description'] ?>
        </p>
        <hr>
        <div id="singleProduct_container_color">
            <h4>COLOR</h4>
            <ul>
                <li>GREEN</li>
                <li>ORANGE</li>
                <li>RED</li>
            </ul>
        </div>
        <form action="index.php?act=addtocart" method="POST">
            <input type="hidden" name="id" value="<?= $sanpham['id'] ?>">
            <input type="hidden" name="name" value="<?= $sanpham['name'] ?>">
            <input type="hidden" name="price" value="<?= $sanpham['price'] ?>">
            <input type="hidden" name="img" value="<?= $sanpham['img'] ?>">
            <input id="addtocart" type="submit" name="addtocart" value="Add to cart">
        </form>
    </div>
</div>

<!-- REVIEW CONTAINER  -->
<div style='padding: 120px 120px 0'>
    <div style='border-bottom: 1px solid black; padding: 18px 0; text-align:center'>
        <a id="description-link" style='text-decoration: none; color: black; padding: 20px; font-size: 18px; cursor:pointer'
            onclick="showContent('description')">DESCRIPTION</a>
        <a id="review-link" style='text-decoration: none; color: #87826e; padding: 20px; font-size: 18px;cursor:pointer'
            onclick="showContent('review')">REVIEW</a>
    </div>

    <!-- box -->
    <div id="description-content" style='padding: 60px'>
        <h2 style='margin-bottom: 24px'>Poduct Description</h2>

        <p
            style='margin-top: 24px; font-size: 20px;  font-family: sans-serif; color: #87826e; word-spacing: 6px; line-height: 30px'>
            <?php echo $sanpham['description'] ?>
        </p>

        <ul class="fw-light"
            style='margin-top: 24px; font-size: 20px;  font-family: sans-serif; color: #87826e; word-spacing: 6px; line-height: 30px'>
            <li>Donec nec justo eget felis facilisis fermentum.</li>
            <li>Suspendisse urna viverra non, semper suscipit pede.</li>
            <li>Aliquam porttitor mauris sit amet orci.</li>
        </ul>
        <p
            style='margin-top: 24px; font-size: 20px;  font-family: sans-serif; color: #87826e; word-spacing: 6px; line-height: 30px'>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam
            malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo
            eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.
            Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique
            cursus.

            Donec nec justo eget felis facilisis fermentum.
            Suspendisse urna viverra non, semper suscipit pede.
            Aliquam porttitor mauris sit amet orci.
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam
            malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo
            eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.
            Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique
            cursus.</p>
    </div>
    <div id="review-content" style="display: none;">
        <!-- Nội dung review -->
        <ul id="dsbl"
            style='padding: 24px 100px; display: flex;justify-content:space-between;flex-wrap: wrap; list-style: none'>
            <?php foreach ($dsbl as $binhluan) { ?>
                <li style='width: 45%; margin-bottom: 30px'>
                    <p>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </p>
                    <div style='margin: 12px 0'>
                        <span style="font-size: 20px" class="author-name">
                            <?php
                            $user_id = $binhluan['user_id'];
                            $user = loadone_users($user_id);
                            // echo '<pre>';
                            // var_dump($user);
                            // echo '</pre>';
                            echo $user[0]["user"] ?>
                        </span>
                        <span class="review-date" style="font-size: 20px">-
                            <?= $binhluan['time'] ?>
                        </span>
                    </div>
                    <p>
                        <?= $binhluan['content'] ?>
                    </p>
                </li>
            <?php } ?>
        </ul>
        <!-- FORM NHẬN XÉT  -->
        <?php
        if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);
            echo '
                <form action="index.php?act=binhluan" method="POST" id="register_container">
                    <input type="hidden" name="idpro" value="' . $sanpham['id'] . '">
                    <label for="noidung">Your Review*</label> <br/>
                    <input name="noidung" id="userName" type="text" placeholder="Enter your review" required>
                    <input type="submit" name="guibinhluan" value="Gửi nhận xét" style="background-color: #333;border: none;font-size: 18px;font-weight: 500; color: white">
                </form>
            ';
        } else {
            echo '<h1 style="font-weight: 500;
            font-size: 42px;
            font-family: var(--primary-font);">Bạn vui lòng đăng nhập để nhận xét</h1> <br>
                <a href="index.php?act=login" style="text-decoration:none;padding:10px;background-color: #333;border: none;font-size: 18px;font-weight: 500; color: white;cursor:pointer">Login</a>
            ';
        }
        ?>
    </div>
</div>

<script>
    function showContent(contentType) {
        if (contentType === 'description') {
            document.getElementById('description-content').style.display = 'block';
            document.getElementById('review-content').style.display = 'none';
            document.getElementById('review-link').style.color = '#87826e';
            document.getElementById('description-link').style.color = 'black';


        } else {
            document.getElementById('description-content').style.display = 'none';
            document.getElementById('review-content').style.display = 'block';
            document.getElementById('description-link').style.color = '#87826e';
            document.getElementById('review-link').style.color = 'black';
        }
    }
</script>

<!-- PRODUCT CONTAINER -->
<section id="product_container_home" style="padding-bottom: 100px;">
    <div id="product_container_home_header">
        <h1 id="product_container_home_header_title">Related Items</h1>
        <div class="product_container_home_header_right">
            <a class="product_container_home_header_right-text" href="index.php?act=shop">View All Items</a>
            <!-- <div id="btns">
                <i class="fa-solid fa-arrow-left"></i>
                <i class="fa-solid fa-arrow-right"></i>
            </div> -->
        </div>
    </div>

    <ul id="product_container_home_list">
        <?php foreach ($splienquan as $row) { ?>
            <li class="product_container_home_item">
                <div class="product">
                    <img style="height: 430px" src="view/img/<?php echo $row['img'] ?>" alt="">
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
</section>