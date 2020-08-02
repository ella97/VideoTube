$(document).ready(function() {

    $(".nav-show-hide").on("click", function() {

        var main = $("#main-section-container");
        var nav = $("#side-nav-container");

        if(main.hasClass("leftPadding")) {
            nav.hide();
        }
        else {
            nav.show();
        }

        main.toggleClass("leftPadding");

    });
    

});