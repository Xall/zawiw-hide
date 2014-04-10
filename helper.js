jQuery( document ).ready(function() {
    // Hide all content elements and the down arrows
    jQuery(".zawiw-hide-icon.fa-caret-down").hide();
    jQuery(".zawiw-hide-content").hide();

    // Click event
    jQuery(".zawiw-hide").click(function() {
        jQuery(this).next().toggle();
        jQuery(".zawiw-hide-icon", this).toggle();
    });
});
// alert('test');