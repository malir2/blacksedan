$(document).ready(function () {
    $("#menu_checkbox").change(function () {
        if ($(this).is(":checked")) {
            $("#navbarNav").css("transform", "translateX(0%)");
        } else {
            $("#navbarNav").css("transform", "translateX(-100%)");
        }
    });

    // Function to check if an element is in view
    function isInView(element) {
        const elementTop = $(element).offset().top;
        const elementBottom = elementTop + $(element).outerHeight();
        const viewportTop = $(window).scrollTop();
        const viewportBottom = viewportTop + $(window).height();

        return elementBottom > viewportTop && elementTop < viewportBottom;
    }

    // Check all elements with the class "animate-on-scroll"
    function checkInView() {
        $(".animate-on-scroll").each(function () {
            if (isInView(this)) {
                $(this).addClass("in-view"); // Add the class when in view
            }
        });
    }

    // Run the check on page load and on scroll
    $(window).on("scroll resize", checkInView);
    checkInView(); // Initial check on page load

    function isInViewFromTop(element) {
        const elementTop = $(element).offset().top;
        const elementBottom = elementTop + $(element).outerHeight();
        const viewportTop = $(window).scrollTop();
        const viewportBottom = viewportTop + $(window).height();

        return elementBottom > viewportTop && elementTop < viewportBottom;
    }

    // Check all elements with the class "animate-from-top"
    function checkInViewFromTop() {
        $(".animate-from-top").each(function () {
            if (isInViewFromTop(this)) {
                $(this).addClass("in-view-from-top"); // Add the class when in view
            }
        });
    }

    // Run the check on page load and on scroll
    $(window).on("scroll resize", checkInViewFromTop);
    checkInViewFromTop(); // Initial check on page load

    function isInViewFromLeft(element) {
        const elementTop = $(element).offset().top;
        const elementBottom = elementTop + $(element).outerHeight();
        const viewportTop = $(window).scrollTop();
        const viewportBottom = viewportTop + $(window).height();

        return elementBottom > viewportTop && elementTop < viewportBottom;
    }

    function checkInViewFromLeft() {
        $(".animate-from-left").each(function () {
            if (isInViewFromLeft(this)) {
                $(this).addClass("in-view-from-left"); // Add the class when in view
            }
        });
    }

    function isInViewFromRight(element) {
        const elementTop = $(element).offset().top;
        const elementBottom = elementTop + $(element).outerHeight();
        const viewportTop = $(window).scrollTop();
        const viewportBottom = viewportTop + $(window).height();

        return elementBottom > viewportTop && elementTop < viewportBottom;
    }

    function checkInViewFromRight() {
        $(".animate-from-right").each(function () {
            if (isInViewFromRight(this)) {
                $(this).addClass("in-view-from-right"); // Add the class when in view
            }
        });
    }

    // Run the checks on page load and on scroll
    $(window).on("scroll resize", checkInViewFromLeft);
    $(window).on("scroll resize", checkInViewFromRight);
    checkInViewFromLeft(); // Initial check on page load
    checkInViewFromRight(); // Initial check on page load
});
