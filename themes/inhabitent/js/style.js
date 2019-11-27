(function ($) {
    //on clicking the search button, I want to translate the search bar into view and type

    $('.search-submit').on('click', function (e) {
        e.preventDefault();
        // 
        $('.main-navigation').css({ 'transform': 'translateX(0px)', 'transition': '.3s' });
    });
})(jQuery);//end of doc ready