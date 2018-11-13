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
            $(id).effect("highlight", {color:"#7d7d7d"}, 2000);
        });
    })(jQuery);

    //Enable tooltips from Jquery UI (uses title)
    $(function () {
        $(document).tooltip();
    });
});
