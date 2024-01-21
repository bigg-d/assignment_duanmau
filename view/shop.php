<div class="banner">
    <div id="text">
        <h1>Shop</h1>
    </div>
</div>
<article id="product_container">
    <ul id="product_container_list1" class="owl-carousel">
        <?php foreach ($listsanpham as $product) { ?>
            <li class="product_container_item">
                <img style="height: 430px" src="view/img/<?php echo $product['img'] ?>" alt="">
                <a href="index.php?act=detailProduct&id=<?php echo $product['id'] ?>">
                    <?= $product['name'] ?>
                </a>
                <p>$
                    <?= $product['price'] ?>
                </p>
                <a href="index.php?act=cart" class="addToCartBtn">Add to cart</a>
            </li>
        <?php } ?>

    </ul>

</article>
<aside id="search_container">
    <form action="index.php?act=shop" method="post" id="search_input">
        <input id="kyw" type="text" placeholder="Search" name="kyw">
        <button style="border:none; width: 40px; height: 40px; background: none; ">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>
        <!-- <input type="submit" name="timkiem"> -->
    </form>
    <ul class="search_container_list">
        <h1>CATEGORIES</h1>
        <a href="index.php?act=shop" class="search_container_item">All</a>
        <?php foreach ($listdanhmuc as $danhmuc) { ?>
            <a href="index.php?act=shop&iddm=<?= $danhmuc['category_id'] ?>" class="search_container_item">
                <?php echo $danhmuc['category_name'] ?>
            </a>
        <?php } ?>
    </ul>
    <!-- <ul class="search_container_list">
        <h1>TAGS</h1>
        <li class="search_container_item">Off-White</li>
        <li class="search_container_item">Cheap</li>
        <li class="search_container_item">Vintage</li>
        <li class="search_container_item">Morden</li>
    </ul>
    <ul class="search_container_list">
        <h1>OTHER PRODUCTS</h1>
        <li class="search_container_item">Bowls</li>
        <li class="search_container_item">Anchora</li>
        <li class="search_container_item">Plates</li>
    </ul>
    <ul class="search_container_list">
        <h1>FILTER BY PRICE</h1>
        <li class="search_container_item">Less Than $100</li>
        <li class="search_container_item">$100 - $200</li>
        <li class="search_container_item">$200 - $300</li>
        <li class="search_container_item">$300 - $400</li>
        <li class="search_container_item">$400 - $500</li>
    </ul> -->
</aside>