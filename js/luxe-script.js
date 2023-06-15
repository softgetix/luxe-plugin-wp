

jQuery(".luxe-menu-item-has-children > a").click(function(e) {
  e.preventDefault();
  var $this = jQuery(this); 
  $(this).find('.luxe-sub-menu').slideToggle();
  $this.toggleClass("is-open").next().toggleClass('show').slideToggle(350);
  $this.parent().siblings().find('luxe-menu-ul li .luxe-sub-menu').removeClass('show').slideUp(350);
});



// jQuery(document).ready(function($) {
//     $('.luxe-menu-item-has-children').on('click', function() {
//         $(this).find('.luxe-sub-menu').slideToggle();
//         $(this).find('.luxe-toggle-sign').text(function(_, text) {
//             return text === '+' ? '-' : '+';
//         });
//     });
// });

jQuery(document).ready(function($) {
    $('.luxe-menu-item-has-children').on('click', function(e) {
        var submenu = $(this).find('.luxe-sub-menu').first();
        var toggleSign = $(this).find('.luxe-toggle-sign').first();
        
        submenu.slideToggle();
        toggleSign.text(function(_, text) {
            return text === '+' ? '-' : '+';
        });

        // Check if the click target is not the parent element itself
        if (!$(e.target).is(this)) {
            e.stopPropagation(); // Stop the event propagation
        }
    });
});
