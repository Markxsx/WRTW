<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="style.css">
    </head>
<body>

    <?php include 'header.php'; ?>

    <div class="slideshow-container" ontouchstart="handleTouchStart()" ontouchmove="handleTouchMove()">
    <div class="mySlides fade">
        <a href="shop.php" target="_blank"><img src="Images/sale-banner.png" class="home-banner" alt="Slide 1"></a>
    </div>
</div>
<script src="slideshow.js"></script>

    <div class="home-articles">
        <div class="textbox-container">
            <img src="Images/textbox-shorts.png" alt="Textbox containing information about our Products.">
        </div>

</div>

<?php include 'footer.php'; ?>

</body>
</html>