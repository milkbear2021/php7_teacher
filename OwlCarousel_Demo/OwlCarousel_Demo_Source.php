<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>OWL</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
    .wrapper {
        width: 100%;
        height: auto;
        overflow: hidden;
    }

    .item {
        margin: 10px;
    }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="owl-carousel owl-theme">
            <div class="item"><img src="img/fullimage1.jpg" class="item img-fluid"></div>
            <div class="item"><img src="img/fullimage2.jpg" class="item img-fluid"></div>
            <div class="item"><img src="img/fullimage3.jpg" class="item img-fluid"></div>
            <div class="item"><img src="img/fullimage4.jpg" class="item img-fluid"></div>
            <div class="item"><img src="img/fullimage5.jpg" class="item img-fluid"></div>
            <div class="item"><img src="img/fullimage6.jpg" class="item img-fluid"></div>
            <div class="item"><img src="img/fullimage7.jpg" class="item img-fluid"></div>

        </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="http://cdn.staticfile.org/jquery/1.8.3/jquery.min.js"></script>
    <!-- Owl Stylesheets&js -->
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <script src="assets/vendors/jquery.min.js"></script>
    <script src="assets/owlcarousel/owl.carousel.js"></script>

    <script>
    $('.owl-carousel').owlCarousel({
        responsive: true,
        autoplayHoverPause: true, // 滑鼠經過時暫停
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 1000,
        nav: true, //導航
        navText: ["上一張", "下一張"], // 導航文字
        center: true,
        rewind:true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
    </script>

</body>

</html>