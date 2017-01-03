const Share = {
    
    init: function() {
        const $share_triggers = $(".share_area");
        
        const $overlay = $("#white_overlay");
        const $modal = $('#share_modal');
        const $sharer = $('.sharer');
        const $exit_icon = $modal.find('#exit_icon > path');
        
        const $share_input = $modal.find('#share_input');
        const $share_copy = $modal.find('#share_copy');
    
        $share_triggers.click(function() {
            const href = $(this).attr('data-href');
            $modal.addClass('open');
            $share_input.val(href);
            $sharer.attr('data-url', href);
            
            $overlay.addClass('active');
        });
        
        $share_copy.click(function() {
            $(this).prev().select();
            document.execCommand('copy');
        });
        
        $overlay.click(removeOverlay);
        $exit_icon.click(removeOverlay);
        
        function removeOverlay(e) {
            if (e.target != $overlay.get(0) && !$exit_icon.get().includes(e.target)) {
                return false;
            } 
            $modal.removeClass('open');
            $overlay.removeClass('active');
        }
    }
}