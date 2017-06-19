/**
 * Created by root on 19.06.17.
 */
(function( $ ) {
    $(document).ready(function() {
        var slider = $('#slickSlider');
        var sliderNav = $('#slickNav');
        slider.slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            //arrows: false,
            fade: true,
            asNavFor: '.slider_nav',
            prevArrow: '<div class="slider_arrow left"></div>',
            nextArrow: '<div class="slider_arrow right"></div>'
        });

        sliderNav.slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            asNavFor: '.slick_slider',
            dots: false,
            centerMode: true,
            focusOnSelect: true,
            arrows: false
           // prevArrow: '<div class="slider_arrow left"></div>',
            //nextArrow: '<div class="slider_arrow right"></div>'
        });
        console.log(sliderNav);
    })


})(jQuery);