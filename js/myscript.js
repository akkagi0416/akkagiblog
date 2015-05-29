jQuery(function( $ ){
    /*
    $('.search').toggle(function(){
        $('.searchform').css('display', 'block');
    },
    function(){
        $('.searchform').css('display', 'none');
    });
    */
    $('.search').click(function(){
        $('.searchform').toggle(200);
    });
});
