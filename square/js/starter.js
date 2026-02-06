/* global ajaxurl */
jQuery(function ($) {
    $(function () {
        // Dismiss notice
        $(document).on('click', '.square-notice-nux .notice-dismiss', function () {
            $.ajax({
                type: 'POST',
                url: ajaxurl,
                data: {
                    nonce: squareNUX.nonce,
                    action: 'square_dismiss_notice'
                },
                dataType: 'json'
            });
        });
    });
});