<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FITNESS CENTER</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/home.css">

<style>
  .slider-container {
      position: relative;
      width: 100%;
      height: 700px;
      overflow: hidden;
    }

    /* Styles for individual slides */
    .slide{
      display: none;
      text-align: center;
      position: relative;
    }
   
    .slide img {
      max-width: 100%;
      height: auto;
    }

    /* Styles for word animation */
    .word {
      font-style: italic;
      text-align: center;
      font-size: smaller;
      color: red;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-size: 50px;
      font-weight: bold;
      animation: wordAnimation 3s ease-in-out infinite;
    }

    @keyframes wordAnimation {
      0% { transform: translateY(0); opacity: 0; }
      50% { transform: translateY(-20px); opacity: 1; }
      100% { transform: translateY(0); opacity: 0; }
    }

    /* Style for navigation buttons */
    

    .prev {
      left: 0;
    }

    .next {
      right: 0;
    }
  </style>
</head>


<body>
<div class="slider-container">
  <!-- Slides -->
  <div class="slide">
    <img src="images/home-bg-1.jpg" alt="Slide 1">
    <div class="word">WELCOME TO FITNESS CENTER </div>
  </div>
  <div class="slide">
    <img src="images/home-bg-2.jpg" alt="Slide 2">
    <div class="word">START YOUR JOURNEY WITH US</div>
  </div>
  <div class="slide">
    <img src="images/home-bg-3.jpg" alt="Slide 3">
    <div class="word">BE FIT.MAKE YOURSELF STRONGER THAN YOUR EXCUSES</div>
  </div>

  <!-- Navigation buttons -->
  <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
  <a class="next" onclick="changeSlide(1)">&#10095;</a>
</div>

<script>
  let slideIndex = 0;
  showSlides();

  function showSlides() {
    let i;
    const slides = document.getElementsByClassName("slide");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 3000); // Change slide every 2 seconds
  }

  function changeSlide(n) {
    showSlides(slideIndex += n);
  }
</script>

    
<!-- header section starts      -->

<header class="header">

    <a href="#" class="logo"> <span>FITNESS </span>CENTER</a>

    <div id="menu-btn" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="home.php">HOME</a>
        <a href="about.php">ABOUT</a>
        <a href="features.php">FEATURES</a>
        <a href="trainers.php">TRAINERS</a>
        <a href="pricing.php">PRICING</a>
        <a href="login.php" class="btn1">LOGIN</a>
        
    </nav>


</header>
<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Quick Links</h3>
            <a class="links" href="home.php">home</a>
            <a class="links" href="about.php">about</a>
            <a class="links" href="features.php">features</a>
            <a class="links" href="trainers.php">trainers</a>
            <a class="links"href="pricing.php">pricing</a>
            <a class="links"href="login.php">Sign In</a>
            
        </div>  

        <div class="box">
            <h3>Opening Hours</h3>
            <p> monday : <i> 7:00am - 10:30pm </i> </p>
            <p> tuesday : <i> 7:00am - 10:30pm </i> </p>
            <p> wednesday : <i> 7:00am - 10:30pm </i> </p>
            <p> friday : <i> 7:00am - 10:30pm </i> </p>
            <p> saturday : <i> 7:00am - 10:30pm </i> </p>
            <p> sunday : <i> closed </i> </p>
        </div>

        <div class="box">
            <h3>Contact Us</h3>
            <p> <i class="fas fa-phone"></i> +94768941002 </p>
            <p> <i class="fas fa-envelope"></i> punsaradulithasamath@gmail.com </p>
            <p> <i class="fas fa-map"></i> No.356 Kamburugamuwa,Matara </p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-linkedin"></a>
                <a href="#" class="fab fa-pinterest"></a>
            </div>
        </div>

        <!-- <div class="box">
            <h3>newsletter</h3>
            <p>subscribe for latest updates</p>
            <form action="">
                <input type="email" name="" class="email" placeholder="enter your email" id="">
                <input type="submit" value="subscribe" class="btn">
            </form>
        </div> -->

    </div>

</section>

<div class="credit"><span></span> | all rights reserved! </div>

<!-- footer section ends -->

<!-- <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script> -->

<!-- custom js file link  -->
<script src="js/home.js"></script>
<script type="text/javascript">
    // This function is called from the pop-up menus to transfer to
    // a different page. Ignore if the value returned is a null string:
    function goPage (newURL) {

    // if url is empty, skip the menu dividers and reset the menu selection to default
        if (newURL != "") {
  
            // if url is "-", it is this page -- reset the menu:
            if (newURL == "-" ) {
            resetMenu();            
            } 
            // else, send page to designated URL            
            else {  
                document.location.href = newURL;
            }
        }
    }
    // resets the menu selection upon entry to this page:
    function resetMenu() {
        document.gomenu.selector.selectedIndex = 2;
    }
</script>  

</body>
</html>