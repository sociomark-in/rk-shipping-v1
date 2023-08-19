<div class="widget-scroll_to hidden" id="scrollTo" title="Scroll To Top">
    <img src="<?= base_url() ?>assets/media/images/icon/scrollto-icon.png" alt="Scroll To Top">
</div>

<script>
    $(document).ready(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $("#scrollTo").fadeIn();
            } else {
                $("#scrollTo").fadeOut();
            }
        });
        $("#scrollTo").click(function() {
            $("html, body").animate({
                    scrollTop: 0,
                },
                600
            );
            return false;
        });
    });
</script>