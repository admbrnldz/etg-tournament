<script src="{{ asset('assets/js/jq.js') }}"></script>
<script src="{{ asset('assets/js/jq-ui.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<script>
$(function() {
    function checkScroll(){
        var startY = $('.navbar-inverse').height() * 2;

        if($(window).scrollTop() > startY){
            $('.navbar-inverse').addClass("scrolled");
        }else{
            $('.navbar-inverse').removeClass("scrolled");
        }
    }

    if($('.navbar-inverse').length > 0){
        $(window).on("scroll load resize", function(){
            checkScroll();
        });
    }
});
   
</script>