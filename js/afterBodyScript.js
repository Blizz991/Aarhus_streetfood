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

$(document).ready(function () {
    $('#side-nav').slideReveal({
        trigger: $(".toggle-side-nav"),
        position: "right",
        push: false,
        overlay: true,
        speed: 400
    });
    // Slow scroll with anchors
    (function ($) {
        //When a link is clicked that includes a # - run the following
        $(document).on('click', 'a[href^="#"]', function (e) {
            //Make sure the link doesn't send us to another page (which is the normal behaviour for links)
            e.preventDefault();
            var id = $(this).attr('href');
            //Smoothly scroll to the element
            $('html,body').animate({scrollTop: $(id).offset().top}, 500);
            //Highlight the element for 1.5 seconds to attract attention (Function from Jquery UI)
            $(id).effect("highlight", {color: "#7d7d7d"}, 2000);
        });
    })(jQuery);
    //Enable tooltips from Jquery UI (uses title)
    $(function () {
        $(document).tooltip();
    });
});
