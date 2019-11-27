(function ($) {
    //on clicking the search button, I want to translate the search bar into view and type
    function clickSearch() {

        $('.search-submit').on('click', function (e) {
            e.preventDefault();
            $('.main-navigation').css({ 'transform': 'translateX(0px)', 'transition': '.3s' });

            // $('.search-field').focus();

        });
    }
    $('.search-field').focusout(function () {
        $('.main-navigation').css({ 'transform': 'translateX(175px)', 'transition': '.3s' });

    });
    clickSearch();
})(jQuery);//end of doc ready