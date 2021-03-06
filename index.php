<!DOCTYPE html>
<html lang="en">
<head>
    <!--Meta tag for index-->

    <meta name="description" content="Oplev ægte street food i hjertet af Aarhus med mad og drikke fordelt ud på 25 køkkener og barer. Aarhus Street Food er en
        gastronomisk iværksætterklynge, hvor der lægges vægt på at kunne servere et ordentligt måltid mad til en fair pris.">
    <link href="CSS/minstil.css" rel="stylesheet">

    <!--Meta tags for index-->

    <?php include("includes/headerScripts.php"); ?>
    <title>Aarhus Streetfood</title>
</head>
<body>
<?php include("includes/mainNav.php"); ?>
<!-- Slideshow container -->
<div class="slideshow-container">
    <!-- Full-width billeder angivet med nummer og teaser tekst -->
    <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img srcset="images/Forside_Slider/600x338/Frontpage_Street_Food.jpg 600w, images/Forside_Slider/1600x900/Frontpage_Street_Food.jpg 601w" class="img-responsive">
        <div class="text">Kom ned og oplev hyggen i garagen! Vi har åbent alle dage fra klokken 11.30.</div>
    </div>
    <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img srcset="images/Forside_Slider/600x338/Frontpage_Frokost_pause.jpg 600w ,images/Forside_Slider/1600x900/Frontpage_Frokost_pause.jpg 601w" class="img-responsive">
        <div class="text">Oplev ægte street food i hjertet af Aarhus med mad og drikke fordelt ud på 25 køkkener og
            barer.
        </div>
    </div>
    <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img srcset="images/Forside_Slider/600x338/Frontpage_Skaal_i_oel.jpg 600w, images/Forside_Slider/1600x900/Frontpage_Skaal_i_oel.jpg" class="img-responsive">
        <div class="text">Følg med på vores Facebook og Instagram for nyheder og kommende events.</div>
    </div>
    <!-- Frem og tilbage knapper -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    <!-- De runde knapper -->
    <div id="slider-dots">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
</div>


<!--Slider forside slut-->

<div class="container">
    <div id="index-info-text-container">
        <h2>Hvad er Aarhus Street Food?</h2>
        <p>Aarhus Street Food er et madmarked placeret i hjertet af Aarhus ved Rutebilstationen. Aarhus Street Food er
            en
            gastronomisk iværksætterklynge, hvor kokke, madører o.lign kan prøve lykken af som chef i eget køkken. Der
            lægges vægt på diversitet, originalitet. Det er centralt, køkkenenerne bruger friske råvarer og at
            maden
            er hjemmelavet.</p>
        <p>Kom forbi som du er, og prøv et anderledes måltid mad. Det behøver ikke at være dyrt - du kan sagtens få et
            måltid mad til 50 kroner! </p>
    </div>
    <div id="index-content-container">
        <div class="index-single-content-container">
            <a title="Se mulighederne" href="boder.php">
                <img srcset="images/Forside/600x338/Frontpage_Street_Food_Madboder.jpg 600w, images/Forside/1170x568/Frontpage_Street_Food_Madboder.jpg 601w" alt=" Mad og drikke" class="billede_boder
            img-responsive">
                <span class="centered_boder">Mad og drikke</span>
            </a>
        </div>

        <div class="index-single-content-container">
            <a href="praktiskinformation.php" title="Find information om Aarhus Streetfood">
                <img srcset="images/Forside/600x338/Frontpage_Praktisk-Info.jpg ,images/Forside/1170x568/Frontpage_Praktisk-Info.jpg 601w" alt="Praktisk info"
                     class="billede_boder img-responsive">
            <span class="centered_boder">Praktisk information</span>
            </a>
        </div>

        <div class="index-single-content-container">
            <a title="Ansøg nu! (IKKE IMPLEMENTERET)" href="#">
                <img srcset="images/Forside/600x338/Frontpage_Til-kommende-koekkener.jpg 600w, images/Forside/1170x568/Frontpage_Til-kommende-koekkener.jpg 601w" alt="Til kommende køkkener"
                     class="billede_boder img-responsive">
                <span class="centered_boder">Til kommende køkkener</span>
            </a>
        </div>
    </div>
    <h3>Seneste fra Instagram
        <a class="instagram-logo" href="https://www.instagram.com/aarhusstreetfood/"
           target="_blank" title="Aarhus Streetfood på Instragram">
            <i class="fab fa-instagram"></i>
        </a>
    </h3>
    <!-- SnapWidget for instagram integration -->
    <script src="https://snapwidget.com/js/snapwidget.js"></script>
    <iframe src="https://snapwidget.com/embed/619604" class="snapwidget-widget" allowtransparency="true" frameborder="0"
            scrolling="no" style="border:none; overflow:hidden; width:100%; "></iframe>

    <h3>Find os her</h3>
    <div class="map-responsive">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2222.3152265275107!2d10.207394815723934!3d56.15165418066186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464c3f902c893789%3A0x567589dbccff414a!2sAarhus+Street+Food!5e0!3m2!1sda!2sdk!4v1541765436176"
                width="600" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</div>
<?php include("includes/footer.php"); ?>
</body>
<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }

    //Use setInterval instead of setTimeout, to prevent other javascript from waiting before it runs...
    //Moved outside of main function so we don't get recurring function runs!
    setInterval(showSlides, 4000); // Skift billede hvert 4. sekund
</script>
<?php include("includes/afterBodyScripts.php"); ?>

</html>