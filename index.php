<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("includes/headerScripts.php"); ?>
    <title>Aarhus Streetfood</title>
</head>
<body>
<?php include("includes/mainNav.php"); ?>

    <style>
    ¨
/* Slider forside */

* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: auto;
  position: relative;
  margin: auto;
}

/* Skjul billeder som standard */
.mySlides {
    display: none;
}

/* Frem og tilbage knapper */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Positionér "næste knappen" til højre */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* På hover, tilføj sort baggrundsfarve med lidt see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Teaser tekst */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Nummeret tekst (1/3 osv) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1};
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1};
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
        </style>
    
     
<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width billeder angivet med nummer og teaser tekst -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="images/forside2.png" style="width:100%">
    <div class="text">Kom ned og oplev hyggen i garagen! Vi har åbent alle dage fra klokken 11.30.</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="images/forside1.jpg" style="width:100%">
    <div class="text">Oplev ægte street food i hjertet af Aarhus med mad og drikke fordelt ud på 25 køkkener og barer.</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="images/forside2.png" style="width:100%">
    <div class="text">Følg med på vores Facebook og Instagram for nyheder og kommende events. </div>
  </div>

  <!-- Frem og tilbage knapper -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- De runde knapper -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
        </div>
    
    
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
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 4000); // Skift billede hvert 4. sekund
}
    
    </script>
    
    <!--Slider forside slut-->
    
<div class="container">
<h2>Hvad er Aarhus Street Food?</h2>
    <p>Aarhus Street Food er et madmarked placeret i hjertet af Aarhus ved Rutebilstationen. Aarhus Street Food er en gastronomisk iværksætterklynge, hvor kokke, madører o.lign kan prøve lykken af som chef i eget køkken. Der lægges vægt på diversitet og originalitet og det er centralt, at køkkenenerne bruger friske råvarer og at maden er hjemmelavet.</p>
    <p>Kom forbi som du er og prøv et anderledes måltid mad. Det behøver ikke at være dyrt - du kan sagtens få et måltid mad til 50 kroner!  </p></div>
    
<!--Kategori billeder -->
    
     <div class="container">
    
    <div class="container_boder">
            <a title="Duck it" href="Duckit.php"> <img src="images/duckit.png" alt="Mad og drikke" class="billede_boder" width="100%">
                <span class="centered_boder">Mad og drikke</span> </a>
        </div>

        <div class="container_boder">
            <a title="PopSicle" href="Is.php"><img src="images/Popscile.png" alt="Til kommende køkkener" class="billede_boder" width="100%" href="Is.php">
            <span class="centered_boder">Til kommende køkkener</span></a>
        </div>

        <div class="container_boder">
            <img src="images/cheesecake.png" alt="Praktisk info" class="billede_boder" width="100%">
            <span class="centered_boder">Praktisk information</span>
        </div>
         

    

    <!-- SnapWidget for instagram integration -->
    <script src="https://snapwidget.com/js/snapwidget.js"></script>
    <iframe src="https://snapwidget.com/embed/619604" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; "></iframe>
</div>
<?php include("includes/footer.php"); ?>
</body>
<?php include("includes/afterBodyScripts.php"); ?>

</html>