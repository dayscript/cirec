/* Implement customer javascript here */
(function($) {
    Drupal.behaviors.cirec = {
        attach: function(context, settings){

            // Scroll al hacer click en el enlace de contacto
            if ( $('.form-contacto').length !== 0 ) {
                $('.contacto-footer').on('click', { elem: '.form-contacto' }, scrollToElem );
            }




            
        }
    }; //-- end Drupal.behaviors

    function scrollToElem (e) {
        e.preventDefault();
        var body = jQuery("html, body"),
            elHeight = $(e.data.elem).offset().top;
        body.animate({ scrollTop:elHeight }, '800', 'swing');
    }

})(jQuery);