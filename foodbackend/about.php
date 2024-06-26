<?php

    include 'components/connect.php';

    session_start();

    if(isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
    }else{
        $user_id = '';
    };

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>about us</h3>
   <p><a href="home.php">home</a> <span> / about</span></p>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

       <div class="content">
           <h3>why choose us?</h3>
           <p>We offer a diverse menu with fresh ingredients, speedy delivery, and exceptional customer service. Experience culinary delight with every bite, tailored to satisfy your cravings and dietary preferences.</p>
           <a href="menu.php" class="btn">our menu</a>
       </div>

   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="title">simple steps</h1>

   <div class="box-container">

       <div class="box">
           <img src="images/step-1.png" alt="">
           <h3>choose order</h3>
           <p>Browse our menu and select your favorite dishes to order.</p>
       </div>

       <div class="box">
           <img src="images/step-2.png" alt="">
           <h3>fast delivery</h3>
           <p>Your order will be delivered to your doorstep quickly and efficiently.</p>
       </div>

       <div class="box">
           <img src="images/step-3.png" alt="">
           <h3>enjoy food</h3>
           <p>Savor your meal and enjoy the delightful flavors we've prepared for you.</p>
       </div>

   </div>

</section>

<!-- steps section ends -->
<style>
    .reviews-slider .swiper-slide {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
        height: 400px;
        padding: 20px;
        box-sizing: border-box;
    }
</style>
<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="title">customer's reivews</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

          <div class="swiper-slide slide">
              <img src="images/pic-1.png" alt="">
              <p>The food was absolutely delicious, and the delivery was super quick. Highly recommended!</p>
              <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
              </div>
              <h3>John Doe</h3>
          </div>

          <div class="swiper-slide slide">
              <img src="images/pic-2.png" alt="">
              <p>Amazing service! The meal was hot and flavorful, just like dining in a restaurant.</p>
              <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
              </div>
              <h3>Jane Smith</h3>
          </div>

          <div class="swiper-slide slide">
              <img src="images/pic-3.png" alt="">
              <p>Great variety and excellent taste. This is my go-to place for takeout!</p>
              <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
              </div>
              <h3>Michael Johnson</h3>
          </div>

          <div class="swiper-slide slide">
              <img src="images/pic-4.png" alt="">
              <p>Superb quality and prompt service. I was pleasantly surprised by the food's freshness.</p>
              <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
              </div>
              <h3>Emily Davis</h3>
          </div>

          <div class="swiper-slide slide">
              <img src="images/pic-5.png" alt="">
              <p>The flavors were on point, and the portions were generous. Will order again!</p>
              <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
              </div>
              <h3>Chris Brown</h3>
          </div>

          <div class="swiper-slide slide">
              <img src="images/pic-6.png" alt="">
              <p>Top-notch service and delightful dishes. A fantastic experience from start to finish.</p>
              <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
              </div>
              <h3>Jessica Wilson</h3>
          </div>


      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- reviews section ends -->


<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->=



<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>