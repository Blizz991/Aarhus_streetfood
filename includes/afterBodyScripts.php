<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="js/afterBodyScript.js"></script>
<!--<script src="js/notify.min.js"></script>-->
<script src="js/jquery.slidereveal.min.js"></script>


<script>
    $('#side-nav').slideReveal({
        trigger: $(".toggle-side-nav"),
        position: "right",
        push: false,
        overlay: true,
        speed: 400
    });
</script>