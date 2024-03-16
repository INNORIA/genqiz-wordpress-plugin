<?php if (!defined('ABSPATH')) {
    exit;
} ?>

<!-- Start of Genqiz (https://genqiz.com/) code -->
<script type="text/javascript">
    window.__be = window.__be || {};
    (function () {
        var be = document.createElement('script'); be.type = 'text/javascript'; be.async = true;
        be.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + '<?= GENQIZCHATBOT_CHATBOT_URL ?>/chat-widget.js?token=<?= GENQIZCHATBOT_Public::get_instance()->data_token_id ?>&inbox=<?= GENQIZCHATBOT_Public::get_instance()->data_inbox_id ?>'
        console.log(be);
        var s = document.getElementsByTagName('script')[0];
        console.log(s);
        s.parentNode.insertBefore(be, s);
    })();
</script>
<!-- End of Genqiz code -->