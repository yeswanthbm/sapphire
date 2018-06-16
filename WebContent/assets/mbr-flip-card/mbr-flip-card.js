function bendBottomCorner() {
    $(".flip-card:not(.builderCard)").each(function() {
        $(this).addClass('builderCard');
    });
}

//sapphire initialization
var isBuilder = $('html').hasClass('is-builder'); 
if (isBuilder) {
    $(document).on('add.cards', function() {
        if ($('.flip-card').length != 0) {
            bendBottomCorner();
        }
    });
}