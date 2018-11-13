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
            var targetOffset = ($(id).offset().top -150);
            //Smoothly scroll to the element
            $('html,body').animate({scrollTop: targetOffset}, -150);
            //Highlight the element for 1.5 seconds to attract attention (Function from Jquery UI)
            $(id).effect("highlight", {color: "#7d7d7d"}, 2000);
        });
    })(jQuery);

    let shiftWindow;

    if ($('#subnav-container').is(':visible')){
         shiftWindow = function () { scrollBy(0, -245); };
    }else{
        shiftWindow = function () { scrollBy(0, -220); };
    }

    window.addEventListener("hashchange", shiftWindow);
    $(document).ready(function () {
        if (location.hash) shiftWindow();
    });
    //Enable tooltips from Jquery UI (uses title)
    $(function () {
        $(document).tooltip();
    });
});
