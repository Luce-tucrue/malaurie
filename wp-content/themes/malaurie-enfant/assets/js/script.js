(function ($) {

    //smooth Scroll

    // Select all links with hashes
    $('a[href*="#"]')
    // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function(event) {
            // On-page links
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                &&
                location.hostname == this.hostname
            ) {
                // Figure out element to scroll to
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top - 280
                    }, 500, function() {
                        // Callback after animation
                        // Must change focus!
                        var $target = $(target);
                        $target.focus();
                        if ($target.is(":focus")) { // Checking if the target was focused
                            return false;
                        } else {
                            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                            $target.focus(); // Set focus again
                        };
                    });
                }
            }
        });



    //update URL scrolling

    $('section').on('mouseenter', function () {
        $id_section = $(this).attr("id");
        window.history.pushState("object or string", "Title", "/#" + $id_section + "");
    })


    //update URL clicking navbar

    $('.menu-item > a').click( function () {
        $dataTitle_menuItem = $(this).data('title');
        console.log($dataTitle_menuItem);
        window.history.pushState("object or string", "Title", "/#" + $dataTitle_menuItem + "");
    })

})(jQuery);
