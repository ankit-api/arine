<?php include_once 'header.php'; ?>
<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h3>Arine Store</h3>
                <p>In this Arine Store, you will get what you need such as shirts, trousers, mobiles, laptops, fans, motors, stationary items, backpack, etc....</p>
            </div>
            <div class="col-md-3">
                <h3>Categories</h3>
                <ul class="menu-list">
                    <li><a href="#">Mobiles</a></li>
                    <li><a href="#">Books</a></li>
                    <li><a href="#">Shirts</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h3>Useful Links</h3>
                <ul class="menu-list">
                    <li><a href="<?php echo $hostname; ?>">Home</a></li>
                    <li><a href="all_products.php">All Products</a></li>
                    <li><a href="latest_products.php">Latest Products</a></li>
                    <li><a href="popular_products.php">Popular Products</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h3>Conact-Us</h3>
                <ul class="menu-list">
                    <li><i class="fa fa-home"></i><span> : Sehatpur,Faridabad</span></li>
                    <li><i class="fa fa-phone"></i><span> : 7210056451</span></li>
                    <li><i class="fa fa-envelope"></i><span> : bishtsonu25101@gmail.com</span></li>
                </ul>
            </div>
            <div class="col-md-12">
                <span>Copyright 2021 | Developed by Ankit Bisht</span>
            </div>
        </div>
    </div>
</div>
<script src="js\jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="js\bootstrap.min.js"></script>
<script src="js\actions.js"></script>
<!--okzoom Plugin-->
<script src="js/okzoom.min.js" type="text/javascript"></script>
<!--owl carousel plugin-->
<script type="text/javascript" src="js/owl.carousel.js"></script>

<script>
    $(document).ready(function(){

        $('#product-img').okzoom({
            width: 200,
            height: 200,
            scaleWidth: 800
        });

        $('.banner-carousel').owlCarousel({
            items:1,
            loop:true,
            margin:10,
            autoplay:true,
            autoplayTimeout:2000,
            autoplayHoverPause:false
        });

        $('.banner-carousel').owlCarousel({
            loop: true,
            margin: 0,
            responsiveClass: true,
            navText : ["",""],
            responsive: {
                0: {
                    items: 1,
                    nav: true

                },
                600: {
                    items: 1,
                    nav: true
                },
                1000: {
                    items: 1,
                    nav: true,
                    loop: false,
                    margin: 10
                }
            }
        });

        $('.popular-carousel').owlCarousel({
            loop: true,
            margin: 0,
            responsiveClass: true,
            navText : ["",""],
            responsive: {
                0: {
                    items: 1,
                    nav: true

                },
                600: {
                    items: 2,
                    nav: true
                },
                800: {
                    items: 4,
                    nav: true
                },
                1000: {
                    items: 5,
                    nav: true,
                    loop: false,
                    margin: 10
                }
            }
        });

        $('.latest-carousel').owlCarousel({
            loop: true,
            margin: 0,
            responsiveClass: true,
            navText : ["",""],
            responsive: {
                0: {
                    items: 1,
                    nav: true

                },
                600: {
                    items: 2,
                    nav: true
                },
                800: {
                    items: 3,
                    nav: true
                },
                1000: {
                    items: 4,
                    nav: true,
                    loop: false,
                    margin: 5
                }
            }
        });
    });

</script>

</body>
</html>