<a id="back2Top" title="Back to top" href="#">&#10148;</a>

<!-- /*Scroll to top when arrow up clicked BEGIN*/ -->
<script>
$(window).scroll(function() {
    var height = $(window).scrollTop();
    if (height > 100) {
        $('#back2Top').fadeIn();
    } else {
        $('#back2Top').fadeOut();
    }
});
$(document).ready(function() {
    $("#back2Top").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

});
</script>
 <!-- /*Scroll to top when arrow up clicked END*/ -->
