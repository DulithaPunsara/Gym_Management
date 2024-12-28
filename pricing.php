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

</head>
<body>
    
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

<section class="pricing" id="pricing">

    <div class="information">
        <span>pricing plan</span>
        <h3>affordable pricing plan for your</h3>
        <p>Discover unbeatable value with our affordable pricing plans: flexible options to fit any budget without compromising on quality or results.?</p>
        <p> <i class="fas fa-check"></i> cardio exercise </p>
        <p> <i class="fas fa-check"></i> weight lifting </p>
        <p> <i class="fas fa-check"></i> diet plans </p>
        <p> <i class="fas fa-check"></i> overall results </p>
        <a href="#" class="btn">all pricing</a>
    </div>

    <div class="plan basic">
        <h3>basic plan</h3>
<div class="price"><span></span>RS.2000<span>/month</span></div>
       <div class="list">
        <p> <i class="fas fa-check"></i> personal training </p>
        <p> <i class="fas fa-check"></i> cardio exercise </p>
        <p> <i class="fas fa-check"></i> weight lifting </p>
        <p> <i class="fas fa-check"></i> diet plans </p>
        <p> <i class="fas fa-check"></i> overall results </p>
       </div>
       <!-- <a href="#" class="btn">get started</a> -->
    </div>

    <div class="plan">
        <h3>premium plan</h3>
        <div class="price"><span></span>RS.4000<span>/month</span></div>
       <div class="list">
        <p> <i class="fas fa-check"></i> personal training </p>
        <p> <i class="fas fa-check"></i> cardio exercise </p>
        <p> <i class="fas fa-check"></i> weight lifting </p>
        <p> <i class="fas fa-check"></i>diet plans </p>
        <p> <i class="fas fa-check"></i> overall results </p>
       </div>
       <!-- <a href="#" class="btn">get started</a> -->
    </div>

</section>
<section class="banner">

    <span>join us now</span>
    <h3>get upto 50% discount</h3>
    <p>Join now for up to 50% off: seize this limited-time offer and start your fitness journey with us today</p>
    <a href="login.php" class="btn">get discount</a>

</section>






<!-- footer section starts  -->

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
