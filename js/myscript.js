jQuery(function( $ ){
    /* search form display on/off */
    $('.search').click(function(){
        $('.searchform').toggle(400);
    });

    /* goto top */
    $('.pagetop').hide();
    $(window).scroll(function(){
        if($(window).scrollTop() > 100){
            $('.pagetop').fadeIn();
        }else{
            $('.pagetop').fadeOut();
        }
    });
    $('.pagetop').click(function(){
        $('html,body').animate({scrollTop:0}, '500');
        return false;
    });
});
jQuery(window).load(function(){
    var h = jQuery('.main section').height();
    jQuery('.main section a').css('height', h);
});
